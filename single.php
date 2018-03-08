<?php
/*
Comments: use this for displaying single post 
The single post template. Used when a single post is queried. For this and all other query templates, index.php is used if the query template is not present.
*/
get_header(); ?>
for single post content


                             <?php while ( have_posts() ) : the_post(); ?>
                                        <?php get_template_part( 'content',get_post_format() ); ?>
   					<?php
                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                        endif;

                                        if ( ! comments_open() ) {
                                                _e( 'Comments are closed.', 'school' );
                                        }
                                        ?>
                                </div>
                                <?php endwhile; // End of the loop. ?>










<?php get_footer(); ?>
