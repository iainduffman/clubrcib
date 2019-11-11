<?php

$config = [

    'name' => 'yootheme/wordpress-editor',

    'inject' => [
        'scripts' => 'app.scripts',
    ],

    'events' => [

        'theme.admin' => function () {

            // init on certain admin screens
            add_action('current_screen', function ($screen) {

                if ($screen->base != 'customize') {
                    return;
                }

                add_action('admin_print_footer_scripts', function () {

                    if (function_exists('wp_enqueue_editor')) {

                        // WordPress 4.8 and later
                        wp_enqueue_editor();

                    } else {

                        // WordPress 4.7 and earlier. Can be removed when not needed anymore.
                        // If removed: Will fail gracefully and fall back to code editor only

                        wp_enqueue_script('utils');
                        wp_enqueue_script('wplink');

                        // create dummy editor to initialize tinyMCE
                        echo '<div style="display:none">';
                        wp_editor('', 'yo-editor-dummy', [
                            'wpautop' => false,
                            'media_buttons' => true,
                            'textarea_name' => 'textarea-dummy-yootheme',
                            'textarea_rows' => 10,
                            'editor_class' => 'horizontal',
                            'teeny' => false,
                            'dfw' => false,
                            'tinymce' => true,
                            'quicktags' => true,
                        ]);
                        echo '</div>';
                    }

                });

            });

            $this->scripts->add('customizer-editor', "{$this->path}/app/editor.min.js", 'customizer');
        },

    ],

];

return defined('WPINC') ? $config : false;
