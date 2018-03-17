<?php
/*
Comments: use this for first landing page 
     The front page template.
*/
get_header(); ?>
<!--this is the front page


front-page.php-->
<div id="image_banner">

<?php $headers = get_uploaded_header_images(); ?>
<?php foreach($headers as $header) { ?>
    <div>
        <img class="banner_img" src="<?php echo $header['url']; ?>" />
    </div>
<?php } ?>
</div>
<?php if ( is_active_sidebar( 'sidebar-18' ) ) : ?>

<div id="text_below_banner">
    <div class="overlay1">
                <?php dynamic_sidebar( 'sidebar-18' ); ?>
       
    </div>
</div>
<?php endif; ?>

    <div class="overlay3">

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

    </div>
    <div class="overlay4">

        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-5' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-6' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

    </div>

    <div class="overlay5">

        <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-7' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-8' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-9' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-10' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

    </div>

    <div class="overlay6">

        <?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-11' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-12' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-12' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>
    
    </div>    

        
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" type="text/css" />


<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/banner.js'></script>
<?php get_footer(); ?>
