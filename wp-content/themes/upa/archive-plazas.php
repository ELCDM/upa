<?php
the_post();
get_header();
?>
<div class="content w-clearfix">
    <div class="contactocontent search">
      <div class="max960 w-clearfix">
        <div class="tituldelsearch w-clearfix"><span class="resulttext">FORMA PARTE DE NUESTRO EQUIPO</span>
        </div>
        <div class="textdecotiz textdecotizador textdecotizadorprodu"></div>
         <?php
        $co = 0;
        $query = new WP_Query( array( 'post_type' => 'plazas', 'posts_per_page'=> -1 ) );
        while ($query->have_posts()):$query->the_post();
        ?>
        <div class="unresultado w-clearfix">
          <h3 class="titulresult"><?php the_title(); ?></h3>
          <div class="textencontrado"><?php the_content(); ?></div>
          <div class="ctacontentpla">
            <!--<a class=" ctaslide w-button ctaplazx" data-fancybox data-src="<?php //bloginfo('template_url')?>/inc/form-plaza.php?plaz=<?php //the_title(); ?>" href="javascript:;">ENVIAR CV</a>-->
          </div>
        </div>
        <?php
          $co++;
          endwhile;
          wp_reset_postdata();
          ?>
          <div class="unresultado siniqueaplique w-clearfix">
          <h3 class="titulresult">Realiza tus pruebas aquí:</h3>
          <a class=" ctaslide w-button ctaplazx" href="http://200.35.181.164/ArmstrongWeb/web/asp/modAcceso/acceso.aspx?par=0daedf41ad134415613bdd26b150c271" target="_blank">REALIZAR PRUEBAS</a>
          </div>
      </div>
    </div>
  </div>
  <?php
  get_footer();
  ?>