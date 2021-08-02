<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); ?>
 <?php
while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section style="margin:0;" class="banner">
        <div class="container-fluid container-eixo banner-eixo">
            <div class="img-banner-blog" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">               
            </div>
        </div>                  
	</section>

	<section class="titulo-blog">
		<div class="container titulo">
			<h1><?= $post->post_title;?></h1>
		</div>
	</section>
	
	<section class="blog-exame">
		<div class="container box-conteudo-blog">
			<div class="conteudo-blog">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
</article>

<?php
endwhile;
function my_related_posts() {
$args = array('posts_per_page' => 3, 'post_in' => get_the_tag_list());
$the_query = new WP_Query( $args );?>

<section class="relacionados-blog">
		<div class="container box-conteudo c-relacionados">
			<p><center><strong>Conteúdos Relacionados</strong></center></p>
			<div class="img-relacionados">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<figure>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					<a href="<?php the_permalink(); ?>"><figcaption><?php the_title(); ?></figcaption></a>
				</figure>
			<?php endwhile; ?>
			</div>
		</div>
</section>
<?php
}
echo my_related_posts();
get_footer($device); ?>
