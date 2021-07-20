<?php
/**
 * Template Name: Materiais Single
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/materiais-single.php');
}else{
	include('assets/mobile/home.php');
}

get_footer($device);
?>



