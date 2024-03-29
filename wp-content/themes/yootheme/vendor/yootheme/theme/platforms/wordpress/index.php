<?php

$config = [

    'name' => 'yootheme/wordpress-theme',

    'main' => 'YOOtheme\\Theme\\Wordpress',

    'inject' => [

        'url' => 'app.url',
        'view' => 'app.view',
        'admin' => 'app.admin',
        'sections' => 'app.view.sections',
        'customizer' => 'theme.customizer',

    ],

    'events' => [

        'init' => function ($app) {

            $app['kernel']->addMiddleware(function ($request, $response, $next) {

                // check user capabilities
                if (!$request->getAttribute('allowed') && !current_user_can('edit_theme_options')) {
                    $this->app->abort(403, 'Insufficient User Rights.');
                }

                return $next($request, $response);
            });

            add_action('wp_loaded', function () {
                $this->app->trigger('theme.init', [$this->theme]);
            });

        },

        'theme.site' => function ($theme) {

            $custom = $theme->get('custom_js') ?: '';

            if ($theme->get('jquery') || strpos($custom, 'jQuery') !== false) {
                wp_enqueue_script('jquery');
            }

            add_action('wp_head', function () use ($custom) {

                if ($custom) {

                    if (stripos(trim($custom), '<script') === 0) {
                        echo $custom;
                    } else {
                        echo "<script>try { {$custom} } catch (e) { console.error('Custom Theme JS Code: ', e); }</script>";
                    }
                }

            }, 20);

        },

    ],

    'config' => [

        'panels' => [

            'advanced' => [
                'fields' => [

                    'disable_wpautop' => [
                        'label' => 'Filter',
                        'description' => 'Disables the <a href="https://developer.wordpress.org/reference/functions/wpautop/" target="_blank">wpautop</a> filter for the_content and the_excerpt.',
                        'type' => 'checkbox',
                        'text' => 'Disable wpautop',
                    ],

                ],
            ],

            'api-key' => [
                'fields' => [

                    'minimum_stability' => [
                        'label' => 'Minimum Stability',
                        'description' => 'The minimum stability of the theme updates. Stable is recommended for production websites, Beta is only for testing new features and reporting issues.',
                        'type' => 'select',
                        'options' => [
                            'Stable' => 'stable',
                            'Beta' => 'beta',
                        ],
                    ],

                ],
            ],

            'system-post' => [
                'title' => 'Post',
                'width' => 400,
                'fields' => [

                    'post.width' => [
                        'label' => 'Width',
                        'description' => 'Set the post width. The image and content can\'t expand beyond this width.',
                        'type' => 'select',
                        'options' => [
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                            'Default' => '',
                            'Large' => 'large',
                            'Expand' => 'expand',
                            'None' => 'none',
                        ],
                    ],

                    'post.padding' => [
                        'label' => 'Padding',
                        'description' => 'Set the vertical padding.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                            'Large' => 'large',
                            'XLarge' => 'xlarge',
                        ],
                    ],

                    'post.padding_remove' => [
                        'type' => 'checkbox',
                        'text' => 'Remove top padding',
                    ],

                    'post.content_width' => [
                        'label' => 'Content Width',
                        'description' => 'Set an explicit content width which doesn\'t affect the image or inherit the post width.',
                        'type' => 'select',
                        'options' => [
                            'Auto' => '',
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                        ],
                        'enable' => 'post.width != "xsmall"',
                    ],

                    'post.image_align' => [
                        'label' => 'Image Alignment',
                        'description' => 'Align the image to the top or place it between the title and the content.',
                        'type' => 'select',
                        'options' => [
                            'Top' => 'top',
                            'Between' => 'between',
                        ],
                    ],

                    'post.image_margin' => [
                        'label' => 'Image Margin',
                        'description' => 'Set the top margin if the image is aligned between the title and the content.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                        'enable' => 'post.image_align == "between"',
                    ],

                    'post.image_dimension' => [

                        'type' => 'grid',
                        'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.',
                        'fields' => [

                            'post.image_width' => [
                                'label' => 'Image Width',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                            'post.image_height' => [
                                'label' => 'Image Height',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                        ],

                    ],

                    'post.header_align' => [
                        'label' => 'Alignment',
                        'description' => 'Align the title and meta text.',
                        'type' => 'checkbox',
                        'text' => 'Center the title and meta text',
                    ],

                    'post.title_margin' => [
                        'label' => 'Title Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.meta_align' => [
                        'label' => 'Meta Alignment',
                        'description' => 'Position the meta text above or below the title.',
                        'type' => 'select',
                        'options' => [
                            'Top' => 'top',
                            'Bottom' => 'bottom',
                        ],
                    ],

                    'post.meta_margin' => [
                        'label' => 'Meta Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.meta_style' => [
                        'label' => 'Meta Style',
                        'description' => 'Display the meta text in a sentence or a horizontal list.',
                        'type' => 'select',
                        'options' => [
                            'List' => 'list',
                            'Sentence' => 'sentence',
                        ],
                    ],

                    'post.content_margin' => [
                        'label' => 'Content Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.content_dropcap' => [
                        'label' => 'Drop Cap',
                        'description' => 'Set a large initial letter that drops below the first line of the first paragraph.',
                        'type' => 'checkbox',
                        'text' => 'Show drop cap',
                    ],

                    'post.navigation' => [
                        'label' => 'Navigation',
                        'description' => 'Enable a navigation to move to the previous or next post.',
                        'type' => 'checkbox',
                        'text' => 'Show navigation',
                    ],

                    'post.date' => [
                        'label' => 'Display',
                        'type' => 'checkbox',
                        'text' => 'Show date',
                    ],

                    'post.author' => [
                        'type' => 'checkbox',
                        'text' => 'Show author',
                    ],

                    'post.categories' => [
                        'type' => 'checkbox',
                        'text' => 'Show categories',
                    ],

                    'post.tags' => [
                        'description' => 'Show system fields for single posts. This option does not apply to the blog.',
                        'type' => 'checkbox',
                        'text' => 'Show tags',
                    ],

                ],
            ],

            'system-blog' => [
                'title' => 'Blog',
                'width' => 400,
                'fields' => [

                    'blog.width' => [
                        'label' => 'Width',
                        'description' => 'Set the blog width.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'Small' => 'small',
                            'Large' => 'large',
                            'Expand' => 'expand',
                        ],
                    ],

                    'blog.padding' => [
                        'label' => 'Padding',
                        'description' => 'Set the vertical padding.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                            'Large' => 'large',
                            'XLarge' => 'xlarge',
                        ],
                    ],

                    'blog.column' => [
                        'label' => 'Columns',
                        'type' => 'select',
                        'options' => [
                            '1' => 1,
                            '2' => 2,
                            '3' => 3,
                            '4' => 4,
                        ],
                    ],

                    'blog.column_gutter' => [
                        'description' => 'Set the number of columns.',
                        'type' => 'checkbox',
                        'text' => 'Large gutter',
                        'enable' => 'blog.column != "1"',
                    ],

                    'blog.column_breakpoint' => [
                        'label' => 'Breakpoint',
                        'description' => 'Set the breakpoint from which grid cells will stack.',
                        'type' => 'select',
                        'options' => [
                            'Small (Phone Landscape)' => 's',
                            'Medium (Tablet Landscape)' => 'm',
                            'Large (Desktop)' => 'l',
                            'X-Large (Large Screens)' => 'xl',
                        ],
                        'enable' => 'blog.column != "1"',
                    ],

                    'blog.grid_masonry' => [
                        'label' => 'Masonry',
                        'description' => 'The masonry effect creates a layout free of gaps even if grid cells have different heights. ',
                        'type' => 'checkbox',
                        'text' => 'Enable masonry effect',
                        'enable' => 'blog.column != "1"',
                    ],

                    'blog.grid_parallax' => [
                        'label' => 'Parallax',
                        'description' => 'The parallax effect moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels.',
                        'type' => 'range',
                        'attrs' => [
                            'min' => 0,
                            'max' => 600,
                            'step' => 10,
                        ],
                        'enable' => 'blog.column != "1"',
                    ],

                    'blog.image_align' => [
                        'label' => 'Image Alignment',
                        'description' => 'Align the image to the top or place it between the title and the content.',
                        'type' => 'select',
                        'options' => [
                            'Top' => 'top',
                            'Between' => 'between',
                        ],
                    ],

                    'blog.image_margin' => [
                        'label' => 'Image Margin',
                        'description' => 'Set the top margin if the image is aligned between the title and the content.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                        'enable' => 'blog.image_align == "between"',
                    ],

                    'blog.image_dimension' => [

                        'type' => 'grid',
                        'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.',
                        'fields' => [

                            'blog.image_width' => [
                                'label' => 'Image Width',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                            'blog.image_height' => [
                                'label' => 'Image Height',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                        ],

                    ],

                    'blog.header_align' => [
                        'label' => 'Alignment',
                        'description' => 'Align the title and meta text as well as the continue reading button.',
                        'type' => 'checkbox',
                        'text' => 'Center the title, meta text and button',
                    ],

                    'blog.title_style' => [
                        'label' => 'Title Style',
                        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'H1' => 'h1',
                            'H2' => 'h2',
                            'H3' => 'h3',
                            'H4' => 'h4',
                        ],
                    ],

                    'blog.title_margin' => [
                        'label' => 'Title Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.meta_margin' => [
                        'label' => 'Meta Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.content_margin' => [
                        'label' => 'Content Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.content_align' => [
                        'label' => 'Content Alignment',
                        'description' => 'This option applies to the blog overview and not to single posts.',
                        'type' => 'checkbox',
                        'text' => 'Center the content',
                    ],

                    'blog.content_length' => [
                        'label' => 'Content Length',
                        'description' => 'Limit the content length to a number of characters. All HTML elements will be stripped.',
                        'type' => 'number',
                    ],

                    'blog.button_style' => [
                        'label' => 'Button',
                        'description' => 'Select a style for the continue reading button.',
                        'type' => 'select',
                        'options' => [
                            'Default' => 'default',
                            'Primary' => 'primary',
                            'Secondary' => 'secondary',
                            'Danger' => 'danger',
                            'Text' => 'text',
                        ],
                    ],

                    'blog.button_margin' => [
                        'label' => 'Button Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.navigation' => [
                        'label' => 'Navigation',
                        'description' => 'Use a numeric pagination or previous/next links to move between blog pages.',
                        'type' => 'select',
                        'options' => [
                            'Pagination' => 'pagination',
                            'Previous/Next' => 'previous/next',
                        ],
                    ],

                    'blog.date' => [
                        'label' => 'Display',
                        'type' => 'checkbox',
                        'text' => 'Show date',
                    ],

                    'blog.author' => [
                        'type' => 'checkbox',
                        'text' => 'Show author',
                    ],

                    'blog.categories' => [
                        'type' => 'checkbox',
                        'text' => 'Show categories',
                    ],

                    'blog.comments' => [
                        'type' => 'checkbox',
                        'text' => 'Show comments count',
                    ],

                    'blog.content' => [
                        'type' => 'checkbox',
                        'text' => 'Show content',
                    ],

                    'blog.tags' => [
                        'type' => 'checkbox',
                        'text' => 'Show tags',
                    ],

                    'blog.button' => [
                        'type' => 'checkbox',
                        'text' => 'Show button',
                    ],

                    'blog.category_title' => [
                        'type' => 'checkbox',
                        'text' => 'Show archive category title',
                        'description' => 'Show system fields for the blog. This option does not apply to single posts.',
                    ],

                ],
            ],

        ],

        'defaults' => [

            'post' => [

                'width' => '',
                'padding' => '',
                'content_width' => '',
                'image_align' => 'top',
                'image_margin' => 'default',
                'image_width' => '',
                'image_height' => '',
                'header_align' => 0,
                'title_margin' => 'large',
                'meta_align' => 'bottom',
                'meta_margin' => 'default',
                'meta_style' => 'phrase',
                'content_margin' => 'medium',
                'content_dropcap' => 0,
                'navigation' => 1,
                'date' => 1,
                'author' => 1,
                'categories' => 1,
                'tags' => 1,

            ],

            'blog' => [

                'width' => '',
                'padding' => '',
                'column' => 1,
                'column_gutter' => 0,
                'column_breakpoint' => 'm',
                'image_align' => 'top',
                'image_margin' => 'default',
                'image_width' => '',
                'image_height' => '',
                'header_align' => 0,
                'title_style' => '',
                'title_margin' => 'large',
                'meta_margin' => 'default',
                'content_margin' => 'medium',
                'content_align' => 0,
                'content_length' => '',
                'button_style' => 'default',
                'button_margin' => 'medium',
                'navigation' => 'pagination',
                'date' => 1,
                'author' => 1,
                'categories' => 1,
                'comments' => 1,
                'content' => 1,
                'tags' => 0,
                'button' => 1,
                'category_title' => 0,

            ],

            'minimum_stability' => 'stable',

        ],

    ],

];

return defined('WPINC') ? $config : false;
