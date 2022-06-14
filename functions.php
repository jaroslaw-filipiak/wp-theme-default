<?php
/**
 * szymon-janiak functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package szymon-janiak
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
function szymon_janiak_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on szymon-janiak, use a find and replace
		* to change 'szymon-janiak' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'szymon-janiak', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'szymon-janiak' ),
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
			'szymon_janiak_custom_background_args',
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
add_action( 'after_setup_theme', 'szymon_janiak_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function szymon_janiak_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'szymon_janiak_content_width', 640 );
}
add_action( 'after_setup_theme', 'szymon_janiak_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function szymon_janiak_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pojedyńczy wpis (Blog)', 'szymon-janiak' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'szymon-janiak' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'szymon_janiak_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function szymon_janiak_scripts() {
	wp_enqueue_style( 'szymon-janiak-style-vite-js', get_theme_file_uri(). '/dist/index.css', array(), _S_VERSION );
	wp_enqueue_style( 'szymon-janiak-style', get_stylesheet_uri(), array(), _S_VERSION );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if(is_page(12) || is_front_page()) {
		wp_enqueue_script( 'glider-js', get_theme_file_uri(). '/js/glider.min.js', array(), _S_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'szymon_janiak_scripts' );

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

/**
 * Custom post types
 */
require get_template_directory() . '/inc/post-types.php';


/**
 * Disable weird margin top if admin bar is visible
 */
add_action('get_header', 'my_filter_head');

function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

/*
 * Custom language switcher shortcode
 */
add_shortcode('custom-language-switcher', 'trpc_custom_language_switcher', 10);
function trpc_custom_language_switcher(){
	$languages = trp_custom_language_switcher();
	$html = "<ul class='d-flex gap-2' data-no-translation>";
	foreach ($languages as $name => $item) {
		$html .= "<li>";
		$html .= "<a class='text-uppercase' href='{$item['current_page_url']}'>";
		$html .= "<span>{$item['short_language_name']}</span></a></li>";
	}
	$html .= "</ul>";

	return $html;
}