<?php
/**
 * Template Name: Mobile Sobre
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/sobre.php');
}else{
	include('assets/mobile/sobre.php');
}
?>



