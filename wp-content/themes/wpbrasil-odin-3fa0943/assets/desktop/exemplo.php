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

<html class="no-js resolved" <?php language_attributes(); ?>>

<head>
<!-- Pinterest -->
	<meta name="p:domain_verify" content="2c97d0568b3657d2dbed4479b6c6ea5a"/>	
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2616585998662543');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2616585998662543&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->  
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-54227634-44"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-54227634-44');
</script>


<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/92939503-45dc-48cb-83ef-176c9aeb9385-loader.js" ></script>

 <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-57x57.png">

 <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-60x60.png">

 <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-72x72.png">

 <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-76x76.png">

 <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-114x114.png">

 <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-120x120.png">

 <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-144x144.png">

 <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-152x152.png">

 <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/assets/favicon/apple-icon-180x180.png">

 <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory') ?>/assets/favicon/android-icon-192x192.png">

 <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/assets/favicon/favicon-32x32.png">

 <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory') ?>/assets/favicon/favicon-96x96.png">

 <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/assets/favicon/favicon-16x16.png">

 <link rel="manifest" href="<?php bloginfo('template_directory') ?>/assets/favicon/manifest.json">

 <meta name="msapplication-TileColor" content="#ffffff">

 <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory') ?>/assets/favicon/ms-icon-144x144.png">

 <meta name="theme-color" content="#ffffff">





	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/home.css">

    

    <?php 

    if (is_singular('cases')){ ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/cases.css">

    <?php } 
    if (is_singular('materiais')) {
?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/materiais.css">

    <?php
  }
    if(is_home()){?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/blog.css">

    <?php } ?>

    <?php

    if(is_single()){?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/single.css">

    <?php } ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/sobre.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php if ( ! get_option( 'site_icon' ) ) : ?>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />

  <?php endif; ?>

  <?php wp_head(); ?>
 <script id="navegg" type="text/javascript" src="https://tag.navdmp.com/tm48547.js"></script>

  <style type="text/css">
    
    #searchform .input-group{
      width:100%;
    }

    .btn-default{
      width:100%;
    }

    .navbar-collapse .navbar-nav{
      float: right;
    }

     @media only screen and (max-width: 767px) and (min-width: 20px){
        .navbar-brand{
          margin-right: 15em;
        }

        .navbar-collapse .navbar-nav{
          float: left !important;
        }
     }

     .title-blog{
        padding-left: 2em;
     }

     .category main .row > .col-lg-4{
        margin-bottom: 30px;
      }

      .blog #content .col-lg-4 {
        margin-bottom: 30px;
      }

      .blog #content .col-lg-4 article {
          height: 100%;
          background: #FFF;
          position: relative;
      }

      .search #searchform {
        padding: 0px 0px !important;
      }

      .search #content .col-lg-4 {
        margin-bottom: 30px;
      }

      .search #content .col-lg-4 article {
        height: 100%;
        background: #FFF;
        position: relative;
      }

      .blog .row, .search .row, .category .row{
        padding-left: 1em;
        padding-right: 1em;
      } 

  </style>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2540600122623288');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2540600122623288&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


	
	
	<script>
var _ttq = _ttq || [];
_ttq.push(["_setAccount", "TT-13712-0"]);
(function () {
var ts = document.createElement("script");
ts.type = "text/javascript";
ts.async = true;
ts.src = ("https:" == document.location.protocol ? "https://" : "http://") + "d.tailtarget.com/base.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(ts, s);
})();
</script>
	
	
	
	
	<script id="navegg" type="text/javascript">
 (function(n,v,g){o="Navegg";if(!n[o]){
   a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
   b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){
   n[o].q=n[o].q||[];n[o].q.push([this, parms])};}})
 (window, document, 'https://tag.navdmp.com/universal.min.js');
 window.naveggReady = window.naveggReady||[];
 window.nvg58877 = new Navegg({
   acc: 58877
 });
</script>
</head>


<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ8WTXT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <nav class="navbar navbar-expand-lg navbar-light navinterno">

            <div class="container" style="" >

               <a class="navbar-brand" href="<?php bloginfo('url') ?>"><img title=Logo style="margin-left: 2em;" src="<?php bloginfo('template_directory') ?>/assets/img/Vector-Smart-Object.png" alt=EixoDigital class="img-fluid"></a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                  <span class="navbar-toggler-icon"></span>

               </button>

               <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-navbar" style="">

                     <li class="nav-item active">

                        <a class="nav-link text-uppercase" href="<?php bloginfo('url') ?>">Home <span class="sr-only">(current)</span></a>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link text-uppercase" href="<?php bloginfo('url') ?>/sobre">Sobre Nós</a>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link text-uppercase" href="<?php bloginfo('url') ?>/cases">Cases</a>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link text-uppercase" href="<?php bloginfo('url') ?>/materiais">Materiais</a>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link text-uppercase" href="<?php bloginfo('url') ?>/blog">Blog</a>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link text-uppercase" id="contatos" href="/#contato">Contato</a>

                     </li>

                     <li class="nav-item button faleconoscobtn">

                        <a class="nav-link text-uppercase" href="https://materiais.eixo.digital/fale-com-o-especialista">Fale com o especialista</a>

                     </li>

                  </ul>

               </div>

            </div>

         </nav>





        <?php if (is_singular( 'cases' ) || is_singular( 'material' )){ ?>



        <div id="wrapper" class="">



         <header class="entry-header" style="background-image: url(<?=get_the_post_thumbnail_url($post->ID) ?>);">

          <div class="container">

           <div class="row">

            <div class="col-lg-12">

             <?php

             if ( is_single() ) :

               the_title( '<h1 class="entry-title"><span>Case de sucesso:</span>', '</h1>' );

           endif;

           ?>



           <?php if ( 'post' == get_post_type() ) : ?>

              <div class="entry-meta">

               <?php odin_posted_on(); ?>

           </div><!-- .entry-meta -->

       <?php endif; ?>

   </div>

</div>

</div>

</header><!-- .entry-header -->



<div class="container">

   <div class="row">

    <?php }
    elseif (is_single()) { ?>
    <div id="wrapper" class="container">
    <?php }
    else{ ?>

    <div id="wrapper" class="container">

      <div class="row">

        <?php	} ?>





        <?php if($_SERVER['REQUEST_URI'] == "/blog/"): ?>

            <style>

                #content{

                    display: flex;

                    flex-wrap: wrap;

                }

            </style>

        <?php endif;?>





        <?php  



        if ( is_front_page() && is_home() ) {

        //echo "Default homepage";

        } elseif ( is_front_page() ) {

       //echo "static homepage";

        } elseif ( is_home() ) {

           echo "<div class='col-md-8 title-blog'><h1 style='color: #4b6fbb !important;'> Blog </h1></div>";
           ?>

                  <div class="col-md-4" style="padding: 40px;">
                    <span id='search-2'><?php get_search_form(); ?>
                    </span>
                  </div>
           <?php



       } else {

      //echo "everything else";

       }



       ?>





       <?php if(is_single() && !is_singular( 'cases' )): ?>

        <div class="col-md-12">

            <header class="entry-header">

                <?php

                if ( is_single() ) :

                    //the_title( '<h1 class="entry-title">', '</h1>' );

                  $titulo = get_the_title();

                  $link = get_permalink();

                  $categoria = get_the_category();
                  $catNome = $categoria[0]->name;
                  $catId = $categoria[0]->term_id;

                  //echo $catNome;

                  $catlink = get_category_link($catId);

                  //echo $catId;

                  //var_dump($categoria);
  
                  echo "<div class='guia-single-post'>";

                  echo " <a href='https://eixo.digital'> <small> Home </small> </a>" . "<i class='fa fa-angle-double-right' aria-hidden='true'></i>" . "<a href='https://eixo.digital/blog'> <small>Blog</small> </a>" . "<i class='fa fa-angle-double-right' aria-hidden='true'></i>" . 

                    "<a href=' $catlink '> <small> $catNome </small> </a>" .
                    "<i class='fa fa-angle-double-right' aria-hidden='true'></i>".
                    "<a href='$link'> <small> $titulo </small> </a>";

                  echo "</div>";

                else :

                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

                endif;

                ?>



            </header><!-- .entry-header -->



        </div>

    <?php endif; ?>