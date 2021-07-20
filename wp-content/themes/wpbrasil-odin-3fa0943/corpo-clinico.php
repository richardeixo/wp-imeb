<?php
/**
 * Template Name: Corpo Clinicoaa
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('assets/desktop/corpo-clinico.php');
}else{
	include('assets/mobile/corpo-clinico-m.php');
}
get_footer($device); 
?>