<?php
/**
 * Template Name: Unidades Single
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/unidades-single.php');
}else{
	include('assets/mobile/unidades-single-m.php');
}

get_footer($device);
?>



