<?php
$args = array(
    'post_type'=> 'corpo-clinico',
    'order'    => 'ASC'
    );    
$the_query = new WP_Query( $args );
?>
<section style="margin:0;" class="banner">
        <div class="container-fluid container-eixo banner-eixo">
            <div class="blue-banner">                
            </div>
        </div>                  
    </section>

    <section style="margin-top: -320px;" class="titulo-blog">
        <div class="container titulo">
            <h1>Corpo Clínico</h1>
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
    <div style="margin-top: -80px; margin-bottom: 60px;" class="conteudo">
        <h2 class="titulo-corpo">NOSSO CORPO CLÍNICO</h2>
		<div class="card-doutores">
		<?php

            foreach ($the_query->posts as $key => $post) { ?>
        
            <div class="card-dr">
                <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
                <div class="texto-dr">
                    <h2><?= $post->post_title;?></h2>
                    <?=  $post->post_content ?>
                </div>
            </div>
            
        
        <?php
            }
          	?>
			</div>
    </div>
