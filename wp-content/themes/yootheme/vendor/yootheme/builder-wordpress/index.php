<?php

use YOOtheme\Builder\Wordpress\ContentListener;
use YOOtheme\Http\Uri;

$config = [

    'name' => 'yootheme/builder-wordpress',

    'main' => function ($app) {
        $app->subscribe(new ContentListener());
    },

    'inject' => [
        'view' => 'app.view',
        'builder' => 'app.builder',
        'sections' => 'app.view.sections',
    ],

    'routes' => function ($routes) {

        $routes->post('/builder/image', function ($src, $md5 = null, $response) {

            $uri = Uri::fromString($src);
            $file = basename($uri->getPath());

            if ($uri->getHost() === 'images.unsplash.com') {
                $file .= '.'.$uri->getQueryParam('fm', 'jpg');
            }

            $site = get_site_url(null, '/');
            $upload = wp_upload_dir();

            // file exists already?
            while ($iterate = @md5_file("{$upload['basedir']}/{$file}")) {

                if ($iterate === $md5 || is_null($md5)) {
                    return $response->withJson(str_replace($site, '', "{$upload['baseurl']}/{$file}"));
                }

                $file = preg_replace_callback('/-?(\d*)(\.[^.]+)?$/', function ($match) {
                    return sprintf('-%02d%s', intval($match[1]) + 1, isset($match[2]) ? $match[2] : '');
                }, $file, 1);
            }

            // set upload dir to base
            add_filter('upload_dir', function ($upload) {

                if ($upload['subdir']) {
                    $upload['url'] = $upload['baseurl'];
                    $upload['path'] = $upload['basedir'];
                }

                return $upload;
            });

            // download file
            $tmp = download_url($src);

            if (is_wp_error($tmp)) {
                $this->app->abort(500, $tmp->get_error_message());
            }

            // import file to uploads dir
            $id = media_handle_sideload([
                'name' => $file,
                'tmp_name' => $tmp,
            ], 0);

            if (is_wp_error($id)) {
                $this->app->abort(500, $id->get_error_message());
            }

            return $response->withJson(str_replace($site, '', wp_get_attachment_url($id)));
        });

    },

    'events' => [

        'builder.init' => [function ($builder) {

            $builder->addTypePath("{$this->path}/elements/*/element.json");

            if (is_child_theme()) {
                $builder->addTypePath(get_stylesheet_directory().'/builder/*/element.json');
            }

        }],

        'theme.site' => function () {

            $this->view->addLoader(function ($name, $parameters, $next) {
                return do_shortcode($next($name, $parameters));
            }, '*/builder/elements/layout/templates/template.php');

        },

        'content.prepare' => function ($obj) {

            if (!$this->sections->exists('builder') && isset($obj->content)) {
                $this->sections->set('builder', function () use ($obj) {
                    $result = $this->builder->render($obj->content, ['prefix' => 'page']);
                    $this->app->trigger('content', [$result]);
                    return $result;
                });
            }

            $this->theme->set('builder', $this->sections->exists('builder'));
        },

    ],

];

return defined('WPINC') ? $config : false;
