<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/components/offer-tiles/offer-tiles.css" type="text/css" media="screen" />

<div class="dealContainer uk-container uk-padding-large uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right uk-padding-remove-top">
<ul class="tabs uk-child-width-expand" uk-tab>
<li class="uk-active"><a href="#">Latest Offers</a></li>
<li><a href="#">Why Join?</a></li>
<li><a href="#">How It Works</a></li>
</ul>
<div class="dealWrapper">
<div class="uk-grid-match uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@s uk-text-center" uk-grid>

<?php

if ( is_page() ) {
         
    // define query arguments
     $args = array(
         'posts_per_page' => 12,
         'post_type'   => 'offers',
         'post_status' => 'publish'
         // your 'x' goes here
         // possibly more arguments here
     );
          
          }
 
 
     // set up new query
     $tyler_query = new WP_Query( $args );
     
     
 
     // loop through found posts
     while ( $tyler_query->have_posts() ) : $tyler_query->the_post();


    echo '<div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body"><div><div class="cardHero" style="background-image: url(&quot;//images.ctfassets.net/6jd9q0n722ij/7ebrl87konZtEPXb9r46kV/98583756f5790ee6ba16b697b799a7c6/new_york.jpg&quot;); background-size: cover;"></div><div class="cardContents uk-padding-remove-top"><img class="productImage" src="//images.ctfassets.net/6jd9q0n722ij/5usF7rsdUI6JS3XfqbzN9X/5963e10f789289421fe50bc8216fa701/_logoRCIB.jpg"><h3>'.get_the_title().'</h3><span class="uk-badge">Cashback Offer</span><p>Car Insurance to suit your individual requirement (Stage Test)</p><a target="_blank" href="http://secure.rcib.co.uk/carquote.aspx?utm_campaign=CLUB"><button class="uk-button uk-button-primary uk-button-large">Redeem</button></a></div></div></div></div>';
    endwhile;

    // reset post data
    wp_reset_postdata();
    ?>

</div></div></div>