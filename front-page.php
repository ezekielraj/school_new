<?php
/*
Comments: use this for first landing page 
     The front page template.
*/
get_header(); ?>
this is the front page



front-page.php
<div id="image_banner">

<?php $headers = get_uploaded_header_images(); ?>
<?php 
$i=0;
foreach($headers as $header) { 
    $i++;?>
    <img id="image_<?php echo $i; ?>" class="banner_img" src="<?php echo $header['url']; ?>" />
<?php } ?>
</div>



<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/banner.js'></script>
<?php get_footer(); ?>
