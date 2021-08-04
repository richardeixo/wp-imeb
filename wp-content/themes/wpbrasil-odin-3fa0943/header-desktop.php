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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/unidades-desk.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-newsletter.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-unidades-home.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-footer.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-slide.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-depoimentos.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-searchbar.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-materiais.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames-banner.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-blog-exame.css">
<?php  if (is_page('Sobre')){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/sobre-desk.css">
<?php }?>
<?php if (is_page('Single Exame')) {?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames-banner.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames-titulo.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames-conteudo.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames-orientacao.css">
<?php } ?>
<?php if (is_page('Blog Exame')) {?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-blog-exame.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-exames-banner.css">
<?php } ?>
<?php if (is_page('Materiais Gratuitos')) { ?>
	
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-materiais.css">
<?php } ?>
<?php if (is_page('Materiais Single')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-materiais-single.css">
<?php } ?>
<?php if (is_page('Unidades Display')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-unidades.css">
<?php } ?>
<?php if (is_page('Unidades Display2')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-unidades-geral.css">
<?php } ?>
<?php if (is_page('Corpo Clinico')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/corpo-clinco.css">
<?php } ?>
<?php if (is_page('Fale Conosco')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/formd-d.css">
<?php } ?>
<?php if (is_page('Trabalhe Conosco')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/formd-d.css">
<?php } ?>
<?php if (is_page('Blog')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/blog-grid-azul.css">
<?php } ?>
<?php if (is_page('Convenios')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/convenios.css">
<?php } ?>
	
	<?php if (is_page('Unidades Single')) { ?>
	
<?php } ?>
	
	<?php if (is_page('Unidades Lista')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/desktop/css/style-unidades.css">
<?php } ?>
	
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
				<a href="<?php home_url() ?>/Imeb/"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" /></a>
				<div class="tab-climed">
					<ul>
						<li><button id="btn-cliente" class="ativa" onclick="cliente()">Cliente</button></li>
						<li><button id="btn-medico" class="inativa" onclick="medico()">Médico</button></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 top-right">
				<div class="rsociais">
					<a href="https://www.facebook.com/clinicaimeb/" target="_blank"><div class="ico-fb"></div></a>
					<a href="https://www.instagram.com/clinicaimeb/" target="_blank"><div class="ico-ig"></div></a>
					<a href="https://www.linkedin.com/company/clinicaimeb/" target="_blank"><div class="ico-in"></div></a>
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
				<?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>

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
					<a href="<?php home_url() ?>/Imeb/single-exame/">Cervical</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Bolsa escrotal</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Fossa clavicular</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Paratireóide</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Parede abdominal</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Parótica</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Próstata via abdominal</a>
					<button class="btn-drop" type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Cintilografia</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Metaiodobenzilguanidina</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Tireoide com captação</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Paratireoides</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Fígado e baço</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Perfusão Cerebral</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Fígado e Vias Biliares</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/#">Miocárdica</a>
					<button class="btn-drop" type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Mamografia</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Com contraste</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Por Ecografia</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Por mamografia</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Digital de Campo Total</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Por Ecografia</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Por mamografia</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Por Ressonância Magnética</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Ressonância Magnética</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Colangioressonância</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Enteroressonância</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Articulação Coxo-femoral</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Articulação Sacro-Ilíaca</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Articulação temporomandibular</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Coluna</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Coxa</a>
					<button class="btn-drop" type="button">VER TODOS</button>
				</div>

				<div class="coluna">
					<span class="title-exam">Tomografia Computadorizada</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Mastóide</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Órbitas</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Abdome total</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Crânio</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Tórax</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Seios da face</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Densitometria Óssea</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Coluna, Fêmur e Antebraço ou Rádio Distal</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Corpo Inteiro</a>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Vertebral ou LVA</a>
				</div>

				<div class="coluna">
					<span class="title-exam">Suíte Terapêutica</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">Suíte Terapêutica</a>
				</div>

				<div class="coluna">
					<span class="title-exam">PET-CT</span>
					<a href="<?php home_url() ?>/Imeb/single-exame/">PET-CT</a>
				</div>

			</div>
		</div>
	</div>
</div>

