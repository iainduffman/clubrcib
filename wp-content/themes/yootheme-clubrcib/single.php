<?php
/**
 * The main template file.
 *
 * The most generic template file in the WordPress file hierarchy.
 * Used if WordPress cannot find any other matching template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 */

get_header();

?>

<?php if (have_posts()) :

    ?>

<?php $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>


<div id="header-hero" class="uk-cover-container">
    <canvas width="400" height="200"></canvas>
  
    <img src="<?php echo $featimg ?>" alt="" uk-cover="" class="uk-cover" style="height: 647px; width: 1680px;">
    <div id="parallelogram" class="uk-hidden">
        <h3 style="color: #fff; position: absolute; top: 68px; left: 50px; font-size: 42px;">Join Today</h3>
        <h3 class="uk-text-center" style="color: #fff; position: relative; top: 113px;"><span class="uk-text-small uk-text-center">From<br></span>
            £44 per month</h3>
        <a href="../download" style="position: absolute; background: #303080; left: 88px; top: 190px; font-size: 16px; font-weight: bolder;" class="uk-button uk-button-default tm-button-default uk-icon">Join Today</a>
    </div>
</div>

<div id="product-tiles" class="uk-section uk-section-muted"> <div class="uk-container">

    <h1 class="uk-margin-bottom uk-text-center" style="color: #303080;"><?php the_title(); ?></h1>
    <?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>

</div></div>


<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

        // Simple Block
        if( get_row_layout() == 'simple_block' ):


            $title = get_sub_field('title');
            $description = get_sub_field('description');

        	echo '<div class="uk-section warning uk-section-primary tm-section-primary uk-section-xlarge" style="background: #303080;">
            <div class="uk-container uk-text-center">
                    <div class="uk-width-auto uk-first-column">
                            <span style="color: #fff;" uk-icon="icon: warning; ratio: 2.5" class="uk-margin-bottom uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="warning"><circle cx="10" cy="14" r="1"></circle><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"></circle><path d="M10.97,7.72 C10.85,9.54 10.56,11.29 10.56,11.29 C10.51,11.87 10.27,12 9.99,12 C9.69,12 9.49,11.87 9.43,11.29 C9.43,11.29 9.16,9.54 9.03,7.72 C8.96,6.54 9.03,6 9.03,6 C9.03,5.45 9.46,5.02 9.99,5 C10.53,5.01 10.97,5.44 10.97,6 C10.97,6 11.04,6.54 10.97,7.72 L10.97,7.72 Z"></path></svg></span>
                        </div>
                        <h2 class="uk-h1">'.$title.'</h2>
                        <p class="uk-text-large tm-text-large uk-margin-medium-bottom">'.$description.'</p>
            </div>
        </div>';
        
        // Image Hero Breaker
        elseif( get_row_layout() == 'image_breaker' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];

            echo '<div class="image-breaker uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="images/hero.jpeg" data-sizes="(min-width: 650px) 650px, 100vw" uk-img="" style="background-image: url('.$image.');"></div>';
            
        // Product Tiles
        elseif( get_row_layout() == 'product_tiles' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
        
            echo '<div id="product-tiles" class="uk-section uk-section-muted">
            <div class="uk-container">
            <h1 class="uk-heading-divider" style="text-align: center !important;">Breakdown cover across Europe that has you <span style="color: #303080; font-weight: 700;">covered.</span></h1>
            <p class="uk-margin-medium-bottom"style="text-align: center !important;">Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
           

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid="">
            <div class="uk-first-column">
            <div class="uk-card uk-card-default uk-margin-right">
            <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-expand uk-first-column">
            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-center">Euro Break</h2>
            </div>
            </div>  
            </div>
            <div class="uk-card-body uk-text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
            </div>
            <div class="uk-card-footer">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"> 
            <span class="uk-text-small uk-text-center">FROM</span></div>
            </div>
            <h3 class="uk-text-center">£XY per month
            </h3>
            <div style="width: 100% !important;" class="uk-flex">
            <a href="../download" style="margin-right: 6px;" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join Today</a>
            <a href="http://localhost:8888/eurorescue-wp/compare-breakdown-services" style="margin-left: 6px;" class="tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Learn more</a>
            </div>
            </div>
            </div>
            </div>
            <div>
            <div class="uk-card uk-card-default uk-margin-right">
            <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-expand uk-first-column">
            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-center">Euro Rescue</h2>
            </div>
            </div>  
            </div>
            <div class="uk-card-body uk-text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
            </div>
            <div class="uk-card-footer">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"> 
            <span class="uk-text-small uk-text-center">FROM</span></div>
            </div>
                    <h3 class="uk-text-center">£XY per month
                    </h3>
                    <div style="width: 100% !important;" class="uk-flex">
                    <a href="../download" style="margin-right: 6px;" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join Today</a>
                    <a href="http://localhost:8888/eurorescue-wp/compare-breakdown-services" style="margin-left: 6px;" class="tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Learn more</a>
                    </div>
                    </div>
            </div>
            </div>
            <div>
            <div class="uk-card uk-card-default uk-margin-right">
            <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-expand uk-first-column">
            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-center">Euro Rescue +</h2>
            </div>
            </div>  
            </div>
            <div class="uk-card-body uk-text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
            </div>
            <div class="uk-card-footer">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"> 
            <span class="uk-text-small uk-text-center">FROM</span></div>
            </div>
            <h3 class="uk-text-center">£XY per month
            </h3>
            <div style="width: 100% !important;" class="uk-flex">
            <a href="../download" style="margin-right: 6px;" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join Today</a>
            <a href="http://localhost:8888/eurorescue-wp/compare-breakdown-services" style="margin-left: 6px;" class="tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Learn more</a>
            </div>
            </div>
            </div>
            </div>
        </div>



<hr class="uk-margin-top">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"><a href="http://localhost:8888/eurorescue-wp/compare-breakdown-services" class="uk-margin-top uk-button uk-button-secondary tm-button-default uk-icon">Compare all of our products</a></div>
        </div>
        
        </div></div>';

        // Join Today - 3 Usp Tiles
        elseif( get_row_layout() == 'join_today' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
                
            echo '<div class="uk-section uk-section-primary tm-section-primary uk-section-xlarge" style="background: #303080;">
            <div class="uk-container uk-text-center">
                <h2 class="uk-h1">Why not join today?</h2>
                <p class="uk-text-large tm-text-large uk-margin-medium-bottom">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit.</p>
        
        
        
                    <div class="uk-child-width-1-3@m uk-grid uk-grid-margin-small uk-grid-match" uk-grid="">
                    <div class="uk-first-column">
                            <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                            <div class="uk-width-expand uk-first-column">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">Peace of Mind</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                            <div class="uk-width-auto uk-first-column">
                                                    <span uk-icon="icon: check; ratio: 2.5" class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span>
                                                </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                    </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                    <div class="uk-width-expand uk-first-column">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Full Support</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                    <div class="uk-width-auto uk-first-column">
                                            <span uk-icon="icon: bolt; ratio: 2.5" class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="bolt"><path d="M4.74,20 L7.73,12 L3,12 L15.43,1 L12.32,9 L17.02,9 L4.74,20 L4.74,20 L4.74,20 Z M9.18,11 L7.1,16.39 L14.47,10 L10.86,10 L12.99,4.67 L5.61,11 L9.18,11 L9.18,11 L9.18,11 Z"></path></svg></span>
                                        </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                            <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                            <div class="uk-width-expand uk-first-column">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">Support</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                            <div class="uk-width-auto uk-first-column">
                                                    <span uk-icon="icon: comments; ratio: 2.5" class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="comments"><polyline fill="none" stroke="#000" points="2 0.5 19.5 0.5 19.5 13"></polyline><path d="M5,19.71 L5,15 L0,15 L0,2 L18,2 L18,15 L9.71,15 L5,19.71 L5,19.71 L5,19.71 Z M1,14 L6,14 L6,17.29 L9.29,14 L17,14 L17,3 L1,3 L1,14 L1,14 L1,14 Z"></path></svg></span>
                                                </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                    </div>
                                </div>
                    </div>

                    <div class="uk-grid-margin uk-first-column">
                    <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                    <div class="uk-width-expand uk-first-column">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Support</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                    <div class="uk-width-auto uk-first-column">
                                            <span uk-icon="icon: comments; ratio: 2.5" class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="comments"><polyline fill="none" stroke="#000" points="2 0.5 19.5 0.5 19.5 13"></polyline><path d="M5,19.71 L5,15 L0,15 L0,2 L18,2 L18,15 L9.71,15 L5,19.71 L5,19.71 L5,19.71 Z M1,14 L6,14 L6,17.29 L9.29,14 L17,14 L17,3 L1,3 L1,14 L1,14 L1,14 Z"></path></svg></span>
                                        </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
            </div>

            <div class="uk-grid-margin">
            <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                            <div class="uk-width-expand uk-first-column">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Support</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                            <div class="uk-width-auto uk-first-column">
                                    <span uk-icon="icon: comments; ratio: 2.5" class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="comments"><polyline fill="none" stroke="#000" points="2 0.5 19.5 0.5 19.5 13"></polyline><path d="M5,19.71 L5,15 L0,15 L0,2 L18,2 L18,15 L9.71,15 L5,19.71 L5,19.71 L5,19.71 Z M1,14 L6,14 L6,17.29 L9.29,14 L17,14 L17,3 L1,3 L1,14 L1,14 L1,14 Z"></path></svg></span>
                                </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
    </div>

    <div class="uk-grid-margin">
    <div class="uk-card uk-card-default">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-expand uk-first-column">
                    <h3 class="uk-card-title uk-margin-remove-bottom">Support</h3>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                    <div class="uk-width-auto uk-first-column">
                            <span uk-icon="icon: comments; ratio: 2.5" class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="comments"><polyline fill="none" stroke="#000" points="2 0.5 19.5 0.5 19.5 13"></polyline><path d="M5,19.71 L5,15 L0,15 L0,2 L18,2 L18,15 L9.71,15 L5,19.71 L5,19.71 L5,19.71 Z M1,14 L6,14 L6,17.29 L9.29,14 L17,14 L17,3 L1,3 L1,14 L1,14 L1,14 Z"></path></svg></span>
                        </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                </p>
            </div>
        </div>
</div>
                </div>

                
        
                
        
                <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
                    <div class="uk-first-column"><a href="'.get_site_url().'/compare-breakdown-services" class="uk-margin-top uk-button uk-button-default tm-button-default uk-icon">Compare all of our products</a></div>
                </div>
            </div>
        </div>';


        // Call - Number
        elseif( get_row_layout() == 'call_us' ): 

        $image = get_sub_field('image');
        
        echo '<div class="call-us uk-section uk-section-primary tm-section-primary uk-section-xlarge" style="background: #272727;">
        <div class="uk-container uk-text-center">
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
        <div>
        <h1 class="uk-margin-small-bottom"><span uk-icon="icon: lifesaver; ratio: 2" style="margin-right: 8px;"></span>Broken Down?</h1>
        <h3 class="uk-text-left">Call us anytime on 0845 39 29 11</h3>
        </div>
        </div>
        <div class="uk-text-left">
        <div>
        <p class="uk-text-left">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
        </div>
        </div>
    </div>
        </div>
    </div>';
        


        // Article Block
        elseif( get_row_layout() == 'article_block' ): 

        $image = get_sub_field('image');
        $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
        $blocktitle = get_sub_field('title');
                        
        echo '<div class="uk-section with-divider">
        <div class="uk-container">
        
        <h1 class="uk-heading-divider uk-margin-medium-bottom">'.$blocktitle.'</h1>
        
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
        </div>';

        <?php

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

    


    
    </div>
    </div

    <?php

    get_template_part('templates/pagination');

else :

    get_template_part('templates/post/content', 'none');

endif;

get_footer();