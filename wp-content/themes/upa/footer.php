<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer class="footer">
    <div class="max1300 subfooter">
      <div class="max960 w-clearfix">
        <div class="mapadelsitio w-clearfix">
          <div class="colums w-clearfix">
          <a class="link-2" href="<?php bloginfo('home')?>">Inicio</a>
          <a class="link-2" href="<?php bloginfo('home')?>/presentacion">Conócenos</a>
          <a class="link-2" href="<?php bloginfo('home')?>/tipo-de-producto/prestamos">Productos y Servicios</a>
          </div>
          <div class="col2 colums w-clearfix">
          <a class="link-2" href="<?php bloginfo('home')?>/tipo-de-producto/ahorros">Ahorros</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/aportaciones">Aportaciones</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/ahorro-corriente">Ahorro Corriente</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/ahorro-programado-mi-futuro-seguro">Ahorro Programado</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/ahorro-infanto-juvenil">Infanto Juvenil</a>
          </div>
          <div class="cols3 colums w-clearfix">
          <a class="link-2" href="<?php bloginfo('home')?>/tipo-de-producto/prestamos">Préstamos</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/presta-facil">Presta Fácil</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/prestamos-automaticos">Préstamos Automáticos</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/presta-facil-en-tu-empresa">Presta Fácil En Tu Empresa</a>
          <a class="link-2" href="<?php bloginfo('home')?>/productos/mi-presta-upa">Mi Presta UPA</a>
          </div>
          <div class="cols4 colums w-clearfix">
          <a class="link-2" href="<?php bloginfo('home')?>/agencias">Agencias</a>
          <a class="link-2" href="<?php bloginfo('home')?>/cooperativismo">Cooperativismo</a>
          <a class="link-2" href="<?php bloginfo('home')?>/educacion-financiera">Educación Financiera</a>
          <a class="link-2" href="<?php bloginfo('home')?>/cotizador">Cotizador</a>
          <a class="link-2" href="https://servicioenlinea.com.gt:8443/fenacoac/" target="_blank">Visa Internacional</a>
          </div>
          <div class="cols5 colums w-clearfix">
          <a class="link-2" href="http://www.escuelaupa.edu.gt/" target="_blank">Escuela UPA</a>
          <a class="link-2" href="https://docs.google.com/forms/d/e/1FAIpQLSenkOxagLSnKm2iPLf87mHSrIl0RzsFQf8kv1WlqPpo8TW1lw/viewform?c=0&w=1" target="_blank">Trabaja en UPA</a>
          <a class="link-2" href="<?php bloginfo('home')?>/activos">Activos Extraordinarios</a>
          <a class="link-2" href="<?php bloginfo('home')?>/contacto">Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footerbot max1300">
      <div class="max960 w-clearfix"><img class="logofooter" src="<?php bloginfo('template_url')?>/images/logofooter.png">
        <div class="text-block-5">© 2017 cooperativa upa. ahorros - préstamos - y más</div>
        <div class="linksdefooter w-clearfix">
        <a class="pbx" href="tel:77205757">PBX: 7720-5757</a>
        <a class="fbfooter" href="https://www.facebook.com/cooperativaupa" target="_blank">Síguenos</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url')?>/js/webflow.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url')?>/js/jquery.fancybox.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/alertify.min.js"></script>
  <script src="<?php bloginfo('template_url')?>/js/action.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy1knfk5-yB5M74tr-pdnnEVC7n9i3640"> </script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<?php wp_footer(); ?>
</body>
</html>
