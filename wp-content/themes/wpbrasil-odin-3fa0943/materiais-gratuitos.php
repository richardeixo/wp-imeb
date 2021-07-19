<?php
/**
 * Template Name: Materiais Gratuitos
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/materiais-gratuitos.php');
}else{
	include('assets/mobile/sobre.php');
}

get_footer($device);
?>



