<?php
$image = get_sub_field('image');
$featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
$blockTitle = get_sub_field('title');
?>

<div class="uk-section with-divider">
        <div class="uk-container">
        
        <h1 class="uk-heading-divider uk-margin-medium-bottom"><?php echo $blockTitle ?></h1>
        
        <div uk-slider>
        
            <div class="uk-position-relative">
        
                <div class="uk-slider-container uk-light">
                <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">';
        ?>
        
                <?php
        
        if ( is_page() ) {
                 
                 // define query arguments
                  $args = array(
                      'posts_per_page' => 8,
                      'post_type'   => 'post',
                      'post_status' => 'publish'
                      // your 'x' goes here
                      // possibly more arguments here
                  );
                       
                       }
              
              
                  // set up new query
                  $tyler_query = new WP_Query( $args );
                  
                  
              
                  // loop through found posts
                  while ( $tyler_query->have_posts() ) : $tyler_query->the_post();
                  
                  $price = get_field('price');
                  $link = get_field('link');
                  $icon = get_field('manual_icon_ref');
                  $trimmed = wp_trim_words( get_the_content(), 13, '...' );
                  $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
                  
              echo '<li>
              <div class="artcle uk-card uk-card-default">
                  <div class="uk-card-media-top" style="background-image: url('.$featimg.'); background-size: cover;">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
                      <p>'.$trimmed.'</p>
                  </div>
              </div>
          </li>';
                  endwhile;
                  
                  // reset post data
                  wp_reset_postdata();
                ?>
                </ul>
                </div>
        
                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
        
                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
        
            </div>
        
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
        
        </div>
        </div>
        </div>
        </div>