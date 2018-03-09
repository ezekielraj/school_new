<?php
/*
Comments: use this for posts home page as news in school template
this might have all posts and also can have archieve 
The home page template, which is the front page by default. If you use a static front page this is the template for the page with the latest posts.
*/
get_header(); ?>
this is the page to show all posts
home.php




                              <main id="main" class="site-main" role="main">
                                <?php if ( have_posts() ) : ?>
                                        <?php if ( is_home() && ! is_front_page() ) : ?>
                                                <header>
                                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                                </header>
                                        <?php endif; ?>

                                        <?php /* Start the Loop */ ?>
                                        <?php while ( have_posts() ) : the_post(); ?>
                                                <?php
                                                /*
                                                 * If you want to disaplay only excerpt, file content-excerpt.php will be used.
                                                 * Include the Post-Format-specific template for the content.
                                                 * If you want to override this in a child theme, then include a file
                                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                 */
                                                $post_display_option = get_theme_mod( 'post_display_option', 'post-excerpt' );
                                                if ( 'post-excerpt' === $post_display_option ) {
                                                        get_template_part( 'content','excerpt' );
                                                } else {
                                                        get_template_part( 'content', get_post_format() );
                                                }
                                                ?>
                                        <?php endwhile; ?>
                                        <?php school_new_posts_navigation(); ?>
                                <?php else : ?>
                                        <?php get_template_part( 'content', 'none' ); ?>
                                <?php endif; ?>
                                </main><!-- #main -->



same  as index.php




<?php get_footer(); ?>
