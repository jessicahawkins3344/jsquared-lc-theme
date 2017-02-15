<?php

// Delcare Header/Footer compatibility
define( 'DS_LIVE_COMPOSER_HF', true );
define( 'DS_LIVE_COMPOSER_HF_AUTO', false );

// Content Width ( WP requires it and LC uses is to figure out the wrapper width )
if ( ! isset( $content_width ) )
	$content_width = 1180;

//* Customizer-Library
if ( file_exists ( get_template_directory() . '/inc/customizer-library/customizer-library.php' ) ) :
  // Helper library for the theme customizer.
  require get_template_directory() . '/inc/customizer-library/customizer-library.php';
  // Define custom setup for the theme customizer.
  require get_template_directory() . '/inc/customizer-setup.php';
else :
  add_action( 'customizer-library-notices', 'squarely_customizer_library_notice' );
endif;

//* Live Composer Customizations
require get_template_directory() . '/inc/composer-section-title.php';
require get_template_directory() . '/inc/custom-composer.php';
require get_template_directory() . '/inc/mod-composer.php';

// Basic theme setup
if ( ! function_exists( 'lct_theme_setup' ) ) {

	function lct_theme_setup() {

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Enable Post Thumbnails ( Featured Image )
		add_theme_support( 'post-thumbnails' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', 'gallery', 'caption', ) );

		// Enable support for Post Formats.
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video','quote', 'link', ) );

	}

} add_action( 'after_setup_theme', 'lct_theme_setup' );

// Load JS and CSS files
function lct_load_scripts() {
		wp_enqueue_script( 'countimator', 'https://cdn.rawgit.com/benignware/jquery-countimator/master/dist/js/jquery.countimator.min.js', array ( 'jquery' ), null, true);

	wp_enqueue_style( 'bootstrap4-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css', false, null, 'all' );
 	
	wp_enqueue_style( 'lct-base-style', get_stylesheet_uri('custom.css'), array(), '1.0' );
	wp_enqueue_style( 'lct-base-style', get_stylesheet_uri(), array(), '1.0' );

} add_action( 'wp_enqueue_scripts', 'lct_load_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/functions/function-fashortcode.php';