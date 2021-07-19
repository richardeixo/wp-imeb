
	<script type="text/javascript">
		function cliente() {
    	document.getElementById("medico").style.display = "none";
    	document.getElementById("cliente").style.display = "flex";
    	document.getElementById("mat-cliente").classList.add("ativa-c");
    	document.getElementById("mat-cliente").classList.remove("inativa-c");
    	document.getElementById("mat-medico").classList.remove("ativa-m");
    	document.getElementById("mat-medico").classList.add("inativa-m");
    }
    function medico() {
    	document.getElementById("medico").style.display = "flex";
    	document.getElementById("cliente").style.display = "none";
    	document.getElementById("mat-cliente").classList.add("inativa-c");
    	document.getElementById("mat-cliente").classList.remove("ativa-c");
    	document.getElementById("mat-medico").classList.remove("inativa-m");
    	document.getElementById("mat-medico").classList.add("ativa-m");
    }
	</script>


	<section style="margin:0;" class="banner">
        <div class="container-fluid container-eixo banner-eixo">
            <div class="blue-banner">                
            </div>
        </div>                  
	</section>

	<section style="margin-top: -320px;" class="titulo-blog">
		<div class="container titulo">
			<h1>Materiais Gratuitos</h1>
		</div>
	</section>

	<section class="blog-exame">
		<div class="container box-conteudo-blog box-materiais">

			<div class="mat-climed">
				<ul>
					<li><button id="mat-cliente" class="ativa-c" onclick="cliente()">Cliente</button></li>
					<li><button id="mat-medico" class="inativa-m" onclick="medico()">Médico</button></li>
				</ul>
			</div>

			<div class="cards fadeIn" id="cliente">
				<div class="card-material">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/02-tenho-cancer.png">
					<div class="txt-material">
						<p><strong>O novo Coronavírus</strong></p>
						<p>O novo coronavírus pegou
						todo mundo de surpresa.
						Como ele surgiu? Como
						somos infectados? Por que
						ele leva à morte? O que fazer

						se eu estiver com os sinto-
						mas? Baixe a Cartilha e tire

						todas as principais dúvidas
						sobre essa pandemia.</p>
					</div>
				</div>
				<div class="card-material">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/02-tenho-cancer.png">
					<div class="txt-material">
						<p><strong>O novo Coronavírus</strong></p>
						<p>O novo coronavírus pegou
						todo mundo de surpresa.
						Como ele surgiu? Como
						somos infectados? Por que
						ele leva à morte? O que fazer

						se eu estiver com os sinto-
						mas? Baixe a Cartilha e tire

						todas as principais dúvidas
						sobre essa pandemia.</p>
					</div>
				</div>
				<div class="card-material">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/02-tenho-cancer.png">
					<div class="txt-material">
						<p><strong>O novo Coronavírus</strong></p>
						<p>O novo coronavírus pegou
						todo mundo de surpresa.
						Como ele surgiu? Como
						somos infectados? Por que
						ele leva à morte? O que fazer

						se eu estiver com os sinto-
						mas? Baixe a Cartilha e tire

						todas as principais dúvidas
						sobre essa pandemia.</p>
					</div>
				</div>
			</div>

			<div class="cards fadeIn" id="medico">
				<div class="card-material">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/02-tenho-cancer.png">
					<div class="txt-material">
						<p><strong>O novo Coronavírus</strong></p>
						<p>O novo coronavírus pegou
						todo mundo de surpresa.
						Como ele surgiu? Como
						somos infectados? Por que
						ele leva à morte? O que fazer

						se eu estiver com os sinto-
						mas? Baixe a Cartilha e tire

						todas as principais dúvidas
						sobre essa pandemia.</p>
					</div>
				</div>
				<div class="card-material">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/02-tenho-cancer.png">
					<div class="txt-material">
						<p><strong>O novo Coronavírus</strong></p>
						<p>O novo coronavírus pegou
						todo mundo de surpresa.
						Como ele surgiu? Como
						somos infectados? Por que
						ele leva à morte? O que fazer

						se eu estiver com os sinto-
						mas? Baixe a Cartilha e tire

						todas as principais dúvidas
						sobre essa pandemia.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

