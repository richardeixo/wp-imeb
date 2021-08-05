       <section class="slider">
           <div class="container-fluid container-eixo slider-eixo">  
   
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   
   
       <section class="slider">
           <div class="container-fluid container-eixo slider-eixo">  
   
   
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         
                   <!-- Wrapper for slides -->
                   <div class="carousel-inner" role="listbox">
           <?php
      $c_slide = 0;
            foreach ($the_query->posts as $key => $post) { 
          if($c_slide == 0){?>
                    <div class="item active">
                        <div class="objeto-slider" style="background: linear-gradient(
0deg
, rgba(49,113,183,1) 0%, rgba(49,113,183,0) 100%), url(<?=get_the_post_thumbnail_url($post->ID) ?>);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
                            <div class="texto-slider">
                                <h1>
                                    <?= $post->post_title;?>
                                </h1>
                                <p>
                                    <?=  $post->post_content ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
            }else{?>
          <div class="item">
                        <div class="objeto-slider" style="background: linear-gradient(
0deg
, rgba(49,113,183,1) 0%, rgba(49,113,183,0) 100%), url(<?=get_the_post_thumbnail_url($post->ID) ?>);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
                            <div class="texto-slider">
                                <h1>
                                    <?= $post->post_title;?>
                                </h1>
                                <p>
                                    <?=  $post->post_content ?>
                                </p>
                            </div>
                        </div>
                    </div>  
      <?php   }
        $c_slide++;
      }
            ?>  
       
                   </div>
                   
               </div>
               
           </div>
       </section>
   
       <section class="searchbar">
           <div class="container-fluid container-eixo">
               <div class="quadrante-searchbar">
                   <div class="conteudo-searchbar">
                       <div class="rowb esearch">
                           <div class="search">
                               <button type="submit" class="searchButton">
                                   <img src="./assets/imagens/searchbar/lupa.png" class="img-eixo">
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
   
   
       <section class="exames">
           <div class="conteudo-exame">
               <div class="container-fluid container-eixo">
                   <div class="titulo-exame">
                       <h2>EXAMES</h2>
                   </div>
                   <div class="icones-exames">
                       <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/ecografia1.png" class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/cintilografia1.png"  class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/densitometria1.png"  class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/mamografia1.png"  class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/pet1.png"  class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/ressonancia1.png"  class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/tomografia.png"  class="img-eixo-exames"/>
      <img src="<?php bloginfo('template_directory') ?>/assets/images/exames/suite.png"  class="img-eixo-exames"/>
                   </div>
               </div>
           </div>
       </section>
   
       <section class="conteudo-blog-m">
           <h2>CONTEÚDOS DA SAÚDE</h2>
           <div class="conteudo-hidden">
               <div class="cards-conteudo">
                   <div class="card-conteudo conteudo-img">
                       <div class="texto-conteudo">
                           <h3>Como é feito um diagnóstico de câncer? É possível dar falso positivo?</h3>
                           <a href="<?php home_url() ?>/Imeb/blog-exame/"><button>Ver mais</button></a>
                       </div>
                   </div>
   
                   <div class="card-conteudo conteudo-img2">
                       <div class="texto-conteudo">
                           <h3>Como escolher um oncologista?</h3>
                           <a href="<?php home_url() ?>/Imeb/blog-exame/"><button>Ver mais</button></a>
                       </div>
                   </div>
   

   
   
   
               </div>            
           </div>
   
   
           <div class="conteudo-hidden">
               <div class="cards-conteudo">
                   <div class="card-conteudo conteudo-img3">
                       <div class="texto-conteudo">
                           <h3>Como é feito o exame de PET/CT?</h3>
                           <a href="<?php home_url() ?>/Imeb/blog-exame/"><button>Ver mais</button></a>
                       </div>
                   </div>
   
                   <div class="card-conteudo conteudo-img4">
                       <div class="texto-conteudo">
                           <h3>O que detecta o exame de PET-CT?</h3>
                           <a href="<?php home_url() ?>/Imeb/blog-exame/"><button>Ver mais</button></a>
                       </div>
                   </div>
   

   
   
               </div>
   
               
           </div>
   
           <div class="conteudo-hidden">
               <div class="cards-conteudo">
                   <div class="card-conteudo-video">
                       <iframe width="315" height="200" src="https://www.youtube.com/embed/P8A2iXI2JdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
   
                   <div class="card-conteudo-video">
                       <iframe width="315" height="200" src="https://www.youtube.com/embed/8DcgDBVjW_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
   
                   <div class="card-conteudo-video">
                       <iframe width="315" height="200" src="https://www.youtube.com/embed/GVoyZJW6JD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
   
   
   
               </div>
   
               
           </div>
   
       </section>
   <section class="depoimentos">
    	<div class="container">
    		<h1>DEPOIMENTOS DE NOSSOS CLIENTES</h1>
    		<div class="depoimento-full">
          <?php

            foreach ($the_query_depo->posts as $key => $post) { ?>
	    		
	    		<div class="card-depoimento">
            <div class="col-img">
            <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
            </div>
            <div class="col-txt">
            <p class="texto"><?=  $post->post_content ?></p>
            <strong><?= $post->post_title;?></strong>
            <div class="rating-stars">
            <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          </div>
          </div>
          </div>
	    		<?php } ?>

	    		</div>
    	</div>
    </section>
       <div class="espaco">
   
       </div>

   
   