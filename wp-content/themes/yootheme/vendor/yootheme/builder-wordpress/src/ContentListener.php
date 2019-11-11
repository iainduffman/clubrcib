<?php

namespace YOOtheme\Builder\Wordpress;

use YOOtheme\EventSubscriber;

class ContentListener extends EventSubscriber
{
    const PATTERN = '/<!--\s?(\{(?:.*?)\})\s?-->/';

    public $inject = [
        'admin' => 'app.admin',
        'routes' => 'app.routes',
        'builder' => 'app.builder',
        'customizer' => 'theme.customizer',
    ];

    public function onInit($theme)
    {
        if ($this->admin) {
            $this->routes->post('/page', [$this, 'savePage']);
        }

        add_filter('pre_post_content', function ($content) {

            // Prevent content filters from corrupting builder JSON in post_content.
            if ($this->matchContent($content)) {
                if (is_callable('kses_remove_filters')) {
                    kses_remove_filters();
                }

                if (is_callable('wp_remove_targeted_link_rel_filters')) {
                    wp_remove_targeted_link_rel_filters();
                }
            }

            return $content;
        });
    }

    public function onSite($theme)
    {
        add_action('wp', function () {

            if (is_page()) {
                $this->app->trigger('content.prepare', [get_queried_object()]);
            }

        });
    }

    public function onContent($obj)
    {
        $obj->content = !post_password_required($obj) && isset($obj->post_content) && ($matches = $this->matchContent($obj->post_content)) ? $matches[1] : null;

        if (!$this->customizer->isActive()) {
            return;
        }

        if ($page = get_theme_mod('page')) {
            if ($obj->ID === $page['id']) {
                $obj->content = json_encode($page['content']);
            } else {
                unset($page);
            }
        }

        $modified = !empty($page);

        $data = [
            'id' => $obj->ID,
            'title' => $obj->post_title,
            'content' => $obj->content ? $this->builder->load($obj->content) : $obj->content,
            'modified' => $modified,
            'modifiedDate' => $modified ? $page['modifiedDate'] : $this->toDate(@$obj->post_modified),
            'collision' => $modified ? $this->getCollision($page['modifiedDate'], $obj) : false,
        ];

        $this->customizer->addData('page', $data);
    }

    public function savePage($page, $overwrite = false, $response)
    {
        if (!$page or !$page = base64_decode($page) or !$page = json_decode($page)) {
            $this->app->abort(500, 'Something went wrong.');
        }

        if (!current_user_can('edit_post', $page->id)) {
            $this->app->abort(403, 'Insufficient User Rights.');
        }

        if (!$overwrite and $collision = $this->getCollision($page->modifiedDate, get_post($page->id))) {
            return $response->withJSON(compact('collision'));
        }

        $content = json_encode($page->content);
        $updated = wp_update_post([
            'ID' => $page->id,
            'post_content' => wp_slash("{$this->builder->withParams(['context' => 'content'])->render($content)}\n<!-- {$content} -->"),
        ], true) and update_post_meta($page->id, '_edit_last', get_current_user_id());

        if (is_wp_error($updated)) {
            $this->app->abort(500, 'Something went wrong.');
        }

        return $response->withJSON([
            'id' => $page->id,
            'modifiedDate' => $this->toDate(get_post_field('post_modified', $updated)),
        ]);
    }

    protected function getCollision($modified, $post)
    {

        if ($modified < ($modifiedDate = $this->toDate($post->post_modified))) {

            $author = $this->getModifiedAuthor($post);
            $modifiedBy = $author->data->display_name;

            return compact('modifiedBy', 'modifiedDate');
        }

        return false;
    }

    protected function toDate($date) {
        return date(DATE_W3C, $date ? strtotime($date) : time());
    }

    protected function getModifiedAuthor($post)
    {
        $userId = get_post_meta($post->ID, '_edit_last', true) or
        $revs = wp_get_post_revisions($post->ID) and $lastRev = end($revs) and $userId = $lastRev->post_author;

        return get_userdata($userId);
    }

    protected function matchContent($content)
    {
        if ($content && strpos($content, '<!--') !== false && preg_match(self::PATTERN, $content, $matches)) {
            return $matches;
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            'theme.init' => 'onInit',
            'theme.site' => 'onSite',
            'content.prepare' => ['onContent', 10],
        ];
    }
}
