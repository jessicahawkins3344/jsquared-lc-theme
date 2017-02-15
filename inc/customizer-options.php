<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library squarely
 */

function customizer_library_squarely_options() {

	// Theme defaults
	$brand_primary = '#02c0a7';
	$brand_success = '#FF4A4F';
	$brand_secondary = '#f1c40f';
	$brand_info = '#B5BC18';
	$c_gray = '#404040';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	$panels = array();

	// Stores all the controls to be added
	$control = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;


	/*/////////////////////////////////
	/* Sections & Section Panels
	/*/////////////////////////////////

	$panel = 'header-navbar';
	$panels[] = array(
		'id' => $panel,
		'title' => __( 'Home Hero & Navbar', 'squarely' ),
		'priority' => '0'
	);

	$section = 'colors_type';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Theme Colors', 'squarely' ),
		'priority' => '0'
	);

	$section = 'typography';
	$font_choices = customizer_library_get_font_choices();
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Typography', 'squarely' ),
		'priority' => '0'
	);

	$section = 'layout_design';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Layout & Design', 'squarely' ),
		'priority' => '0'
	);

	$section = 'social';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Social', 'squarely' ),
		'priority' => '0'
	);

	$section = 'footer';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Footer', 'squarely' ),
		'priority' => '0'
	);

	$section = 'contact_info';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Contact Information', 'squarely' ),
		'priority' => '0'
	);

	$section = 'posts';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Posts', 'squarely' ),
		'priority' => '0'
	);

	/*/////////////////////////////////
	/* Options - Contact Info
	/*/////////////////////////////////

	$options['telephone'] = array(
		'id' => 'telephone',
		'label'   => __( 'Telephone Number', 'squarely' ),
		'section' => 'contact_info',
		'type'    => 'text',
	);

	$options['e-mail'] = array(
		'id' => 'e-mail',
		'label'   => __( 'E-Mail', 'squarely' ),
		'section' => 'contact_info',
		'type'    => 'text',
	);

	$options['address'] = array(
		'id' => 'address',
		'label'   => __( 'Address', 'squarely' ),
		'section' => 'contact_info',
		'type'    => 'text',
	);

	/*/////////////////////////////////
	/* Options - Posts
	/*/////////////////////////////////

	$options['posts-hero'] = array(
		'id' => 'posts-hero',
		'label'   => __( 'Posts Header Hero BG', 'squarely' ),
		'section' => 'posts',
		'type'    => 'image',
	);

	$options['posts-overlay'] = array(
		'id' => 'posts-overlay',
		'label'   => __( 'Posts Header Overlay', 'squarely' ),
		'section' => 'posts',
		'type'    => 'color',
	);

	$options['posts-h1-color'] = array(
		'id' => 'posts-h1-color',
		'label'   => __( 'Posts Header Type Color', 'squarely' ),
		'section' => 'posts',
		'type'    => 'color',
	);

	$choices = array(
	    'scroll' => 'scroll',
	    'fixed' => 'fixed'
	);

	$options['posts-hero-attachment'] = array(
	    'id' => 'posts-hero-attachment',
	    'label'   => __( 'Post Header Attachment', 'squarely' ),
	    'section' => 'posts',
	    'type'    => 'select',
	    'choices' => $choices,
	    'default' => 'scroll'
	);

	/*/////////////////////////////////
	/* Options - Social
	/*/////////////////////////////////

	$options['c-facebook'] = array(
	    'id' => 'c-facebook',
	    'label'   => __( 'Include Facebook Profile', 'textdomain' ),
	    'section' => 'social',
	    'type'    => 'checkbox',
	    'default' => 0,
	);

	$options['c-twitter'] = array(
	    'id' => 'c-twitter',
	    'label'   => __( 'Include Twitter Profile', 'textdomain' ),
	    'section' => 'social',
	    'type'    => 'checkbox',
	    'default' => 0,
	);

	$options['c-google'] = array(
	    'id' => 'c-google',
	    'label'   => __( 'Include Google+ Profile', 'textdomain' ),
	    'section' => 'social',
	    'type'    => 'checkbox',
	    'default' => 0,
	);

	$options['f-facebook'] = array(
		'id' => 'f-facebook',
		'label'   => __( 'Facebook URL', 'squarely' ),
		'description' => __( 'Your Facebook URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'social',
		'type'    => 'url',
	);

	$options['f-twitter'] = array(
		'id' => 'f-twitter',
		'label'   => __( 'Twitter URL', 'squarely' ),
		'description' => __( 'Your Twitter URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'social',
		'type'    => 'url',
	);

	$options['f-google'] = array(
		'id' => 'f-google',
		'label'   => __( 'Google Plus URL', 'squarely' ),
		'description' => __( 'Your Plus URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'social',
		'type'    => 'url',
	);

	$options['f-linkedin'] = array(
		'id' => 'f-linkedin',
		'label'   => __( 'LinkedIn URL', 'squarely' ),
		'description' => __( 'Your LinkedIn URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'social',
		'type'    => 'url',
	);

	$options['f-youtube'] = array(
		'id' => 'f-youtube',
		'label'   => __( 'YouTube URL', 'squarely' ),
		'description' => __( 'Your YouTube Channel URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'social',
		'type'    => 'url',
	);

	$options['f-rss'] = array(
		'id' => 'f-rss',
		'label'   => __( 'RSS URL', 'squarely' ),
		'description' => __( 'Your RSS URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'social',
		'type'    => 'url',
	);

	/*/////////////////////////////////
	/* Options - Footer
	/*/////////////////////////////////

	$options['f-copyright'] = array(
		'id' => 'f-copyright',
		'label'   => __( 'Copyright Line', 'squarely' ),
		'description' => __( 'The Footer Copyright Line' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'text'
	);

	/*/////////////////////////////////
	/* Header & Navbar Sub Sections
	/*/////////////////////////////////

	$section = 'logo';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Navbar Logo & Color', 'squarely' ),
		'description' => __( 'Control your header\'s logo, colors, and link colors' , 'squarely' ), // @TODO Put a helper here
		'priority' => '30',
		'panel' => 'header-navbar'
	);

	$section = 'header-options';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Hero Text & Background', 'squarely' ),
		'priority' => '40',
		'panel' => 'header-navbar'
	);

	$section = 'header-buttons';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Hero Buttons', 'squarely' ),
		'priority' => '50',
		'panel' => 'header-navbar'
	);

	$section = 'header-scripts';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Additional Scripts', 'squarely' ),
		'description' => __( 'Analytics Scripts & Custom Scripts' , 'squarely' ), // @TODO Put a helper here
		'priority' => '60',
		'panel' => 'header-navbar'
	);

	/*/////////////////////////////////
	/* Options Header & Navbar
	/*/////////////////////////////////

	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Logo', 'squarely' ),
		'section' => 'logo',
		'type'    => 'image',
		'default' => ''
	);

	$options['nav-background'] = array(
		'id' => 'nav-background',
		'label'   => __( 'Navbar Color', 'squarely' ),
		'description' => __( 'Choose the background color of your site wide navigation bar' , 'squarely' ), // @TODO Put a helper here
		'section' => 'logo',
		'type'    => 'color',
		'default' => '#fffff',
	);

	$options['scripts-google'] = array(
		'id' => 'scripts-google',
		'label'   => __( 'Google Analytics ID', 'squarely' ),
		'section' => 'header-scripts',
		'type'    => 'text',
	);

	$options['add-scripts'] = array(
		'id' => 'add-scripts',
		'label'   => __( 'Custom Scripts for Header', 'squarely' ),
		'section' => 'header-scripts',
		'type'    => 'textarea',
	);

	$options['editor'] = array(
		'id' => 'editor',
		'label'   => __( 'Custom Scripts for Header', 'squarely' ),
		'section' => 'header-scripts',
		'type'    => 'editor',
	);

	$options['header-hero'] = array(
		'id' => 'header-hero',
		'label'   => __( 'Header Hero Image', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'image',
	);

	$options['header-subtitle'] = array(
		'id' => 'header-subtitle',
		'label'   => __( 'Hero Small Subtitle', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'default' => 'THANKS FOR SAYING HELLO TO'
	);

	$options['header-h1'] = array(
		'id' => 'header-h1',
		'label'   => __( 'Hero Header H1 Title', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'default' => 'Squarely Wordpress Theme'
	);

		$options['header-h2'] = array(
		'id' => 'header-h2',
		'label'   => __( 'Hero Header Secondary H2 Title', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'default' => 'Tailored-Made Development, Creative, Strategy & Management'
	);

			$options['btn-l-label'] = array(
		'id' => 'btn-l-label',
		'label'   => __( 'Hero Left Button Label', 'squarely' ),
		'section' => 'header-buttons',
		'type'    => 'text',
		'default' => 'LEARN MORE'
	);

		$options['btn-l-url'] = array(
		'id' => 'btn-l-url',
		'label'   => __( 'Hero Left Button URL Input', 'squarely' ),
		'section' => 'header-buttons',
		'type'    => 'url'
	);

		$options['btn-r-label'] = array(
		'id' => 'btn-r-label',
		'label'   => __( 'Hero Right Button Label', 'squarely' ),
		'section' => 'header-buttons',
		'type'    => 'text',
		'default' => 'OUR SERVICES'
	);

		$options['btn-r-url'] = array(
		'id' => 'btn-r-url',
		'label'   => __( 'Hero Right Button URL Input', 'squarely' ),
		'section' => 'header-buttons',
		'type'    => 'url'
	);

	/*/////////////////////////////////
	/* Options Colors & Typography
	/*/////////////////////////////////

	$options['primary-font'] = array(
		'id' => 'primary-font',
		'label'   => __( 'Primary Font', 'squarely' ),
		'section' => 'typography',
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Monoton'
	);

	$options['secondary-font'] = array(
		'id' => 'secondary-font',
		'label'   => __( 'Script, Decorative Font using the .script class', 'squarely' ),
		'section' => 'typography',
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Merriweather'
	);

	$options['body_font_color'] = array(
		'id' => 'body_font_color',
		'label'   => __( 'Base Font Color', 'squarely' ),
		'section' => 'typography',
		'type'    => 'color',
		'default' => $c_gray,
	);

	$options['body_background'] = array(
		'id' => 'body_background',
		'label'   => __( 'Base Background Color', 'squarely' ),
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => '#fffff',
	);

	$options['brand-primary'] = array(
		'id' => 'brand-primary',
		'label'   => __( 'Brand Primary', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".primary-bg or .brand-primary" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_primary,
	);

	$options['brand-secondary'] = array(
		'id' => 'brand-secondary',
		'label'   => __( 'Brand Secondary', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".secondary-bg or .brand-secondary" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_secondary,
	);

	$options['brand-success'] = array(
		'id' => 'brand-success',
		'label'   => __( 'Brand Success', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".success-bg or .brand-success" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_success,
	);

	$options['brand-info'] = array(
		'id' => 'brand-info',
		'label'   => __( 'Brand Info', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".info-bg or .brand-info" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_info,
	);
	

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_squarely_options' );