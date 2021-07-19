<?php
/**
 * Template Name: Mobile Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('assets/desktop/home-m.php');
}else{
	include('assets/mobile/home-m.php');
}
?>