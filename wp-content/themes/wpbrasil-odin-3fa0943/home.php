<?php
/**
 * Template Name: Desktop Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 

$args = array(
    'post_type'=> 'slider',
    'order'    => 'ASC'
    );    
$the_query = new WP_Query( $args );
$count = $the_query->found_posts;
?>
<?php
$args1 = array(
    'post_type'=> 'depoimentos',
    'order'    => 'ASC'
    );    
$the_query_depo = new WP_Query( $args1 );


if ($device == "desktop") {
	include('assets/desktop/home.php');
}else{
	include('assets/mobile/home-m.php');
}

get_footer($device);
?>



