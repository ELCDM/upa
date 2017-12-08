<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head> 
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>UPA</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Webflow" name="generator">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php bloginfo('template_url')?>/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url')?>/css/webflow.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url')?>/css/upa-3dccb1.webflow.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.core.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.default.css" id="toggleCSS"/>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
     google: {
      families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Oswald:200,300,400,500,600,700"]
    }
  });
    var templateurl = '<?php bloginfo('template_url'); ?>';
    var home = '<?php bloginfo('home'); ?>';
  </script>
  <script src="<?php bloginfo('template_url')?>/js/modernizr.js" type="text/javascript"></script>
  <link href="<?php bloginfo('template_url')?>/images/ico.png" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
  <?php wp_head(); ?>
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101848170-1', 'auto');
  ga('send', 'pageview');

</script>
<body <?php body_class(); ?>>
  <header class="header w-clearfix">
    <div class="menutop">
      <div class="max1000 w-clearfix">
        <div class="buscador">

          <form data-name="Email Form" id="search-form" name="search-form" method="GET" class="formsearch" action="<?php echo esc_url(get_site_url('/')); ?>">
            <input autofocus="autofocus" class="inputbuscar w-input" data-name="buscar" id="search" maxlength="256" value="<?php the_search_query(); ?>" name="s" placeholder="Buscar" type="text">
            <input class="lupitasub w-button" value="buscar" type="submit">
          </form>
        </div>
        <a href="https://www.facebook.com/cooperativaupa" target="_blank" class="linke w-clearfix">
          <div class="text-block">Facebook</div>
        </a>
        <a href="https://servicioenlinea.com.gt:8443/fenacoac/" target="_blank" class="linke w-clearfix">
          <div class="sinbord text-block">Consulta de saldos Visa Internacional</div>
        </a>
        <a href="<?php bloginfo('home')?>/educacion-financiera" class="linke w-clearfix">
          <div class="text-block">Educación Financiera</div>
        </a>
        <a href="<?php bloginfo('home')?>/cooperativismo" class="linke w-clearfix">
          <div class="sinborde text-block">Cooperativismo</div>
        </a>
      </div>
    </div>
    <div id="menu_prin" class="menu w-clearfix">
      <div class="max1000">
        <div class="navbar navbarmenu w-nav" data-animation="default" data-collapse="medium" data-duration="400">
          <div class="container containermenu w-container">
            <a class="logoprin w-nav-brand" href="<?php bloginfo('home')?>"><img class="image-5" src="<?php bloginfo('template_url')?>/images/logo.png">
            </a>
            <nav class="contentitems w-clearfix w-nav-menu" role="navigation">
              <a class="itemmenu primeritem w-nav-link" href="<?php bloginfo('home')?>">INICIO</a>
              <div class="itemmenu cono w-nav-link" href="#">CONÓCENOS</div>
              <div class="submenuconocenos sub-cono w-clearfix">
                <a href="<?php bloginfo('home')?>/presentacion" class="itemsubmenu w-clearfix">
                  <div class="textsubmenu">Presentación</div>
                </a>
                <a href="<?php bloginfo('home')?>/mision-vision-y-valores" class="itemsubmenu w-clearfix">
                  <div class="textsubmenu">Misión, Visión y Valores</div>
                </a>
                <a href="<?php bloginfo('home')?>/informacion-financiera" class="itemsubmenu w-clearfix">
                  <div class="textsubmenu">Información Financiera</div>
                </a>
              </div>
              <div class="itemmenu product-serv w-nav-link" href="#">PRODUCTOS Y SERVICIOS</div>
              <div class="submenuconocenos submenuproduc w-clearfix">
                <div class="itemsubmenu w-clearfix">
                  <a href="<?php bloginfo('home')?>/tipo-de-producto/ahorros" class="textsubmenu">Ahorros</a>
                </div>
                <div class="itemsubmenu w-clearfix">
                  <a href="<?php bloginfo('home')?>/tipo-de-producto/prestamos" class="textsubmenu">Préstamos</a>
                </div>
                <a href="<?php bloginfo('home')?>/tipo-de-producto/tarjetas" class="itemsubmenu w-clearfix">
                  <div class="textsubmenu">Tarjetas</div>
                </a>
                <a href="<?php bloginfo('home')?>/productos/remesas" class="itemsubmenu w-clearfix">
                  <div class="textsubmenu">Remesas</div>
                </a>
                <a href="<?php bloginfo('home')?>/productos/seguros" class="itemsubmenu ultimsinbor w-clearfix">
                  <div class="textsubmenu ultimborde">Seguros</div>
                </a>
              </div>
              <a class="itemmenu w-nav-link" href="<?php bloginfo('home')?>/agencias">AGENCIAS</a>
              <a class="itemmenu w-nav-link" href="<?php bloginfo('home')?>/contacto">CONTÁCTANOS</a>
            </nav>
            <div class="contentbot w-nav-button">
              <div class="icon w-icon-nav-menu"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="barradefondo"></div>
    </div>
  </header>