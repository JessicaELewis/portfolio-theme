<?php
/**
 * bootscores functions and definitions
 *
 * @package bootscores
 */

if ( ! function_exists( 'jlewis_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jlewis_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bootscores, use a find and replace
	 * to change 'bootscores' to the name of your theme in all the template files
	 */
	//load_theme_textdomain( 'bootscores', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bootscores' ),
	) );

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
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jlewis_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // jlewis_setup
add_action( 'after_setup_theme', 'jlewis_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function jlewis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jlewis_content_width', 640 );
}
add_action( 'after_setup_theme', 'jlewis_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function jlewis_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bootscores' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'jlewis_widgets_init' );

function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * Enqueue scripts and styles.
 */
function jlewis_enqueue_scripts() {

	/* bootstrap framework */
	//wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
	/*This theme's customizations*/
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/_css/theme.css' );

    /*main jq*/
    wp_enqueue_script( 'JQuery','//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), true );

	/*nav style*/
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/_scripts/bootstrap.js' );

	/*flickity slider*/
    wp_enqueue_script( 'jlport_flickity', get_template_directory_uri().'/_scripts/flickity.js' );

	/*bootstrap scripts*/
	//wp_enqueue_script( 'bootscores-bootstrap-js','//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), '', true );


}
add_action( 'wp_enqueue_scripts', 'jlewis_enqueue_scripts' );
