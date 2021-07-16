<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/header.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-content-blog.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-newsletter.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-unidades-home.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-footer.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-slide.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-depoimentos.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-searchbar.css">
<?php  if (is_page('Sobre')){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/sobre-desk.css">
<?php }?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	var visibilidade = false;
	function ocultarExibir() { // Quando clicar no botão.

        if (visibilidade) {//Se a variável visibilidade for igual a true, então...
            document.getElementById("drop-exames").style.display = "none";//Ocultamos a div
            document.getElementById("img-exam").classList.add("img-ativa");
            visibilidade = false;//alteramos o valor da variável para falso.
        } else {//ou se a variável estiver com o valor false..
            document.getElementById("drop-exames").style.display = "block";//Exibimos a div..
            document.getElementById("img-exam").classList.remove("img-ativa");
            visibilidade = true;//Alteramos o valor da variável para true.
        }
    }
    function cliente() {
    	document.getElementById("menu-medico").style.display = "none";
    	document.getElementById("menu-cliente").style.display = "block";
    	document.getElementById("btn-cliente").classList.add("ativa");
    	document.getElementById("btn-cliente").classList.remove("inativa");
    	document.getElementById("btn-medico").classList.remove("ativa");
    	document.getElementById("btn-medico").classList.add("inativa");
    }
    function medico() {
    	document.getElementById("menu-medico").style.display = "block";
    	document.getElementById("menu-cliente").style.display = "none";
    	document.getElementById("btn-cliente").classList.add("inativa");
    	document.getElementById("btn-cliente").classList.remove("ativa");
    	document.getElementById("btn-medico").classList.remove("inativa");
    	document.getElementById("btn-medico").classList.add("ativa");
    }
     function clientem() {
    	document.getElementById("menu-medico-m").style.display = "none";
    	document.getElementById("menu-cliente-m").style.display = "block";
    	document.getElementById("btn-cliente-m").classList.add("ativa-m");
    	document.getElementById("btn-cliente-m").classList.remove("inativa-m");
    	document.getElementById("btn-medico-m").classList.remove("ativa-m");
    	document.getElementById("btn-medico-m").classList.add("inativa-m");
    }
    function medicom() {
    	document.getElementById("menu-medico-m").style.display = "block";
    	document.getElementById("menu-cliente-m").style.display = "none";
    	document.getElementById("btn-cliente-m").classList.add("inativa-m");
    	document.getElementById("btn-cliente-m").classList.remove("ativa-m");
    	document.getElementById("btn-medico-m").classList.remove("inativa-m");
    	document.getElementById("btn-medico-m").classList.add("ativa-m");
    }
    /* Open the sidenav */
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</head>
<body>
	<div class="menu-fixo">
	<div class="container-fluid branco">
	<div class="container top">
		<div class="row top-bar">
			<div class="col-md-6 top-left">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" />
				<div class="tab-climed">
					<ul>
						<li><button id="btn-cliente" class="ativa" onclick="cliente()">Cliente</button></li>
						<li><button id="btn-medico" class="inativa" onclick="medico()">Médico</button></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 top-right">
				<div class="rsociais">
					<a href="#"><div class="ico-fb"></div></a>
					<a href="#"><div class="ico-ig"></div></a>
					<a href="#"><div class="ico-in"></div></a>
				</div>
				<button type="button" class="btn btn-primary btn-agende">AGENDE <br/>SEU EXAME</button>
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid nav-bar">
		<div class="container">
			<button class="btn-exames" onclick="ocultarExibir()"> <img width="10px" id="img-exam" class="img-ativa" src="<?php bloginfo('template_directory') ?>/assets/images/down.svg">Exames</button>

			<nav class="menu menu-cliente" id="menu-cliente">
				<ul>
					<li><a href="#">Convênios</a></li>
					<li><a href="#">Resultado de Exames</a></li>
					<li><a href="#">Unidades</a></li>
					<li><a href="#">Cuide da sua Saúde</a></li>
					<li><a href="#">Fale Conosco</a></li>
					<li><a href="#">Materiais Gratuitos</a></li>
				</ul>
			</nav>

			<nav class="menu menu-medico" id="menu-medico">
				<ul>
					<li><a href="#">Médico</a></li>
					<li><a href="#">Médico 2</a></li>
					<li><a href="#">Médico 3</a></li>
				</ul>
			</nav>
			<div class="drop-exames" id="drop-exames">

				<div class="coluna">
					<span class="title-exam">Ecografia</span>
					<a href="#">Cervical</a>
					<a href="#">Bolsa escrotal</a>
					<a href="#">Fossa clavicular</a>
					<a href="#">Paratireóide</a>
					<a href="#">Parede abdominal</a>
					<a href="#">Parótica</a>
					<a href="#">Próstata via abdominal</a>
					<button class="btn-drop" type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Cintilografia</span>
					<a href="#">Metaiodobenzilguanidina</a>
					<a href="#">Tireoide com captação</a>
					<a href="#">Paratireoides</a>
					<a href="#">Fígado e baço</a>
					<a href="#">Perfusão Cerebral</a>
					<a href="#">Fígado e Vias Biliares</a>
					<a href="#">Miocárdica</a>
					<button class="btn-drop" type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Mamografia</span>
					<a href="#">Com contraste</a>
					<a href="#">Por Ecografia</a>
					<a href="#">Por mamografia</a>
					<a href="#">Digital de Campo Total</a>
					<a href="#">Por Ecografia</a>
					<a href="#">Por mamografia</a>
					<a href="#">Por Ressonância Magnética</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Ressonância Magnética</span>
					<a href="#">Colangioressonância</a>
					<a href="#">Enteroressonância</a>
					<a href="#">Articulação Coxo-femoral</a>
					<a href="#">Articulação Sacro-Ilíaca</a>
					<a href="#">Articulação temporomandibular</a>
					<a href="#">Coluna</a>
					<a href="#">Coxa</a>
					<button class="btn-drop" type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Tomografia Computadorizada</span>
					<a href="#">Mastóide</a>
					<a href="#">Órbitas</a>
					<a href="#">Abdome total</a>
					<a href="#">Crânio</a>
					<a href="#">Tórax</a>
					<a href="#">Seios da face</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Densitometria Óssea</span>
					<a href="#">Coluna, Fêmur e Antebraço ou Rádio Distal</a>
					<a href="#">Corpo Inteiro</a>
					<a href="#">Vertebral ou LVA</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Suíte Terapêutica</span>
					<a href="#">Suíte Terapêutica</a>
				</div>

				<div class="coluna">
					<span class="title-exam">PET-CT</span>
					<a href="#">PET-CT</a>
				</div>

			</div>
		</div>
	</div>
</div>

