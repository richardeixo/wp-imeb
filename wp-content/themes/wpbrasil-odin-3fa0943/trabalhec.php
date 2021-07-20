<?php
/**
 * Template Name: Trabalhe Conosco
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/trabalhec.php');
}else{
	include('assets/mobile/home.php');
}

get_footer($device);
?>



