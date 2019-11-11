<?php

$props['overlay_cover'] = $props['overlay_mode'] == 'cover' && $props['overlay_style'];

$el = $this->el('div');

// Container
$container = $this->el('div', [

    'class' => [
        'el-container',

        'uk-box-shadow-{image_box_shadow}' => $props['image'] || $props['hover_image'],
        'uk-box-shadow-hover-{image_hover_box_shadow}' => $props['image'] || $props['hover_image'],

        'uk-box-shadow-bottom {@image_box_decoration: shadow}',
        'tm-mask-default {@image_box_decoration: mask}',
        'tm-box-decoration-{image_box_decoration: default|primary|secondary}',
        'tm-box-decoration-inverse {@image_box_decoration_inverse} {@image_box_decoration: default|primary|secondary}',
        'uk-inline {@!image_box_decoration: |shadow}',
        'uk-inline-clip {@!image_box_decoration}',

        'uk-{text_color}' => !$props['overlay_style'] || $props['overlay_cover'],

        'uk-transition-toggle' => $isTransition = $props['overlay_hover'] || $props['image_transition'] || $props['hover_image'],
    ],

    'style' => [
        'min-height: {image_min_height}px' => $props['image'] || $props['hover_image'],
    ],

    'tabindex' => $isTransition ? 0 : null,
]);

// Inverse text color on hover
if ((!$props['overlay_style'] && $props['hover_image']) || ($props['overlay_cover'] && $props['overlay_hover'] && $props['overlay_transition_background'])) {
    $container->attr('uk-toggle', [
        'cls: uk-light uk-dark; mode: hover {@text_color_hover}',
    ]);
}

$overlay = $this->el('div', [

    'class' => [
        'uk-{overlay_style}',
        'uk-transition-{overlay_transition} {@overlay_hover}',

        'el-overlay uk-position-cover {@overlay_cover}',
        'uk-position-{overlay_margin} {@overlay_cover}',
    ],

]);

$content = $this->el('div', [

    'class' => [
        $props['overlay_style'] ? 'uk-overlay' : 'uk-panel',
        'uk-padding {@!overlay_padding} {@!overlay_style}',
        'uk-padding-{!overlay_padding: |none}',
        'uk-padding-remove {@overlay_padding: none} {@overlay_style}',
        'uk-width-{overlay_maxwidth} {@!overlay_position: top|bottom}',
        'uk-position-{!overlay_position: .*center.*} [uk-position-{overlay_margin} {@overlay_style}]',
        'uk-transition-{overlay_transition} {@overlay_hover}' => !($props['overlay_transition_background'] && $props['overlay_cover']),
        'uk-margin-remove-first-child',
    ],

]);

if (!$props['overlay_cover']) {
    $content->attr($overlay->attrs);
}

// Position
$center = $this->el('div', [

    'class' => [
        'uk-position-{overlay_position: .*center.*} [uk-position-{overlay_margin} {@overlay_style}]',
    ],

]);

// Link
$link = $this->el('a', [

    'class' => 'uk-position-cover',
    'href' => ['{link}'],
    'target' => ['_blank {@link_target}'],
    'uk-scroll' => strpos($props['link'], '#') === 0,

]);

?>

<?= $el($props, $attrs) ?>
    <?= $container($props) ?>

        <?php if ($props['image_box_decoration']) : ?>
        <div class="uk-inline-clip">
        <?php endif ?>

        <?php if ($props['image'] || $props['hover_image']) : ?>
        <?= $this->render("{$__dir}/template-image", compact('props')) ?>
        <?php endif ?>

        <?php if ($props['overlay_cover']) : ?>
        <?= $overlay($props, '') ?>
        <?php endif ?>

        <?php if ($props['title'] || $props['meta'] || $props['content']) : ?>

            <?php if ($this->expr($center->attrs['class'], $props)) : ?>
            <?= $center($props, $content($props, $this->render("{$__dir}/template-content", compact('props')))) ?>
            <?php else : ?>
            <?= $content($props, $this->render("{$__dir}/template-content", compact('props'))) ?>
            <?php endif ?>

        <?php endif ?>

        <?php if ($props['link']) : ?>
        <?= $link($props, '') ?>
        <?php endif ?>

        <?php if ($props['image_box_decoration']) : ?>
        </div>
        <?php endif ?>

    </div>
</div>
