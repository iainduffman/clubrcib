<?php

// Display
foreach (['title', 'meta', 'content', 'link', 'hover_image'] as $key) {
    if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

$el = $this->el('div', [

    'class' => [
        'el-item',

        'uk-margin-auto uk-width-{item_maxwidth}',

        'uk-box-shadow-{image_box_shadow}' => $props['image'] || $props['hover_image'],
        'uk-box-shadow-hover-{image_hover_box_shadow}' => $props['image'] || $props['hover_image'],

        'uk-box-shadow-bottom {@image_box_decoration: shadow}',
        'tm-mask-default {@image_box_decoration: mask}',
        'tm-box-decoration-{image_box_decoration: default|primary|secondary}',
        'tm-box-decoration-inverse {@image_box_decoration_inverse} {@image_box_decoration: default|primary|secondary}',
        'uk-inline {@!image_box_decoration: |shadow}',
        'uk-inline-clip {@!image_box_decoration}',

        'uk-{0}' => !$element['overlay_style'] || $element['overlay_mode'] == 'cover'
            ? ($props['text_color'] ?: $element['text_color'])
            : false,

        'uk-transition-toggle' => $isTransition = $element['overlay_hover'] || $element['image_transition'] || $props['hover_image'],
    ],

    'style' => [
        'min-height: {image_min_height}px;' => $props['image'] || $props['hover_image'],
    ],

    'tabindex' => $isTransition ? 0 : null,
]);

// Inverse text color on hover
if ((!$element['overlay_style'] && $props['hover_image']) || ($element['overlay_cover'] && $element['overlay_hover'] && $element['overlay_transition_background'])) {
    $el->attr('uk-toggle', [
        'cls: uk-light uk-dark; mode: hover' => $props['text_color_hover'] || $element['text_color_hover'],
    ]);
}

$overlay = $this->el('div', [

    'class' => [
        'uk-{overlay_style}',
        'uk-transition-{overlay_transition} {@overlay_hover} {@overlay_cover}',

        'uk-position-cover {@overlay_cover}',
        'uk-position-{overlay_margin} {@overlay_cover}',
    ],

]);

$content = $this->el('div', [

    'class' => [
        $element['overlay_style'] ? 'uk-overlay' : 'uk-panel',
        'uk-padding {@!overlay_padding} {@!overlay_style}',
        'uk-padding-{!overlay_padding: |none}',
        'uk-padding-remove {@overlay_padding: none} {@overlay_style}',
        'uk-width-{overlay_maxwidth} {@!overlay_position: top|bottom}',
        'uk-position-{!overlay_position: .*center.*} [uk-position-{overlay_margin} {@overlay_style}]',
        'uk-transition-{overlay_transition} {@overlay_hover}' => !$element['overlay_transition_background'] || !$element['overlay_cover'],
        'uk-margin-remove-first-child',
    ],

]);

if (!$element['overlay_cover']) {
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

    'href' => $props['link'],
    'class' => ['uk-position-cover'],

]);

// Link and Lightbox
if ($element['lightbox']) {

    // If link is not set use the default image for the lightbox
    if (!$props['link']) {
        $link->attr('href', $props['link'] = $props['image']);
    }

    if ($type = $this->isImage($props['link'])) {

        if (($element['lightbox_image_width'] || $element['lightbox_image_height']) && $type !== 'svg') {
            $props['link'] = "{$props['link']}#thumbnail={$element['lightbox_image_width']},{$element['lightbox_image_height']},{$element['lightbox_image_orientation']}";
        }

        $link->attr([
            'href' => $app['image']->getUrl($props['link']),
            'data-alt' => $props['image_alt'],
            'data-type' => 'image',
        ]);

    } elseif ($this->isVideo($props['link'])) {
        $link->attr('data-type', 'video');
    } elseif (!$this->iframeVideo($props['link'])) {
        $link->attr('data-type', 'iframe');
    } else {
        $link->attr('data-type', true);
    }

    $caption = '';

    if ($props['title'] && $element['title_display'] != 'item') {

        $caption .= "<h4 class='uk-margin-remove'>{$props['title']}</h4>";

        if ($element['title_display'] == 'lightbox') {
            $props['title'] = '';
        }
    }

    if ($props['content'] && $element['content_display'] != 'item') {

        $caption .= $props['content'];

        if ($element['content_display'] == 'lightbox') {
            $props['content'] = '';
        }
    }

    if ($caption) {
        $link->attr('data-caption', $caption);
    }

} else {

    $link->attr([
        'target' => ['_blank {@link_target}'],
        'uk-scroll' => strpos($props['link'], '#') === 0,
    ]);

}

?>

<?= $el($element, $attrs) ?>

    <?php if ($element['image_box_decoration']) : ?>
    <div class="uk-inline-clip">
    <?php endif ?>

    <?php if ($props['image'] || $props['hover_image']) : ?>
    <?= $this->render("{$__dir}/template-image", compact('props')) ?>
    <?php endif ?>

    <?php if ($element['overlay_cover']) : ?>
    <?= $overlay($element, '') ?>
    <?php endif ?>

    <?php if ($props['title'] || $props['meta'] || $props['content']) : ?>
        
        <?php if ($this->expr($center->attrs['class'], $element)) : ?>
        <?= $center($element, $content($element, $this->render("{$__dir}/template-content", compact('props')))) ?>
        <?php else : ?>
        <?= $content($element, $this->render("{$__dir}/template-content", compact('props'))) ?>
        <?php endif ?>

    <?php endif ?>

    <?php if ($props['link']) : ?>
    <?= $link($element, '') ?>
    <?php endif ?>

    <?php if ($element['image_box_decoration']) : ?>
    </div>
    <?php endif ?>

</div>
