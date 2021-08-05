<section class="titulo-materiais">
        <h1>Unidades</h1>
    </section>
<section class="searchbar">
           <div class="container-fluid container-eixo">
               <div class="quadrante-searchbar">
                   <div class="conteudo-searchbar">
                       <div class="rowb esearch">
                           <div class="search">
                               <button type="submit" class="searchButton">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/images/lupa.png" class="img-eixo">
                                </button>
                               <input type="text" class="searchTerm" placeholder="O que você procura?">
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

       <section class="lista-unidades">
        <div class="conteudo">
            <?php

            foreach ($the_query->posts as $key => $post) { 
            $link = str_replace('http://', 'https://', $post->guid);?>
            <div class="primeira-camada">
                <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
                <div class="textos">
                    <p>
                        <span><?= $post->post_title;?></span>
                    </p>
                    <?=  $post->post_content ?>
                    <p>
                        <span>
                            <?php echo get_post_meta($post->ID, 'fone', true); ?><br>
                        </span>
                        <span>
                            <?php echo get_post_meta($post->ID, 'whatsapp', true); ?>
                        </span>
                    </p>
                </div>
                <a href="<?= $link ?>">
                    <button>CONHEÇA MAIS <br>SOBRE A UNIDADE</button>
                </a>
            </div>
            <?php } ?>
        </div>
        
    </section>
