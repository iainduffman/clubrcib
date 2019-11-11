<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/components/call-us/call-us.css" type="text/css" media="screen" />

<!-- Structure -->
<div class="call-us uk-section uk-section-primary tm-section-primary uk-section-xlarge" style="background: #272727;">
<div class="uk-container uk-text-center">
<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid>
<div>
<div class="content-left">
<h1 style="color: #D8272F;" class="uk-margin-small-bottom"><span uk-icon="icon: <?php the_field('call_block_icon', 533); ?>; ratio: 2" style="color: #D8272F; color: #D8272F; margin-right: 8px;"></span><?php the_field('call_block_title', 533); ?></h1>
<p class="uk-text-left uk-text-bold"><?php the_field('call_block_subline', 533); ?></p>
</div>
</div>
<div class="uk-text-left">
<div class="content-right">
<p class="uk-text-left"><?php the_field('call_block_description', 533); ?></p>
</div>
</div>
</div>
</div>
</div>