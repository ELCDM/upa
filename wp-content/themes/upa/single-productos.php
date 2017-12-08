<?php
the_post();
get_header();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interna-blog');
$img_cta = get_post_meta( get_the_ID(), 'wpcf-image-cta', true );
$bot_cta = get_post_meta( get_the_ID(), 'wpcf-texto-cta', true );
$term = wp_get_post_terms( $post->ID, 'tipo-de-producto');
?>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=593adf1147d39c0011bceb99&product=inline-share-buttons"></script>
<div class="content">
  <div class="remesascontent w-clearfix">
    <div class="titulderemesas">
      <div class="max960 w-clearfix">
        <h1 class="ahorrointer tithprod"><?php the_title(); ?></h1>
        <img class="iconaportaciones icontitulinter <?php echo $post->post_name; ?>" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
      </div>
    </div>
    <div class="contentremesas">
      <div class="max960 w-clearfix">
        <div class="contentprincipal w-clearfix">
          <?php the_content(); ?>
          <?php if($post->ID == 126) {  ?>
          <a class="seguroscolumna w-inline-block" href="http://www.seguroscolumna.com" target="_blank">
            <img class="iconsegurcol" src="<?php bloginfo('template_url');?>/images/columnaseg.png">
              <div class="textcols w-clearfix">
              <span class="text-span">Columna<br xmlns="http://www.w3.org/1999/xhtml"></span>
              La aseguradora de las <br>cooperativas MICOOPE<br>y del sitema.</div>
            </a>
            <?php } ?>
            <div class="sharethis-inline-share-buttons"></div>
        </div>
        <div class="sidebarinter sidebarinterblog w-clearfix">
        <?php 
        if($post->ID != 126 && $post->ID != 134) { 
          ?>
          <div class="ctaproducto <?php echo $post->post_name; ?>">
            <div class="subfondocta"></div>
            <img class="ahorrocoriient imgctaprointer" src="<?php echo $img_cta; ?>">
            <a class="ctainterpro w-button" data-fancybox data-src="<?php bloginfo('template_url')?>/inc/form-asesoria.php?pro=<?php the_title(); ?>" href="javascript:;"><?php echo $bot_cta; ?></a>
          </div>
          <?php } ?>
          <?php if($term[0]->term_id == 50) { ?>
          <div class="cotizarmod modcotizador w-clearfix">
            <div class="cotizadorenlinea">COTIZADOR EN LÍNEA</div>
            <div class="text-block-12">PRÉSTAMOS que
              <br>cambian vidas</div>
              <div class="listadeahorros w-clearfix">
                <div class="listitem">Bajas tasas de interés.</div>
                <div class="listitem">Plazos acorde a sus necesidades.</div>
                <div class="listitem">Pagos a capital sin ninguna restricción.</div>
              </div>
              <img class="imgdecalcul" src="<?php bloginfo('template_url')?>/images/imgdecalcul.png"><a class="ctabotcotiz w-button" href="<?php bloginfo('home')?>/cotizador/">COTIZA PRÉSTAMO</a>
            </div>
            <?php } else { ?>
            <div class="modcotizador w-clearfix">
              <div class="fondoarribamod"></div><img class="calculatorcoti" src="<?php bloginfo('template_url')?>/images/calculator.png">
              <h2 class="tituldemodcot w-clearfix">PRÉSTAMOS <span class="maspeque">QUE CAMBIAN VIDAS</span></h2>
              <ul class="unordered-list">
                <li class="lit">
                  <div class="textitem">Bajas tasas de interés.</div>
                </li>
                <li class="lit">
                  <div class="textitem">Plazos acorde a sus necesidades.</div>
                </li>
                <li class="lit">
                  <div class="textitem">Pagos a capital sin ninguna restricción.</div>
                </li>
              </ul><a class="cotizarprest w-button" href="<?php bloginfo('home')?>/cotizador/">Cotiza préstamo</a>
            </div>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  get_footer();
  ?>