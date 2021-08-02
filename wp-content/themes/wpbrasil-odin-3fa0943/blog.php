<?php
/**
 * Template Name: Blog
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('assets/desktop/blog.php');
}else{
	include('assets/mobile/blog.php');
}
get_footer($device); 
?>