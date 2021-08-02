<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>




	<link rel="preconnect" href="https://fonts.gstatic.com">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/assets-custom/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/assets-custom/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-menu-m.css">

    <?php  if (is_page('Home')){ ?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-slider-m.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-searchbar-m.css">
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-exames-m.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-content-blog-m.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-depoimentos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php }?>
	
	<?php  if (is_page('Blog')){ ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-content-blog-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">
	<?php }?>

    <?php if (is_page('Materiais Gratuitos')) {?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/materiais-gratuitos/materiais-m.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/materiais-gratuitos/singlematerial.css">

    <?php } ?>
    <?php if (is_page('Unidades Lista')) {?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/unidades-listam.css">


<?php } ?>
<?php if (is_page('Unidades Single')) {?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/unidades-m.css">


<?php } ?>
<?php if (is_page('Single Exame')) {?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/single-exame/img-azul.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/single-exame/lowerbar.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/single-exame/tab-info-exames.css">


<?php } ?>
	<?php if (is_page('Fale Conosco')) {?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/ft-conosco/formd-m.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">


<?php } ?>
<?php if (is_page('Trabalhe Conosco')) {?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/ft-conosco/formd-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">

<?php } ?>
	<?php if (is_page('Corpo Clinico')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/corpo-clinico/corpo-clinco.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">
<?php } ?>

<?php if (is_page('Sobre')) {?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/sobre/sobre.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">
<?php } ?>
	
<?php if (is_page('Convenios')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/convenios/convenios.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/style-searchbar-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/unidades/titulo-azul.css">
<?php } ?>
	
	<?php if (is_page('Blog Exame')) {?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/blog-exame/style-blog-exame-m.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/single-exame/img-azul.css">
<?php } ?>
	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/mobile/css/home/style-lowerbar-m.css">


</head>


<body <?php body_class(); ?>>

<section class="menu-mobile">
       
      



    
       <nav class="navbar navbar-default">
           <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php home_url() ?>/Imeb/">
                   <img alt="Brand" src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" class="img-ico-menu-m">
                 </a>
               <a href="#"><button class="btn-menu-agendar">AGENDE SEU <br>EXAME</button></a>
             </div>
   
         
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
               
                       <div class="tabb">
                           <div class="panel with-nav-tabs panel-default">
                               <div class="panel-heading">
                                       <ul class="nav nav-tabs">
                                           <li class="active"><a href="#tab1default" data-toggle="tab">Cliente</a></li>
                                           <li><a href="#tab2default" data-toggle="tab">Médico</a></li>                                      
                                       </ul>
                               </div>
                               <div class="panel-body">
                                   <div class="tab-content">
                                       <div class="tab-pane fade in active" id="tab1default">
                                           <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-mobile',
            'depth' => 2,
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
            'walker' => new Odin_Bootstrap_Nav_walker()
        )
    );
?>
                                       </div>
   
                                       <div class="tab-pane fade in" id="tab2default">
                                           <ul class="nav navbar-nav">
                                               <li><a href="<?php home_url() ?>/Imeb/">Home</a></li>
                                               <li><a href="#">Agende</a></li>
                                               <li><a href="#">Exames</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/convenios">Convênios</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/unidades-lista">Unidades</a></li>
                                               <li><a href="#">Resultado de Exames</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/blog">Cuida da sua Saúde</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/fale-conosco">Fale Conosco</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/materiais-gratuitos">Materiais Gratuitos</a></li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
             </div>
</section>
