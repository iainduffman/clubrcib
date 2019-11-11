<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <body>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

// Set view
if (is_home()|| is_category() || is_tag()) {
    $view = 'blog';
} elseif (is_singular('post')) {
    $view = 'post';
} else {
    $view = '';
}

// Parameter shortcuts
$site  = $theme->get('site', []);
$blog_settings  = $theme->get('blog', []);
$post_settings  = $theme->get('post', []);

// Page
$attrs_page = [];
$attrs_page_container = [];

$attrs_page['class'][] = 'tm-page';

if ($site['layout'] == 'boxed') {

    $attrs_page['class'][] = $site['boxed.alignment'] ? 'uk-margin-auto' : '';

    $attrs_page_container['class'][] = 'tm-page-container';
    $attrs_page_container['class'][] = $site['boxed.padding'] ? 'tm-page-container-padding' : '';
    $attrs_page_container['style'][] = $site['boxed.media'] ? "background-image: url('{$theme->app->url($site['boxed.media'])}');" : '';

}

// Main section
$attrs_main_section = [];
$attrs_main_section['class'][] = 'tm-main uk-section uk-section-default';
$attrs_main_section['class'][] = $view == 'blog' && $blog_settings['padding'] ? "uk-section-{$blog_settings['padding']}" : '';
$attrs_main_section['class'][] = $view == 'post' && $post_settings['padding'] ? "uk-section-{$post_settings['padding']}" : '';
$attrs_main_section['class'][] = $view == 'post' && $post_settings['padding_remove'] ? 'uk-padding-remove-top' : '';

// Main container
$attrs_main_container = [];

if ($view !== 'post' || ($view == 'post' && $post_settings['width'] != 'none')) {
    $attrs_main_container['class'][] = $view == 'blog' && $blog_settings['width'] ? "uk-container-{$blog_settings['width']}" : '';
    $attrs_main_container['class'][] = $view == 'post' && $post_settings['width'] ? "uk-container-{$post_settings['width']}" : '';
}

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $theme->get('favicon') ?>">
        <link rel="apple-touch-icon-precomposed" href="<?= $theme->get('touchicon') ?>">
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
        <?php endif ?>
        <?php wp_head() ?>
    </head>
    <body <?php body_class($theme->get('body_class')->all()) ?>>

        <?php if ($site['layout'] == 'boxed') : ?>
        <div<?= get_attrs($attrs_page_container) ?>>
        <?php endif ?>

        <div<?= get_attrs($attrs_page) ?>>

            <div class="tm-header-mobile uk-hidden@<?= $theme->get('mobile.breakpoint') ?>">
            <?= get_view('header-mobile') ?>
            </div>

            <?php if (is_active_sidebar('toolbar-left') || is_active_sidebar('toolbar-right')) : ?>

            <!-- <div class="uk-navbar-container uk-visible@m tm-navbar-container uk-active tertiary-nav" style="height: 38px;">

        <div class="uk-container">
            <nav class="uk-navbar" uk-navbar style="position: relative; top: -11px;">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav uk-navbar-nav">

                        <li class="call-us-header"><a class="uk-text-bold" style="font-weight: 500;" href="#"><span class="uk-margin-small-right uk-icon" uk-icon="receiver" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="receiver"><path fill="none" stroke="#000" stroke-width="1.01" d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"></path></svg></span>Call Us <?php the_field('phone_number', 533); ?> </a></li>
                    </ul>
                </div>

                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-navbar-nav">

                        <li><a href="https://eurorescue.co.uk/ChangeYourDetails.aspx"><span class="uk-margin-small-right uk-icon" uk-icon="users" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="users"><circle fill="none" stroke="#000" stroke-width="1.1" cx="7.7" cy="8.6" r="3.5"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1,18.1 C1.7,14.6 4.4,12.1 7.6,12.1 C10.9,12.1 13.7,14.8 14.3,18.3"></path><path fill="none" stroke="#000" stroke-width="1.1" d="M11.4,4 C12.8,2.4 15.4,2.8 16.3,4.7 C17.2,6.6 15.7,8.9 13.6,8.9 C16.5,8.9 18.8,11.3 19.2,14.1"></path></svg></span>Help</a>
                        
                <div class="uk-navbar-dropdown tertiary-nav-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                <li><a href="<?php echo get_site_url(); ?>/document-downloads">Documents</a></li>
                <li><a href="<?php echo get_site_url(); ?>/faq">FAQ's</a></li>
                </ul>
                </div>
                        
                        
                        </li>


                        <hr class="uk-divider-vertical">


                        <li class="uk-padding-remove-right"><a href="https://eurorescue.co.uk/ChangeYourDetails.aspx"><span class="uk-margin-small-right uk-icon" uk-icon="users" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="users"><circle fill="none" stroke="#000" stroke-width="1.1" cx="7.7" cy="8.6" r="3.5"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1,18.1 C1.7,14.6 4.4,12.1 7.6,12.1 C10.9,12.1 13.7,14.8 14.3,18.3"></path><path fill="none" stroke="#000" stroke-width="1.1" d="M11.4,4 C12.8,2.4 15.4,2.8 16.3,4.7 C17.2,6.6 15.7,8.9 13.6,8.9 C16.5,8.9 18.8,11.3 19.2,14.1"></path></svg></span>Existing Members</a>
                        
                        <div class="uk-navbar-dropdown tertiary-nav-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a target="_blank" href="https://eurorescue.co.uk/ChangeYourDetails.aspx">Change Your Details</a></li>
                        <li><a target="_blank" href="https://eurorescue.co.uk/ChangeVehicle.aspx">Change Your Vehicle</a></li>
                        </ul>
                        </div>
                                
                                
                                </li>
        





                        <hr class="uk-hidden uk-divider-vertical">
                        <li class="uk-hidden"><a href="https://www.facebook.com/eurorescuebreakdown" target="_blank"><span class="uk-icon" uk-icon="facebook" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg></span></a></li>
                        <hr class="uk-hidden uk-divider-vertical">
                        <li class="uk-hidden"><a href=""><span class="uk-icon" uk-icon="twitter" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="twitter"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path></svg></span></a></li>
                    </ul>


                    <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a>
                </div>
            </nav>
        </div>
    </div> -->
            <?php endif ?>

            <?= get_view('header') ?>

            <?php dynamic_sidebar("top:section") ?>

            <?php if (!$theme->get('builder')) : ?>

            <div id="tm-main" <?= get_attrs($attrs_main_section) ?> uk-height-viewport="expand: true">
                <div<?= get_attrs($attrs_main_container) ?>>

                    <?php if (is_active_sidebar('sidebar')) :
                            $sidebar = $theme->get('sidebar', []);
                            $grid = ['uk-grid'];
                            $grid[] = $sidebar['gutter'] ? "uk-grid-{$sidebar['gutter']}" : '';
                            $grid[] = $sidebar['divider'] ? 'uk-grid-divider' : '';
                    ?>

                    <div<?= get_attrs(['class' => $grid, 'uk-grid' => true]) ?>>
                        <div class="uk-width-expand@<?= $theme->get('sidebar.breakpoint') ?>">

                    <?php endif ?>

                            <?php if ($site['breadcrumbs']) : ?>
                            <div class="uk-margin-medium-bottom">
                                <?= get_section('breadcrumbs') ?>
                            </div>
                            <?php endif ?>

            <?php endif ?>
