<?php
/**
 * Template Name: Unidades Display 2
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/unidades-display2.php');
}else{
	include('assets/mobile/sobre.php');
}

get_footer($device);
?>