<?php
get_header(); ?>
index page not sure


<div id="image_banner">

<?php $headers = get_uploaded_header_images(); ?>
<?php 
$i=0;
foreach($headers as $header) { 
    $i++;?>
    <img id="image_<?php echo $i; ?>" class="banner_img" src="<?php echo $header['url']; ?>" />
<?php } ?>
</div>











<?php get_footer(); ?>
