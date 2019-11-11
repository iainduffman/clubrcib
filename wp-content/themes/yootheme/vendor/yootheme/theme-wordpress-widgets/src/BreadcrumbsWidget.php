<?php

namespace YOOtheme\Theme;

use YOOtheme\ContainerTrait;
use YOOtheme\Theme\Wordpress\Breadcrumbs;

class BreadcrumbsWidget extends \WP_Widget
{
    use ContainerTrait;

    public $inject = [
        'view' => 'app.view',
    ];

    public function __construct()
    {
        parent::__construct('breadcrumbs', 'Breadcrumbs', [
            'description' => __('Display your sites breadcrumb navigation.', 'yootheme'),
        ]);
    }

    public function widget($args, $instance)
    {
        $output = [$args['before_widget']];

        if ($instance['title']) {
            $output[] = $args['before_title'] . $instance['title'] . $args['after_title'];
        }

        $output[] = $this->view->render('breadcrumbs', ['items' => Breadcrumbs::getItems()]);
        $output[] = $args['after_widget'];

        echo implode("\n", $output);
    }

    public function form($instance)
    {
        $instance = wp_parse_args((array) $instance, ['title' => '']);
        ?>
        <p>
            <label for="<?= $this->get_field_id('title') ?>"><?php _e('Title:', 'yootheme') ?></label>
            <input type="text" name="<?= $this->get_field_name('title') ?>" value="<?= esc_attr($instance['title']) ?>" class="widefat" id="<?= $this->get_field_id('title') ?>">
        </p>
        <?php
    }
}
