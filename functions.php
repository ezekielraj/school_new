<?php

if ( ! function_exists( 'school_new_the_custom_logo' ) ) :
function school_new_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
        }
}
endif;

if ( ! function_exists( 'school_new_setup' ) ) :

function school_new_setup() {


load_theme_textdomain( 'school_new' );

// Add default posts and comments RSS feed links to head.
                add_theme_support( 'automatic-feed-links' );

                /*
                 * Let WordPress manage the document title.
                 * By adding theme support, we declare that this theme does not use a
                 * hard-coded <title> tag in the document head, and expect WordPress to
                 * provide it for us.
                 */
                add_theme_support( 'title-tag' );


     add_theme_support( 'custom-logo', 
        array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        ) );

        register_nav_menus( array(
                'primary' => __( 'Primary Menu', 'school_new' ),
        ) );


                add_theme_support( 'post-thumbnails' );
                set_post_thumbnail_size( 604, 270 );
                add_image_size( 'school_new-full-width', 1038, 576, true );

        /*
                 * Switch default core markup for search form, comment form, and comments
                 * to output valid HTML5.
                 */
                add_theme_support( 'html5', array(
                        'search-form',
                        'comment-form',
                        'comment-list',
                        'gallery',
                        'caption',
                ) );
                /*
                 * Enable support for Post Formats.
                 * See http://codex.wordpress.org/Post_Formats
                 */
                add_theme_support( 'post-formats', array(
                        'aside',
                        'image',
                        'video',
                        'quote',
                        'link',
                        'gallery',
'status', 'audio', 'chat'
                ) );

                // Set up the WordPress core custom background feature.
                add_theme_support( 'custom-background', apply_filters( 'school_new_custom_background_args', array(
                        'default-color' => 'f5f5f5',
                        'default-image' => '',
                ) ) );


}
endif;
add_action( 'after_setup_theme', 'school_new_setup' );

function school_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'school_custom_header_args', array(
		//'default-text-color'     => $default_text_color,
		'width'                  => 1583,
		'height'                 => 735,
	//	'wp-head-callback'       => 'school_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'school_custom_header_setup' );

if ( ! function_exists( 'school_new_post_thumbnail' ) ) :
/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 */
function school_new_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
                return;
        }

        if ( is_singular() ) :
        ?>

        <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
        </div><!-- .post-thumbnail -->

        <?php else : ?>

        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php
                        the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
                ?>
        </a>

        <?php endif; // End is_singular()
}
endif;
if ( ! function_exists( 'school_new_entry_meta' ) ) :
        /**
         */
        function school_new_entry_meta() {
                if ( is_sticky() && is_home() && ! is_paged() ) {
                        printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'school_new' ) );
                }
        
                $format = get_post_format();
                if ( current_theme_supports( 'post-formats', $format ) ) {
                        printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
                                sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'school_new' ) ),
                                esc_url( get_post_format_link( $format ) ),
                                get_post_format_string( $format )
                        );
                }
        
                if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
                        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        
                        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                                $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
                        }
        
                        $time_string = sprintf( $time_string,
                                esc_attr( get_the_date( 'c' ) ),
                                get_the_date(),
                                esc_attr( get_the_modified_date( 'c' ) ),
                                get_the_modified_date()
                        );
        
                        printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
                                _x( 'Posted on', 'Used before publish date.', 'school_new' ),
                                esc_url( get_permalink() ),
                                $time_string
                        );
                }
        
                if ( 'post' == get_post_type() ) {
                        if ( is_singular() || is_multi_author() ) {
                                printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
                                        _x( 'Author', 'Used before post author name.', 'school_new' ),
                                        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                                        get_the_author()
                                );
                        }
        
                        $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'school_new' ) );
                        if ( $categories_list && school_new_categorized_blog() ) {
                                printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
                                        _x( 'Categories', 'Used before category names.', 'school_new' ),
                                        $categories_list
                                );
                        }
        
                        $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'school_new' ) );
                        if ( $tags_list && ! is_wp_error( $tags_list ) ) {
                                printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
                                        _x( 'Tags', 'Used before tag names.', 'school_new' ),
                                        $tags_list
                                );
                        }
                }
        
                if ( is_attachment() && wp_attachment_is_image() ) {
                        // Retrieve attachment metadata.
                        $metadata = wp_get_attachment_metadata();
        
                        printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
                                _x( 'Full size', 'Used before full size attachment link.', 'school_new' ),
                                esc_url( wp_get_attachment_url() ),
                                $metadata['width'],
                                $metadata['height']
                        );
                }
        
                if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
                        echo '<span class="comments-link">';
                        /* translators: %s: post title */
                        comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'school_new' ), get_the_title() ) );
                        echo '</span>';
                }
        }
endif;
        
function school_new_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'school_new_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'school_new_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 || is_preview() ) {
		// This blog has more than 1 category so school_new_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so school_new_categorized_blog should return false.
		return false;
	}
}



if ( ! function_exists( 'school_new_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function school_new_posts_navigation() {
        // Don't print empty markup if there's only one page.
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
                return;
        }
        ?>
        <nav class="navigation posts-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'school_new' ); ?></h2>
                <div class="nav-links">

                        <div class="row">
                                <?php if ( get_previous_posts_link() ) { ?>
                                <div class="col-md-6 next-post">
                                <?php previous_posts_link('<i class="fa fa-angle-double-left"></i>
'. __( 'NEWER POSTS', 'school_new' ) ); ?>
                                </div>
                                <?php } else {
                                        echo '<div class="col-md-6">';
                                        echo '<p> </p>';
                                        echo '</div>';
                                } ?>

                                <?php if ( get_next_posts_link() ) { ?>
                                <div class="col-md-6 prev-post">
                                <?php next_posts_link( __( 'OLDER POST', 'school_new' ).'<i class="fa fa-angle-double-right"></i>' ); ?>
                                </div>
                                <?php } else{
                                        echo '<div class="col-md-6">';
                                        echo '<p> </p>';
                                        echo '</div>';
                                } ?>
                                </div>
                </div><!-- .nav-links -->
        </nav><!-- .navigation -->
        <?php
}
endif;

if ( ! function_exists( 'school_new_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function school_new_entry_footer() {

        if(is_single())
                echo '<hr>';

        if(!is_home() && !is_search() && !is_archive()){

                        if ( 'post' == get_post_type() ) {
                                /* translators: used between list items, there is a space after the comma */
                                $categories_list = get_the_category_list( esc_html__( ', ', 'school_new' ) );
                                echo '<div class="row">';
                                if ( $categories_list && school_new_categorized_blog() ) {
                                        printf( '<div class="col-md-6 cattegories"><span class="cat-links"><i class="fa fa-folder-open"></i>
                 ' . esc_html__( '%1$s', 'school_new' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
                                }
                                else{
                                        echo '<div class="col-md-6 cattegories"><span class="cat-links"><i class="fa fa-folder-open"></i></span></div>';
                                }


                                $tags_list = get_the_tag_list( '', esc_html__( ', ', 'school_new' ) );
                                if ( $tags_list ) {
                                        printf( '<div class="col-md-6 tags"><span class="tags-links"><i class="fa fa-tags"></i>' . esc_html__( ' %1$s', 'school_new' ) . '</span></div>', $tags_list ); // WPCS: XSS OK.
                                }

                                echo '</div>';
                        }
        }

        edit_post_link( esc_html__( 'Edit This Post', 'school_new' ), '<br><span>', '</span>' );

}
endif;

if ( ! function_exists( 'school_new_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function school_new_posted_on() {

$viewbyauthor_text = __( 'View all posts by', 'school_new' ).' %s';

$entry_meta = '<i class="fa fa-calendar-o"></i> <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s </time></a><span class="byline"><span class="sep"></span><i class="fa fa-user"></i>
<span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>';

        $entry_meta = sprintf($entry_meta,
                esc_url( get_permalink() ),
        esc_attr( get_the_time() ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_attr( sprintf( $viewbyauthor_text, get_the_author() ) ),
        esc_html( get_the_author() ));

    print $entry_meta;

        if(comments_open()){
                printf(' <i class="fa fa-comments-o"></i><span class="screen-reader-text">%1$s </span> ',_x( 'Comments', 'Used before post author name.', 'school_new' ));
                comments_popup_link( __('0 Comment','school_new'), __('1 comment','school_new'), __('% comments','school_new'), 'comments-link', '');
        }
}
endif;

function school_new_featured_image_disaplay() {
        if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) {  // check if the post has a Post Thumbnail assigned to it. ?>
        <div class="featured-image">
                <?php if( !is_single() ) { ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php }
            the_post_thumbnail('school_new-full-width'); ?>
            <?php if( !is_single() ) { ?>
            </a> <?php } ?>
        </div>
        <?php
    }
}

function school_new_scripts() {
        //Enqueue Styles
#        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
#        wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css' );
#        wp_enqueue_style( 'school_new-style', get_stylesheet_uri() );
        //Enqueue Scripts
#        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '', true );
#        wp_enqueue_script( 'school_new-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '', true );
#        wp_enqueue_script( 'school_new-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array( 'jquery' ), '', true );
#        wp_enqueue_script( 'school_new-js', get_template_directory_uri() . '/js/school_new.js', array( 'jquery' ), '',true );
#        wp_enqueue_script( 'html5shiv', get_template_directory_uri(). '/js/html5shiv.js', array(),'3.7.3' ,false );
#        wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
#        wp_localize_script( 'school_new-js', 'screenReaderText', array(
#                'expand'   => __( 'expand child menu', 'school_new' ),
#                'collapse' => __( 'collapse child menu', 'school_new' ),
#        ) );
#
#        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
#                wp_enqueue_script( 'comment-reply' );
#        }
}
add_action( 'wp_enqueue_scripts', 'school_new_scripts' );


/**
 * Change Read More link.
 */
function school_new_new_excerpt_more( $more ) {
        return '...<p class="read-more"><a class="btn btn-default" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">' . __( ' Read More', 'school_new' ) . '<span class="screen-reader-text"> '. __( ' Read More', 'school_new' ).'</span></a></p>';
}
add_filter( 'excerpt_more', 'school_new_new_excerpt_more' );

/**
 * Change excerpt length to 80 characters.
 */
function custom_excerpt_length( $length ) {
        return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function school_new_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'home page Widget Area 1', 'school_new' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'school_new' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
		'name'          => __( 'home page Widget Area 2', 'school_new' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'school_new' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
		'name'          => __( 'home page Widget Area 3', 'school_new' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'school_new' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
		'name'          => __( 'home page Widget Area 4', 'school_new' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'school_new' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
		'name'          => __( 'home page Widget Area 5', 'school_new' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'school_new' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
		'name'          => __( 'home page Widget Area 6', 'school_new' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'school_new' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'school_new_widgets_init' );