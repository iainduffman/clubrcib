<?php

use YOOtheme\Util\Arr;

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            global $wp_registered_widgets;

            $module = $params['app']['modules']->get('yootheme/wordpress-widgets');
            $widget = isset($node->props['widget']) ? $node->props['widget'] : null;
            $instance = isset($wp_registered_widgets[$widget]) ? $wp_registered_widgets[$widget] : null;
            $filter = function ($widgets) use ($widget) {
                return in_array($widget, $widgets);
            };

            if (empty($instance['callback']) || !is_callable($instance['callback']) || !Arr::some(wp_get_sidebars_widgets(), $filter)) {
                return false;
            }

            call_user_func($instance['callback'], wp_parse_args($instance, [
                'name' => '',
                'id' => '',
                'description' => '',
                'class' => '',
                'before_widget' => '<content>',
                'after_widget' => '</content>',
                'before_title' => '<title>',
                'after_title' => '</title>',
                'widget_id' => $instance['id'],
                'widget_name' => $instance['name'],
                'yoo_element' => $node,
            ]), $instance['params'][0]);

            if ($widget = @array_pop($module->widgets[$module->sidebar])) {
                $node->widget = $widget;
                $node->props = array_merge(['showtitle' => null], $widget->config->all(), $node->props);
            }

        },

    ],

];
