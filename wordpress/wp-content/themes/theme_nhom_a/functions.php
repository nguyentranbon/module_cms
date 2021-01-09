<?php
/**
 * theme_nhom_a functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme_nhom_a
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_nhom_a_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_nhom_a_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme_nhom_a, use a find and replace
		 * to change 'theme_nhom_a' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme_nhom_a', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'theme_nhom_a' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_nhom_a_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'theme_nhom_a_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_nhom_a_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_nhom_a_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_nhom_a_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_nhom_a_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme_nhom_a' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Map', 'theme_nhom_a' ),
			'id'            => 'map',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Home Categories', 'theme_nhom_a' ),
			'id'            => 'home_categories',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Category Post', 'theme_nhom_a' ),
			'id'            => 'category_post',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Recent Post', 'theme_nhom_a' ),
			'id'            => 'recent_post',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Tags', 'theme_nhom_a' ),
			'id'            => 'tags',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Search', 'theme_nhom_a' ),
			'id'            => 'search',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Archive', 'theme_nhom_a' ),
			'id'            => 'archive',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Travelers', 'theme_nhom_a' ),
			'id'            => 'top_travelers',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Ads', 'theme_nhom_a' ),
			'id'            => 'ads',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	); 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Subscribe', 'theme_nhom_a' ),
			'id'            => 'Subscribe',
			'description'   => esc_html__( 'Add widgets here.', 'theme_nhom_a' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'theme_nhom_a_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_nhom_a_scripts() {
	wp_enqueue_style( 'theme_nhom_a-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'css_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'css_font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	// wp_enqueue_style( 'css_1', get_template_directory_uri() . '/assets/css/1.css' );
	// wp_enqueue_style( 'css_2', get_template_directory_uri() . '/assets/css/2.css' );
	// wp_enqueue_style( 'css_3', get_template_directory_uri() . '/assets/css/3.css' );
	// wp_enqueue_style( 'css_4', get_template_directory_uri() . '/assets/css/4.css' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js' );
	wp_enqueue_script( 'nhom_a', get_template_directory_uri() . '/assets/js/theme_nhom_a.js' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	for($i = 1; $i <= 36; $i++){
		wp_enqueue_style( 'module-'.$i, get_template_directory_uri() . '/modules/'.$i.'/css/'.$i.'.css', 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_nhom_a_scripts' );

/*Adding class to menu item - li tag */
function add_menu_list_item_class($classes, $item, $args) {
	if($args->list_item_class) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
  }
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
  
/*Adding class to link menu item - a tag */
function add_menu_link_class( $atts, $item, $args ) {
	if($args->link_class) {
	  $atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function theme_nhom_a_unique_id( $prefix = '' ) {
	static $id_counter = 0;
	if ( function_exists( 'wp_unique_id' ) ) {
		return wp_unique_id( $prefix );
	}
	return $prefix . (string) ++$id_counter;
}

function nhoma_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
			?>
			<div class="comment-meta commentmetadata">
				<?php printf( __( '<h5 class="fn">%s</h5>' ), get_comment_author_link() ); ?>
            <a class="comment-time" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s @ %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( ' Edit ' ), '  ', '' ); ?>
        </div>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>
        
 
        <?php comment_text(); ?>
 
        <div class="comment-reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

function nhoma_style_the_archive_count($links) {
    $links = str_replace('</a>&nbsp;(', '</a> <span class="archiveCount">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}

add_filter('get_archives_link', 'nhoma_style_the_archive_count');

function nhoma_style_the_categories_count($links) {
    $links = str_replace('</a> (', '</a> <span class="categoryCount">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}

add_filter('wp_list_categories', 'nhoma_style_the_categories_count');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

