<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>

 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" type="text/css" />
 <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js'></script>


</head>

<body <?php body_class(); ?>>

<div id="header">

  <div class="overlay1">

    <div class="overlay11">

      <div id="sn_logo">
        <?php 

          school_new_the_custom_logo(); 

        ?> 
      </div>

    </div>

    <div class="overlay12">

      <div id="sn_title">
        <?php

        if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif;
        ?>
      </div>

      <div id="sn_description">
        <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
        <p class="site-description"><?php echo $description; ?></p>
        <?php endif;

        ?>
      </div>

    </div>

    <div class="overlay13">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
             <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                <?php
                  wp_nav_menu( array(
                      'theme_location' => 'primary',
                       'menu_class'     => 'primary-menu',
                      ) );
                ?>
            </nav><!-- .main-navigation -->
        <?php endif; ?>

    </div>

  </div>

</div>

  <div class="overlay2"> 
                  <div id="menu-header"> Menu </div>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                    <?php
                      wp_nav_menu( array(
                          'theme_location' => 'primary',
                          'menu_class'     => 'primary-menu',
                          ) );
                    ?>
                </nav><!-- .main-navigation -->
            <?php endif; ?>
    
  
  </div>


