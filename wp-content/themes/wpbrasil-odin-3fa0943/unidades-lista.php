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

$args = array(
    'post_type'=> 'unidades',
    'order'    => 'ASC'
    );    
$the_query = new WP_Query( $args );

if ($device == "desktop") {
	include('assets/desktop/unidades-display1.php');
}else{
	include('assets/mobile/unidades-lista-m.php');
}

get_footer($device);
?>



