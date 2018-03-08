<?php
/*
Comments: use this for displaying single page 
     The page template. Used when an individual Page is queried.
*/
get_header(); ?>
<!--page for single page-->



                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                                comments_template();
                        endif;

                // End the loop.
                endwhile;
                ?>










<?php get_footer(); ?>
