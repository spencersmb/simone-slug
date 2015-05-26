<?php
/**
 * Simone4 functions and definitions
 *
 * @package Simone4
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'simone_slug_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simone_slug_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Simone4, use a find and replace
	 * to change 'simone-slug' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'simone-slug', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location. Name of nav, name of theme
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'simone-slug' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 * 'aside', 'image', 'video', 'quote', 'link',
	 */
	add_theme_support( 'post-formats', array(
		'aside'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'simone_slug_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // simone_slug_setup
add_action( 'after_setup_theme', 'simone_slug_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function simone_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'simone-slug' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'simone_slug_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function simone_slug_scripts() {

  //Link to main style sheet
	wp_enqueue_style( 'simone-slug-style', get_stylesheet_uri() );

	//Link to layout 1 style sheet
	wp_enqueue_style( 'simone-slug-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css' );

  //Link to custom fonts
  wp_enqueue_style( 'simone-google-fonts', 'http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic|Roboto:400,300,500,100,400italic,700,900,900italic' );

  //Link to font awesome
  wp_enqueue_style( 'simone-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

  //Nav JS
	wp_enqueue_script( 'simone-slug-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

  //JS plugin
	wp_enqueue_script( 'simone-slug-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	//Superfish if false it loads in the header
	wp_enqueue_script( 'simone-slug-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140328', true );

	//Superfish Settings
	wp_enqueue_script( 'simone-slug-sfSettings', get_template_directory_uri() . '/js/superfish-settings.js', array
	('simone-slug-superfish'), '20140328', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
//enqueue the scripts, function name
add_action( 'wp_enqueue_scripts', 'simone_slug_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
