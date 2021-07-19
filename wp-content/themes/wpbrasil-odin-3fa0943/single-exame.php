<?php
/**
 * Template Name: Single Exame
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/exame-especifico.php');
}else{
	include('assets/mobile/sobre.php');
}

get_footer($device);
?>



