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
  
    <img src="<?php echo $featimg ?>" alt="" uk-cover="" class="uk-cover" style="height: 647px; width: 1680px;">
    <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-center uk-light uk-text-center">
            <div class="uk-grid">
            <div class="uk-width-2-3" style="margin: auto;">
            <h1 class="uk-text-bold massive-text">Award Winning Vehicle Breakdown Cover</h1>
            <h3 style="margin-top: -12px;">Autonational Rescue offers an award winning <br> vehicle breakdown and recovery service.</h3>
            <a uk-scroll="offset: 90" href="#product-tiles" target="_blank" style="margin-right: 6px;" class="uk-button uk-button-primary uk-button-large">Choose Your Breakdown Cover</a>
            </div>
            </div>
            </div>
        </div>
    <!-- <div id="parallelogram" class="uk-visible@m">
        <h3 style="color: #fff; position: absolute; top: 68px; left: 50px; font-size: 42px;">Join Today</h3>
        <h3 class="uk-text-center" style="color: #fff; position: relative; top: 115px; font-size: 40px; font-weight: 500; line-height: 24px;"><span class="uk-text uk-text-center" style="font-size: 14px; position: relative; top: -8px;">From<br></span>
            £<?php the_field('join_today_from_price', 533); ?></h3>
        <a href="<?php the_field('global_join_link', 533); ?>" style="position: absolute; background: #303080; left: 75px; top: 190px; font-size: 16px; font-weight: bolder;" class="uk-button uk-button-default tm-button-default uk-icon">Join Today</a>
    </div> -->
</div>

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

        // Join Process
        elseif( get_row_layout() == 'join_process' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];

            echo '

            <div class="uk-inline transparentSection uk-margin-large-top"><div class="uk-container uk-text-center"><h1 class="massiveHeading">Not a member yet?</h1><h3 class="massiveSubHeading">Join today! Club RCIB is so easy to use - get started in just 3 steps  </h3></div></div>

            
            <div class="uk-container">
            <div id="process" class="dealContainer uk-container uk-padding-large uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right uk-padding-remove-top"><div class="dealWrapper"><div class="uk-grid-match uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@s uk-text-center uk-grid" data-uk-grid="true"><div class="uk-first-column"><div class="uk-card"><div class="cardContents"><div class="stepOne_Login"></div><h3>1. Login</h3><p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p></div></div></div><div><div class="uk-card"><div class="cardContents"><div class="stepTwo_Login"></div><h3>2. Select Offer</h3><p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p></div></div></div><div><div class="uk-card" style="border-right: 0px;"><div class="cardContents"><div class="stepThree_Login"></div><h3>3. Reedeem</h3><p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p></div></div></div></div><button class="uk-button uk-button-primary uk-button-large">Join Club RCIB Today</button></div></div></div>';


            // RCIB Club USP
            elseif( get_row_layout() == 'club_usp' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];

            echo '<div class="uk-inline blueSection section"><div class="uk-container uk-margin-large-top" style="height: 100%; width: 100%; padding-left: 40px; padding-right: 40px;"><div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-grid" data-uk-grid="true"><div class="uk-first-column"><div class="phone uk-padding uk-height-large"></div></div><div><div class="uk-padding uk-light uk-height-large" style="padding: 40px;"><h1 class="massiveHeading">The Best Bit?</h1><h3 class="massiveSubHeading">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue.</h3><button class="uk-button uk-button-primary uk-button-large">Join Club RCIB Today</button></div></div></div></div></div>';

        // Tabs
        elseif( get_row_layout() == 'tabs' ): 

            $image = get_sub_field('image');
            $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];

            echo '<div class="dealContainer uk-container uk-padding-large uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right uk-padding-remove-top">
            <ul class="tabs uk-child-width-expand" uk-tab>
              <li class="uk-active"><a href="#">Latest Offers</a></li>
              <li><a href="#">Why Join?</a></li>
              <li><a href="#">How It Works</a></li>
            </ul>
            <div class="dealWrapper">
            <div class="uk-grid-match uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@s uk-text-center" uk-grid>
            
            <div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>RCIB Car Insurance</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>


            <div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>RCIB Car Insurance</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>

            <div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>RCIB Car Insurance</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>

            <div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>RCIB Car Insurance</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>

            <div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>RCIB Car Insurance</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>

            <div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>RCIB Car Insurance</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>


            </div>
            </div>
            </div>';
            
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

            $icon = get_sub_field('icon');
            $tiles = get_template_part( 'components/join-today-tiles', 'index' );
                
            echo ''.$tiles.'';


        // Call - Number
        elseif( get_row_layout() == 'call_us' ): 
        
        $tiles = get_template_part( 'components/call-us/call-us', 'index' );
        
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