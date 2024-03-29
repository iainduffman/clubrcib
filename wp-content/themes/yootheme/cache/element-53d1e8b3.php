<?php // @file /home/eurorescue/dev.eurorescue.co.uk/wp-content/themes/yootheme/vendor/yootheme/builder/elements/gallery/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'gallery',
  'title' => 'Gallery',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'container' => true,
  'width' => 500,
  'defaults' => [
    'show_title' => true,
    'show_meta' => true,
    'show_content' => true,
    'show_link' => true,
    'show_hover_image' => true,
    'grid_default' => '1',
    'grid_medium' => '3',
    'filter_style' => 'tab',
    'filter_all' => true,
    'filter_position' => 'top',
    'filter_align' => 'left',
    'filter_grid_width' => 'auto',
    'filter_breakpoint' => 'm',
    'overlay_mode' => 'cover',
    'overlay_hover' => true,
    'overlay_style' => 'overlay-primary',
    'text_color' => 'light',
    'overlay_position' => 'center',
    'overlay_transition' => 'fade',
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'text_align' => 'center',
    'margin' => 'default',
    'item_animation' => ''
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'gallery_item',
        'props' => []
      ],
      1 => [
        'type' => 'gallery_item',
        'props' => []
      ],
      2 => [
        'type' => 'gallery_item',
        'props' => []
      ]
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Items',
      'type' => 'content-items',
      'item' => 'gallery_item',
      'media' => [
        'type' => 'image',
        'item' => [
          'title' => 'title',
          'image' => 'src'
        ]
      ]
    ],
    'show_title' => [
      'label' => 'Display',
      'type' => 'checkbox',
      'text' => 'Show the title'
    ],
    'show_meta' => [
      'type' => 'checkbox',
      'text' => 'Show the meta text'
    ],
    'show_content' => [
      'type' => 'checkbox',
      'text' => 'Show the content'
    ],
    'show_link' => [
      'type' => 'checkbox',
      'text' => 'Show the link'
    ],
    'show_hover_image' => [
      'description' => 'Show or hide content fields without the need to delete the content itself.',
      'type' => 'checkbox',
      'text' => 'Show the overlay image'
    ],
    'grid_masonry' => [
      'label' => 'Masonry',
      'description' => 'The masonry effect creates a layout free of gaps even if grid cells have different heights. ',
      'type' => 'checkbox',
      'text' => 'Enable masonry effect'
    ],
    'grid_parallax' => [
      'label' => 'Parallax',
      'description' => 'The parallax effect moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels.',
      'type' => 'range',
      'attrs' => [
        'min' => 0,
        'max' => 600,
        'step' => 10
      ]
    ],
    'gutter' => [
      'label' => 'Gutter',
      'description' => 'Set the grid gutter width and display dividers between grid cells.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => '',
        'Large' => 'large',
        'Collapse' => 'collapse'
      ]
    ],
    'divider' => [
      'type' => 'checkbox',
      'text' => 'Show dividers'
    ],
    'grid_default' => [
      'label' => 'Phone Portrait',
      'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size.',
      'type' => 'select',
      'options' => [
        '1 Column' => '1',
        '2 Columns' => '2',
        '3 Columns' => '3',
        '4 Columns' => '4',
        '5 Columns' => '5',
        '6 Columns' => '6'
      ]
    ],
    'grid_small' => [
      'label' => 'Phone Landscape',
      'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        '1 Column' => '1',
        '2 Columns' => '2',
        '3 Columns' => '3',
        '4 Columns' => '4',
        '5 Columns' => '5',
        '6 Columns' => '6'
      ]
    ],
    'grid_medium' => [
      'label' => 'Tablet Landscape',
      'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size.',
      'type' => 'select',
      'options' => [
        'Inherit' => '',
        '1 Column' => '1',
        '2 Columns' => '2',
        '3 Columns' => '3',
        '4 Columns' => '4',
        '5 Columns' => '5',
        '6 Columns' => '6'
      ]
    ],
    'grid_large' => [
      'label' => 'Desktop',
      'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        '1 Column' => '1',
        '2 Columns' => '2',
        '3 Columns' => '3',
        '4 Columns' => '4',
        '5 Columns' => '5',
        '6 Columns' => '6'
      ]
    ],
    'grid_xlarge' => [
      'label' => 'Large Screens',
      'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        '1 Column' => '1',
        '2 Columns' => '2',
        '3 Columns' => '3',
        '4 Columns' => '4',
        '5 Columns' => '5',
        '6 Columns' => '6'
      ]
    ],
    'filter' => [
      'label' => 'Filter',
      'type' => 'checkbox',
      'text' => 'Enable filter navigation'
    ],
    'filter_style' => [
      'label' => 'Style',
      'description' => 'Select the filter navigation style. The pill and divider styles are only available for horizontal Subnavs.',
      'type' => 'select',
      'options' => [
        'Tabs' => 'tab',
        'Subnav (Nav)' => 'subnav',
        'Subnav Divider (Nav)' => 'subnav-divider',
        'Subnav Pill (Nav)' => 'subnav-pill'
      ],
      'enable' => 'filter'
    ],
    'filter_all' => [
      'label' => 'All Items',
      'type' => 'checkbox',
      'text' => 'Show filter control for all items',
      'enable' => 'filter'
    ],
    'filter_all_label' => [
      'attrs' => [
        'placeholder' => 'All'
      ],
      'enable' => 'filter && filter_all'
    ],
    'filter_position' => [
      'label' => 'Position',
      'description' => 'Position the filter navigation at the top, left or right. A larger style can be applied to left and right navigations.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Left' => 'left',
        'Right' => 'right'
      ],
      'enable' => 'filter'
    ],
    'filter_style_primary' => [
      'type' => 'checkbox',
      'text' => 'Primary navigation',
      'enable' => 'filter && (filter_position == \'left\' || filter_position == \'right\') && $match(filter_style, \'(^subnav)\')'
    ],
    'filter_align' => [
      'label' => 'Alignment',
      'description' => 'Align the filter controls.',
      'type' => 'select',
      'options' => [
        'Left' => 'left',
        'Right' => 'right',
        'Center' => 'center',
        'Justify' => 'justify'
      ],
      'enable' => 'filter && filter_position == \'top\''
    ],
    'filter_margin' => [
      'label' => 'Margin',
      'description' => 'Set the vertical margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => 'filter && filter_position == \'top\''
    ],
    'filter_grid_width' => [
      'label' => 'Grid Width',
      'description' => 'Define the width of the filter navigation. Choose between percent and fixed widths or expand columns to the width of their content.',
      'type' => 'select',
      'options' => [
        'Auto' => 'auto',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'enable' => 'filter && (filter_position == \'left\' || filter_position == \'right\')'
    ],
    'filter_gutter' => [
      'label' => 'Grid Gutter',
      'description' => 'Select the gutter width between the filter navigation and grid.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => '',
        'Large' => 'large',
        'Collapse' => 'collapse'
      ],
      'enable' => 'filter && (filter_position == \'left\' || filter_position == \'right\')'
    ],
    'filter_breakpoint' => [
      'label' => 'Grid Breakpoint',
      'description' => 'Set the breakpoint from which the filter navigation and grid will stack.',
      'type' => 'select',
      'options' => [
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l'
      ],
      'enable' => 'filter && (filter_position == \'left\' || filter_position == \'right\')'
    ],
    'lightbox' => [
      'label' => 'Lightbox',
      'type' => 'checkbox',
      'text' => 'Enable lightbox gallery'
    ],
    'lightbox_image_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'lightbox'
    ],
    'lightbox_image_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'lightbox'
    ],
    'lightbox_image_orientation' => [
      'label' => 'Image Orientation',
      'description' => 'Width and height will be flipped accordingly, if the image is in portrait or landscape format.',
      'type' => 'checkbox',
      'text' => 'Allow mixed image orientations',
      'enable' => 'lightbox'
    ],
    'title_display' => [
      'label' => 'Show Title',
      'description' => 'Display the title inside the overlay, as the lightbox caption or both.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Overlay + Lightbox' => '',
        'Overlay only' => 'item',
        'Lightbox only' => 'lightbox'
      ],
      'enable' => 'show_title && lightbox'
    ],
    'content_display' => [
      'label' => 'Show Content',
      'description' => 'Display the content inside the overlay, as the lightbox caption or both.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Overlay + Lightbox' => '',
        'Overlay only' => 'item',
        'Lightbox only' => 'lightbox'
      ],
      'enable' => 'show_content && lightbox'
    ],
    'item_maxwidth' => [
      'type' => 'select',
      'label' => 'Max Width',
      'description' => 'Set the maximum width.',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'XX-Large' => 'xxlarge'
      ]
    ],
    'overlay_mode' => [
      'label' => 'Mode',
      'description' => 'When using cover mode, you need to set the text color manually.',
      'type' => 'select',
      'options' => [
        'Cover' => 'cover',
        'Caption' => 'caption'
      ]
    ],
    'overlay_hover' => [
      'type' => 'checkbox',
      'text' => 'Display overlay on hover'
    ],
    'overlay_transition_background' => [
      'type' => 'checkbox',
      'text' => 'Animate background only',
      'enable' => 'overlay_hover && overlay_mode == \'cover\''
    ],
    'overlay_style' => [
      'label' => 'Style',
      'description' => 'Select the style for the overlay.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Overlay Default' => 'overlay-default',
        'Overlay Primary' => 'overlay-primary',
        'Tile Default' => 'tile-default',
        'Tile Muted' => 'tile-muted',
        'Tile Primary' => 'tile-primary',
        'Tile Secondary' => 'tile-secondary'
      ]
    ],
    'text_color' => [
      'label' => 'Text Color',
      'description' => 'Set light or dark color mode for text, buttons and controls.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'enable' => '!overlay_style || overlay_style && overlay_mode == \'cover\''
    ],
    'text_color_hover' => [
      'type' => 'checkbox',
      'text' => 'Inverse the text color on hover',
      'enable' => '!overlay_style && show_hover_image || overlay_style && overlay_mode == \'cover\' && overlay_hover && overlay_transition_background'
    ],
    'overlay_padding' => [
      'label' => 'Padding',
      'description' => 'Set the padding between the overlay and its content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large',
        'None' => 'none'
      ]
    ],
    'overlay_position' => [
      'label' => 'Position',
      'description' => 'Select the overlay or content position.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right',
        'Top Left' => 'top-left',
        'Top Center' => 'top-center',
        'Top Right' => 'top-right',
        'Bottom Left' => 'bottom-left',
        'Bottom Center' => 'bottom-center',
        'Bottom Right' => 'bottom-right',
        'Center' => 'center',
        'Center Left' => 'center-left',
        'Center Right' => 'center-right'
      ]
    ],
    'overlay_margin' => [
      'label' => 'Margin',
      'description' => 'Apply a margin between the overlay and the image container.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'enable' => 'overlay_style'
    ],
    'overlay_maxwidth' => [
      'label' => 'Max Width',
      'description' => 'Set the maximum content width.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => '!$match(overlay_position, \'(^top$|^bottom$)\')'
    ],
    'overlay_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the overlay.',
      'type' => 'select',
      'options' => [
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'overlay_hover'
    ],
    'image_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ]
    ],
    'image_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ]
    ],
    'image_orientation' => [
      'label' => 'Image Orientation',
      'description' => 'Landscape and portrait images are centered within the grid cells. Width and height will be flipped when images are resized.',
      'type' => 'checkbox',
      'text' => 'Allow mixed image orientations'
    ],
    'image_transition' => [
      'label' => 'Transition',
      'description' => 'Select an image transition. If the hover image is set, the transition takes place between the two images. If <i>None</i> is selected, the hover image fades in.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None (Fade if hover image)' => '',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down'
      ]
    ],
    'image_min_height' => [
      'label' => 'Min Height',
      'description' => 'Set the minimum image height.',
      'type' => 'range',
      'attrs' => [
        'min' => 200,
        'max' => 500,
        'step' => 20
      ]
    ],
    'image_box_shadow' => [
      'label' => 'Box Shadow',
      'description' => 'Select the image\'s box shadow size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ]
    ],
    'image_hover_box_shadow' => [
      'label' => 'Hover Box Shadow',
      'description' => 'Select the image\'s box shadow size on hover.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ]
    ],
    'image_box_decoration' => [
      'label' => 'Box Decoration',
      'description' => 'Select the image\'s box decoration style. Note: The Mask option is not supported by all styles and may have no visible effect.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Default' => 'default',
        'Primary' => 'primary',
        'Secondary' => 'secondary',
        'Floating Shadow' => 'shadow',
        'Mask' => 'mask'
      ]
    ],
    'image_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => '$match(image_box_decoration, \'^(default|primary|secondary)$\')'
    ],
    'title_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the title.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'show_title && overlay_hover && (title_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'title_style' => [
      'label' => 'Style',
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Primary' => 'heading-primary',
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'title_decoration' => [
      'label' => 'Decoration',
      'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Divider' => 'divider',
        'Bullet' => 'bullet',
        'Line' => 'line'
      ],
      'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'title_color' => [
      'label' => 'Color',
      'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Emphasis' => 'emphasis',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger',
        'Background' => 'background'
      ],
      'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'title_element' => [
      'label' => 'HTML Element',
      'description' => 'Choose one of the six heading elements to fit your semantic structure.',
      'type' => 'select',
      'options' => [
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'title_margin' => [
      'label' => 'Margin Top',
      'description' => 'Set the top margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove'
      ],
      'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'meta_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the meta text.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'show_meta && overlay_hover'
    ],
    'meta_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined meta text style, including color, size and font-family.',
      'type' => 'select',
      'options' => [
        'Default' => '',
        'Meta' => 'meta',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'show_meta'
    ],
    'meta_color' => [
      'label' => 'Color',
      'description' => 'Select the text color.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Emphasis' => 'emphasis',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger'
      ],
      'enable' => 'show_meta'
    ],
    'meta_align' => [
      'label' => 'Alignment',
      'description' => 'Align the meta text above or below the title.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom'
      ],
      'enable' => 'show_meta'
    ],
    'meta_margin' => [
      'label' => 'Margin Top',
      'description' => 'Set the top margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove'
      ],
      'enable' => 'show_meta'
    ],
    'content_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'show_content && overlay_hover && (content_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'content_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Lead' => 'lead'
      ],
      'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'content_margin' => [
      'label' => 'Margin Top',
      'description' => 'Set the top margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove'
      ],
      'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)'
    ],
    'text_align' => $this->get('builder:text_align_justify'),
    'text_align_breakpoint' => $this->get('builder:text_align_breakpoint'),
    'text_align_fallback' => $this->get('builder:text_align_justify_fallback'),
    'maxwidth' => $this->get('builder:maxwidth'),
    'maxwidth_align' => $this->get('builder:maxwidth_align'),
    'maxwidth_breakpoint' => $this->get('builder:maxwidth_breakpoint'),
    'margin' => $this->get('builder:margin'),
    'margin_remove_top' => $this->get('builder:margin_remove_top'),
    'margin_remove_bottom' => $this->get('builder:margin_remove_bottom'),
    'item_animation' => $this->get('builder:animation'),
    '_parallax_button' => $this->get('builder:_parallax_button'),
    'visibility' => $this->get('builder:visibility'),
    'container_padding_remove' => $this->get('builder:container_padding_remove'),
    'name' => $this->get('builder:name'),
    'status' => $this->get('builder:status'),
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls'),
    'css' => [
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-image</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-hover-image</code>',
      'type' => 'editor',
      'editor' => 'code',
      'mode' => 'css',
      'attrs' => [
        'debounce' => 500
      ]
    ]
  ],
  'fieldset' => [
    'default' => [
      'type' => 'tabs',
      'fields' => [
        0 => [
          'title' => 'Content',
          'fields' => [
            0 => 'content',
            1 => 'show_title',
            2 => 'show_meta',
            3 => 'show_content',
            4 => 'show_link',
            5 => 'show_hover_image'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Gallery',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'grid_masonry',
                1 => 'grid_parallax',
                2 => 'gutter',
                3 => 'divider'
              ]
            ],
            1 => [
              'label' => 'Columns',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'grid_default',
                1 => 'grid_small',
                2 => 'grid_medium',
                3 => 'grid_large',
                4 => 'grid_xlarge'
              ]
            ],
            2 => [
              'label' => 'Filter',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'filter',
                1 => 'filter_style',
                2 => 'filter_all',
                3 => 'filter_all_label',
                4 => 'filter_position',
                5 => 'filter_style_primary',
                6 => 'filter_align',
                7 => 'filter_margin',
                8 => 'filter_grid_width',
                9 => 'filter_gutter',
                10 => 'filter_breakpoint'
              ]
            ],
            3 => [
              'label' => 'Lightbox',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'lightbox',
                1 => [
                  'label' => 'Image Width/Height',
                  'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                  'type' => 'grid',
                  'width' => '1-2',
                  'fields' => [
                    0 => 'lightbox_image_width',
                    1 => 'lightbox_image_height'
                  ]
                ],
                2 => 'lightbox_image_orientation',
                3 => 'title_display',
                4 => 'content_display'
              ]
            ],
            4 => [
              'label' => 'Item',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'item_maxwidth'
              ]
            ],
            5 => [
              'label' => 'Overlay',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'overlay_mode',
                1 => 'overlay_hover',
                2 => 'overlay_transition_background',
                3 => 'overlay_style',
                4 => 'text_color',
                5 => 'text_color_hover',
                6 => 'overlay_padding',
                7 => 'overlay_position',
                8 => 'overlay_margin',
                9 => 'overlay_maxwidth',
                10 => 'overlay_transition'
              ]
            ],
            6 => [
              'label' => 'Image',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => [
                  'label' => 'Width/Height',
                  'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                  'type' => 'grid',
                  'width' => '1-2',
                  'fields' => [
                    0 => 'image_width',
                    1 => 'image_height'
                  ]
                ],
                1 => 'image_orientation',
                2 => 'image_transition',
                3 => 'image_min_height',
                4 => 'image_box_shadow',
                5 => 'image_hover_box_shadow',
                6 => 'image_box_decoration',
                7 => 'image_box_decoration_inverse'
              ]
            ],
            7 => [
              'label' => 'Title',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'title_transition',
                1 => 'title_style',
                2 => 'title_decoration',
                3 => 'title_color',
                4 => 'title_element',
                5 => 'title_margin'
              ]
            ],
            8 => [
              'label' => 'Meta',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'meta_transition',
                1 => 'meta_style',
                2 => 'meta_color',
                3 => 'meta_align',
                4 => 'meta_margin'
              ]
            ],
            9 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_transition',
                1 => 'content_style',
                2 => 'content_margin'
              ]
            ],
            10 => [
              'label' => 'General',
              'type' => 'group',
              'fields' => [
                0 => 'text_align',
                1 => 'text_align_breakpoint',
                2 => 'text_align_fallback',
                3 => 'maxwidth',
                4 => 'maxwidth_align',
                5 => 'maxwidth_breakpoint',
                6 => 'margin',
                7 => 'margin_remove_top',
                8 => 'margin_remove_bottom',
                9 => 'item_animation',
                10 => '_parallax_button',
                11 => 'visibility',
                12 => 'container_padding_remove'
              ]
            ]
          ]
        ],
        2 => $this->get('builder:advanced')
      ]
    ]
  ]
];
