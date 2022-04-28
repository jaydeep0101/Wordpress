<?php
/**
 * seo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function seo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on seo, use a find and replace
		* to change 'seo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'seo', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'seo' ),
			'menu-2' => esc_html__( 'PrimaryServices', 'SecondMenu' ),
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
			'seo_custom_background_args',
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
add_action( 'after_setup_theme', 'seo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function seo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seo_content_width', 640 );
}
add_action( 'after_setup_theme', 'seo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function seo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'seo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'seo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'seo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function seo_scripts() {
	wp_enqueue_style( 'seo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'seo-style', 'rtl', 'replace' );


	// CSS
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array());
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array());
	wp_enqueue_style( 'slicktheme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array());
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array());
	wp_enqueue_style( 'magnific-css', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css', array());
	wp_enqueue_style( 'new-style-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array());
	wp_enqueue_style( 'new-responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array());
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/assets/css/animate.css', array());
	wp_enqueue_style( 'aos-css', get_stylesheet_directory_uri() . '/assets/css/aos.css', array());
	
	
	
	// JS
	wp_enqueue_script( 'jquerynew', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrapbundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrapmin', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquerynew', get_template_directory_uri() . '/assets/js/all.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'animate-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/custom-slider.js', array(), _S_VERSION, true );
	
	
	

	wp_enqueue_script( 'seo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'seo_scripts' );

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
