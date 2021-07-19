<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>



	<link rel="preconnect" href="https://fonts.gstatic.com">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/assets-custom/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/assets-custom/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-slider-m.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-searchbar-m.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-lowerbar-m.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-exames-m.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-content-blog-m.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-menu-m.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-depoimento-m.css">
</head>

<body <?php body_class(); ?>>
	
