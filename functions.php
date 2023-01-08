<?php
/**
 * stack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stack
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
function stack_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on stack, use a find and replace
		* to change 'stack' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'stack', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'stack' ),
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
			'stack_custom_background_args',
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

add_action( 'after_setup_theme', 'stack_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stack_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stack_content_width', 640 );
}

add_action( 'after_setup_theme', 'stack_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stack_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'stack' ),
			'id'            => 'main-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'stack' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-latest-post single-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}

add_action( 'widgets_init', 'stack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stack_scripts() {
	//Css
	wp_enqueue_style( 'stack-font', '//fonts.googleapis.com/css?family=Open+Sans|Titillium+Web:600,700' );
	wp_enqueue_style( 'stack-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-nivo-lightbox', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'stack-style', get_stylesheet_uri(), array(), _S_VERSION );

	//Js
	wp_enqueue_script( 'stack-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-wow-js', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-nav-js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-scrolling-js', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-lightbox-js', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'stack-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'stack_scripts' );



require_once get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/tgm/tgm-active.php';



