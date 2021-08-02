<section class="newsletter">
		<div class="coluna-txt">
			<h1>DICAS DE SAÚDE</h1>
			<span>Receba Dicas de Saúde Atualizadas</span>
 			<div class="campo-txt">
				<input type="text" name="" placeholder="Digite seu email"><button style="margin-left: 2px;" type="button">Enviar</button>
			</div>
 		</div>
   		<div class="coluna-img">
   			<img src="<?php bloginfo('template_directory') ?>/assets/images/img-news.png">
   		</div>
</section>
<footer>
    	<div class="container-fluid branco">
    	<div class="container espaco-f">
    		<div class="footer-info">  		
    			<img src="<?php bloginfo('template_directory') ?>/assets/images/logo.png">
    			<nav class="f-menu">
				<?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu-1',
            'depth' => 2,
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>
				</nav>
			</div>

			<div class="footer-menu">  		
    			<div class="footer-esq">
					<div class="f-rsociais">
						<a href="https://www.facebook.com/clinicaimeb/" target="_blank"><div class="f-ico-fb"></div></a>
						<a href="https://www.instagram.com/clinicaimeb/" target="_blank"><div class="f-ico-ig"></div></a>
						<a href="https://www.linkedin.com/company/clinicaimeb/" target="_blank"><div class="f-ico-in"></div></a>
					</div>
					<h1>CENTRAL DE ATENDIMENTO</h1>
					<p><img style="margin-right: 10px; width: 19px;" src="<?php bloginfo('template_directory') ?>/assets/images/icon-fone.png">(61) 3326 0033 | 3771 3800</p>
					<p><img style="margin-right: 10px; width: 19px;" src="<?php bloginfo('template_directory') ?>/assets/images/icon-wpp.png">(61) 9976-4074</p>
					<button type="button" class="btn btn-primary btn-agende">AGENDE <br/>SEU EXAME</button>
				</div>
				<div class="widgets">
				<div class="widget-um">
					<?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu-2',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'menu-footer-link f-coluna-1',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>
				</div>

				<div class="widget-dois">
					<?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu-3',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'menu-footer-link f-coluna-2',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>
				</div>

				<div class="widget-tres">
					<?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu-4',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'menu-footer-link',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>
					</div>
				</div>
			</div>
    	</div>
    	</div>
    	<div class="container espaco-f">
    		<h1>ENDEREÇOS</h1>
    		<div class="enderecos">
    			<div class="col-md-3">
    				<p><strong>Centro Clínico Sul</strong></p>
    					<p style="margin-bottom: 0"><i>Torre I</i></p>
						<p style="margin-top: 0">SHLS 716 conj. L, Centro Clínico Sul Torre I
						salas T121/124, Brasília- DF – CEP: 70390-700</p>
						<p style="margin-bottom: 0"><i>Torre II (Tomografia)</i></p>
						<p style="margin-top: 0">SHLS 716 conj. L, Centro Clínico Sul Torre II
						sala T223, Brasília- DF – CEP: 70390-700</p>
						<p style="margin-bottom: 0"><i>Torre II (Medicina Nuclear)</i></p>
						<p style="margin-top: 0">SHLS 716 conj. L, Centro Clínico Sul Praça da
						Saúde sala W162, Brasília- DF – CEP: 70390-700</p>
    			</div>
    			<div class="col-md-3">
    				<p><strong>Vitrium Centro Médico</strong></p>
    				<p>SGAS 915 lote 69a e 70a salas 301 e 303, Brasília- DF – CEP: 70715-900</p>
    				<p>L2 Sul SGAS Quadra 614 Conjunto C Lote 99 Salas 12 a 15, Brasília – DF CEP: 70200-730</p>
    				<p style="margin-top: 60px;"><strong>Asa Norte Edifício Dr Crispim</strong></p>
    				<p>SMHN Quadra 02 Conjunto C Sobreloja 18, Próximo ao Hospital HRAN, Brasília – DF CEP: 70710-100</p>

    			</div>
    			<div class="col-md-3">
    				<p><strong>M Norte</strong></p>
    				<p>SDE Quadra 1 conjunto A lote 2 CEP:72145-101</p>
    				<p style="margin-top: 30px"><strong>Taguatinga</strong></p>
    				<p>Centro de Excelência Anchieta, Área Especial 10, Setor C Norte loja 02. Taguatinga,DF – CEP: 72115-700</p>
    				<p style="margin-top: 30px"><strong>Edifício Buriti</strong></p>
    				<p>CLN 116, Bloco H Edifício Buriti loja 33.
Brasília- DF – CEP: 70773-580</p>
    			</div>
    			<div class="col-md-3">
    				<p><strong>Centro Clínico Advance</strong></p>
    				<p>SGAS 915 lote 69a e 70a salas 301 e 303,
Brasília- DF – CEP: 70715-900</p>
					<p style="margin-top: 30px"><strong>Gama</strong></p>
    				<p>Quadra EQ 47-49 Projeção 4,
St. Central, 2º andar, ao lado
do Hospital do Gama,
DF – CEP: 72405-499</p>

    			</div>
    		</div>
    	</div>
    	<div class="container-fluid azul">
    		<div class="container">
    			<div class="footer-bottom">
    			<div class="copyright">
    				<span>Imeb - <?php echo date("Y"); ?> | Copyright</span>
    				<span>Responsável Técnico: Alaor Barra Sobrinho - CRM-DF 3029</span>
    			</div>
    			<div class="eixo">
					Powered By: <a href="https://eixo.digital/"><img src="<?php bloginfo('template_directory') ?>/assets/images/eixo-logo.png"></a>
    			</div>
    			</div>
    		</div>
    	</div>
    </footer>
     <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.js"></script>