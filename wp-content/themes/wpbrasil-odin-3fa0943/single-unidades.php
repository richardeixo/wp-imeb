<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);


?>
<section style="margin:0;" class="banner">
        <div class="container-fluid container-eixo banner-eixo">
            <div class="blue-banner">                
            </div>
        </div>                  
    </section>

    <section style="margin-top: -320px;" class="titulo-blog">
        <div class="container titulo">
            <h1><?php the_title() ?></h1>
        </div>
    </section>
    <section style="transform: translate(0%,-50%);" class="searchbar">
        <div class="container container-search">
            <div class="quadrante-searchbar">
                <div class="conteudo-searchbar">
                    <div class="rowb esearch">
                        <div class="search">                            
                            <input type="text" class="searchTerm" placeholder="O que você procura?">
                            <button type="submit" class="searchButton">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/lupa.png" width="25px" class="img-eixo">
                            </button>
                         </div>
                    </div>
                    <div class="rowb">
                        <div class="botoes-baixos">
                            <a href="#"><button class="botao-procura">Resultados</button></a>
                            <a href="#"><button class="botao-procura">Convênios</button></a>
                            <a href="#"><button class="botao-procura">Unidades</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<article id="post-<?=the_ID();?>" <?php post_class(); ?>>
<section class="conteudo" style="margin-top: -110px;     margin-bottom: 50px;">
        <div class="primeira-camada">
            <img src="<?=get_the_post_thumbnail_url() ?>">
            <div class="textos">
                <p>
					<?= the_content();?>
				</p>
                <p>
                    <span>
                        <?php echo get_post_meta(get_the_ID(), 'fone', true); ?><br>
                    </span>
                    <span>
                        <?php echo get_post_meta(get_the_ID(), 'whatsapp', true); ?>
                    </span>
                </p>
            </div>            
        </div>
        <a href="#">
            <button class="primeira-camada-btn">AGENDE SEU EXAME</button>
        </a>
        <div class="segunda-camada">
            <div class="segundo-textos">
                <?php echo get_post_meta($post->ID, 'exames-horarios', true); ?>
            </div>
            <div class="map">
                <?php echo get_post_meta($post->ID, 'mapa', true); ?>
            </div>
        </div>
    </section>
	</article><!-- #post-## -->
<?php
get_footer($device);?>