
	<section style="margin:0;" class="banner">
        <div class="container-fluid container-eixo banner-eixo">
            <div class="blue-banner">                
            </div>
        </div>                  
	</section>

	<section style="margin-top: -280px;" class="titulo-blog">
		<div class="container titulo">
			<h1>Unidades</h1>
		</div>
	</section>

<section style="    transform: translate(0%,-50%);" class="searchbar">
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

	<section style="margin-top: -80px;" class="box-exame-conteudo">
		<div class="container box-conteudo">

			<?php

            foreach ($the_query->posts as $key => $post) { 
			$link = str_replace('http://', 'https://', $post->guid);?>
			<div class="card-unidade">
				<img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
				<div class="unidade-conteudo">
					<div class="titulo-redes">
						<h3><?= $post->post_title;?></h3>
						<a href="<?php echo get_post_meta($post->ID, 'ico-facebook', true); ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/assets/images/fb2.png"></a>
						<a href="<?php echo get_post_meta($post->ID, 'ico-instagram', true); ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/assets/images/ig2.png"></a>
						<a href="<?php echo get_post_meta($post->ID, 'ico-linkedin', true); ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/assets/images/in2.png"></a>
					</div>
					<?=  $post->post_content ?>
					<div class="fone-btn">
						<div class="fone">
							<img src="<?php bloginfo('template_directory') ?>/assets/images/icon-fone.png"><p><?php echo get_post_meta($post->ID, 'fone', true); ?></p><br/>
							<img src="<?php bloginfo('template_directory') ?>/assets/images/icon-wpp.png"><p><?php echo get_post_meta($post->ID, 'whatsapp', true); ?></p>
						</div>
						<a href="<?= $link ?>"><button>CONHEÇA MAIS<br/> SOBRE A UNIDADE</button></a>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</section>