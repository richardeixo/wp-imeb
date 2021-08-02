<?php
/**
 * Template Name: Unidades lista
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/unidades-display1.php');
}else{
	include('assets/mobile/unidades-lista-m.php');
}

get_footer($device);
?>



