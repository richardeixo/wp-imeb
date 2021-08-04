<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<?php
/*
	Template Name: Blog
*/
?>
<?php 
	if (is_singular('unidades')) { 
		get_template_part( 'content', 'unidades' );
	} 
	else{ 
		get_template_part( 'content', 'default' );
	}
?>