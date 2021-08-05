<?php
/**
 * Template Name: Materiais Gratuitos
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

$args = array(
    'post_type'=> 'materiais',
    'order'    => 'ASC'
    );              

$the_query = new WP_Query( $args );




$args_medico = array(
    'post_type'=> 'materiaismedico',
    'order'    => 'ASC'
    );              

$the_query_medico = new WP_Query( $args_medico );

get_header($device); 

if ($device == "desktop") {
	include('assets/desktop/materiais-gratuitos.php');
}else{
	include('assets/desktop/materiais-m.php');
}

get_footer($device);
?>



