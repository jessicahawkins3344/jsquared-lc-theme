<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
  	<link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,700,800" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

	<?php echo dslc_hf_get_header(); ?>