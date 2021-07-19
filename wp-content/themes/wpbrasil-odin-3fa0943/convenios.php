<?php
/**
 * Template Name: Convenios
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/convenios.php');
}else{
	include('assets/mobile/convenios-m.php');
}

get_footer($device);
?>



