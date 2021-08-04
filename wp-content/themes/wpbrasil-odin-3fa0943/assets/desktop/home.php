<?php
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
?>
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
                        <div class="objeto-slider">
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
                        <div class="objeto-slider">
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
			<?php		}
				$c_slide++;
			}
          	?>
                  
    
                </div>
                <div class="container control-slider">
                	<div class="control-left">
		                <a  href="#carousel-example-generic" role="button" data-slide="prev">
						    <span style="color:#fff"><img width="30px" src="<?php bloginfo('template_directory') ?>/assets/images/c-left.png"></span>
					  	</a>
				  	</div>

				  	<div class="control-dots ">
				  		<ol class="c-dots carousel-indicators">
							<?php $i = 0;
							while ($i < $count) {
								echo '<li data-target="#carousel-example-generic" data-slide-to=" ',$i,' "></li>';
								$i++;
							}
							?>
				  		</ol>
				  	</div>

				  	<div class="control-right">
					    <a href="#carousel-example-generic" role="button" data-slide="next">
						    <span style="color:#fff"><img width="30px" src="<?php bloginfo('template_directory') ?>/assets/images/c-right.png"></span>
						</a>
					</div>
            	</div>
        	</div>
            
        </div>
</section>

<section class="searchbar">
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

<section style="margin-top: -200px;" class="exames">
	<div class="container">
		<h1 class="titulo-exames">EXAMES</h1>
		<div class="box-img-exames">
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/ecografia1.png" class="img-exames" />
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/cintilografia1.png"  class="img-exames"/>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/densitometria1.png"  class="img-exames"/>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/mamografia1.png"  class="img-exames"/>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/pet1.png"  class="img-exames"/>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/ressonancia1.png"  class="img-exames"/>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/tomografia.png"  class="img-exames"/>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/exames/suite.png"  class="img-exames"/>
		</div>
		<br/>
	</div>
</section>

<section class="conteudo-blog">
	<div class="container">
        <h1>CONTEÚDOS DA SAÚDE</h1>
        <div class="row">
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


        <div class="row">
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

        <div class="row">
            <div class="cards-conteudo">
                <div class="card-conteudo-video">
                    <iframe width="545" height="250" src="https://www.youtube.com/embed/P8A2iXI2JdM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="card-conteudo-video">
                    <iframe width="545" height="250" src="https://www.youtube.com/embed/kgHeTzudDnI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

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

    <section class="unidades">

    	<div class="container">
			<h1>UNIDADES</h1>
    		<div class="col-md-5 col-unidades">
    			<button class="btn-unidades" >Centro Clínico Sul</button>
    			<button class="btn-unidades" >Centro Clínico Advance</button>
    			<button class="btn-unidades" >Vitrium Centro Médico</button>
    			<button class="btn-unidades" >Asa Norte Edifício Dr Crispim</button>
    			<button class="btn-unidades" >Edifício Buriti</button>
    			<button class="btn-unidades" >Taguatinga</button>
    			<button class="btn-unidades" >M Norte</button>
    			<button class="btn-unidades" >Gama</button>
    		</div>    		

    		<div class="col-md-7 col-mapa">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14869.329050573284!2d-50.33824953017947!3d-21.29788353040526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949615ee674ee3d9%3A0xe469fb0352a8168!2sSuper%20Muffato%20-%20Birigui!5e0!3m2!1spt-BR!2sbr!4v1623898042742!5m2!1spt-BR!2sbr" width="100%" height="288" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    		</div>   

    	</div>
    </section>

