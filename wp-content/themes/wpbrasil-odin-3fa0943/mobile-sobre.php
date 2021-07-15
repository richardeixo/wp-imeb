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
	include('assets/desktop/sobre.html');
}else{
	include('assets/mobile/sobre.html');
}
?>


<h1>Este e o modelo do sobre</h1>
