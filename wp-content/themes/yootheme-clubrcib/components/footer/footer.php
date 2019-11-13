<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/components/footer/footer.css" type="text/css" media="screen" />
<!--  -->

<div class="footer uk-section uk-section-primary tm-section-primary uk-section-xlarge uk-padding-remove-bottom uk-padding-remove-top" style="background: #323232;">
<div class="uk-container uk-text-center">
<div class="uk-margin-top uk-margin-bottom">
<div uk-grid="" class="uk-child-width-auto@m uk-flex-middle uk-grid">
<div class="uk-first-column uk-hidden">
<!-- <ul class="uk-navbar-nav uk-navbar-nav footer-left uk-visible@l">
<li><a class="uk-text-bold" href="#"><span class="uk-margin-small-right uk-icon" uk-icon="receiver" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="receiver"><path fill="none" stroke="#000" stroke-width="1.01" d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"></path></svg></span><p>Call Us <?php the_field('phone_number', 533); ?></p> <span style="font-weight: 400;"></span></a></li>
</ul> -->
</div>
<div class="uk-flex-1 uk-margin-auto uk-visible@m">

<div uk-margin="" class="footer-nav">

<div class="footer-links">
<?php
wp_nav_menu( array( 
'theme_location' => 'footer-menu', 
'container_id' => 'footermenu',
'container' => 'div',
'menu_class' => 'footermenu',
'menu_id' => 'footerid',
'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
'container_class' => 'test' ) ); 
?>
</div>

</div>
</div>

<div uk-grid="" class="uk-child-width-auto@m uk-flex-middle uk-grid">
<div class="uk-margin-auto">

<div class="uk-width-medium-1-1 copyright-text">
<p>This Website is made available to you by Right Choice Insurance Brokers Limited. Registered Office: St James House, 27-43 Eastern Road, Romford, Essex, RM1 3NH. Registered in England & Wales No. 6423401. EuroRescue is arranged and administered by Right Choice Insurance Brokers Limited which is authorised and regulated by the Financial Conduct Authority under reference number 475620.</p>

<div class="uk-hidden uk-width-medium-1-1">
<p><a href="https://www.facebook.com/eurorescuebreakdown/" target="_blank"><span uk-icon="icon: facebook; ratio: 2"></a></span></p>
</div>
</div>


</div>
</div>
</div>
</div>
</div>