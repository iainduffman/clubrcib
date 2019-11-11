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

<div id="product-tiles" class="uk-section uk-section-muted" style="background: #fff;"> <div class="uk-container">

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

        // HTML
        elseif( get_row_layout() == 'free_html' ): 

        $image = get_sub_field('image');
        $content = get_sub_field('content');
        $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
        
        echo ''.$content.'';
        
        // Image Hero Breaker
        elseif( get_row_layout() == 'image_breaker' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];

            echo '<div class="image-breaker uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="images/hero.jpeg" data-sizes="(min-width: 650px) 650px, 100vw" uk-img="" style="background-image: url('.$image.');"></div>';
            
         // Product Tiles
         elseif( get_row_layout() == 'product_tiles' ): 

            $cover_name = get_sub_field('cover_name');
            $cover_description = get_sub_field('cover_description');
            $cover_price = get_sub_field('cover_price');
            $cover_join_url = get_sub_field('cover_join_url');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
            $tiles = get_template_part( 'components/product-tiles', 'index' );
        
            echo ''.$tiles.'';

        // Join Today - 3 Usp Tiles
        elseif( get_row_layout() == 'join_today' ): 

        $tiles = get_template_part( 'components/join-today-tiles', 'index' );
                        
        echo ''.$tiles.'';


       // Call - Number
       elseif( get_row_layout() == 'call_us' ): 
        
        $tiles = get_template_part( 'components/call-us', 'index' );
        
        echo ''.$tiles.'';


       // Article Block
       elseif( get_row_layout() == 'article_block' ): 

        $tiles = get_template_part( 'components/article-block', 'index' );
                        
        echo ''.$tiles.'';

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