<?php

if (!$props['link']) {
    return;
}

$link = $this->el('a', [

    'class' => [
        'el-link',
        'uk-position-cover uk-position-z-index uk-margin-remove-adjacent {@link_style: panel} {@panel_style}',
        'uk-{link_style: link-(muted|text)}',
        'uk-button uk-button-{!link_style: |panel|link-muted|link-text} [uk-button-{link_size}]',
    ],

    'href' => $props['link'],
]);

// Lightbox
if ($element['lightbox']) {

    if ($type = $this->isImage($props['link'])) {

        if ($type !== 'svg' && ($element['lightbox_image_width'] || $element['lightbox_image_height'])) {
            $props['link'] = "{$props['link']}#thumbnail={$element['lightbox_image_width']},{$element['lightbox_image_height']},{$element['lightbox_image_orientation']}";
        }

        $link->attr([
            'href' => $app['image']->getUrl($props['link']),
            'data-alt' => $props['image_alt'],
            'data-type' => 'image',
        ]);

    } else {

        $link->attr(
            'data-type',
            $this->isVideo($props['link'])
                ? 'video'
                : (!$this->iframeVideo($props['link']) ? 'iframe' : true)
        );

    }

    // Caption
    $caption = '';

    if ($props['title'] && $element['title_display'] != 'item') {
        $caption .= "<h4 class='uk-margin-remove'>{$props['title']}</h4>";
    }

    if ($props['content'] && $element['content_display'] != 'item') {
        $caption .= $props['content'];
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

$node->link = $link;
