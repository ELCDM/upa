<?php
the_post();
get_header();
?>
<div class="content w-clearfix">
  <div class="activosextraordinarios contactocontent w-clearfix">
    <div class="titulactivs tituldecont w-clearfix">
      <h1 class="tituldecontacto">Activos extraordinarios</h1>
    </div>
    <div class="max960 w-clearfix">
      <div class="textactivsext textdecotiz textdecotizador textdeprodu">Bienes en venta, si usted está interesado puede escribir acá.</div>
      <div class="loscativosext w-clearfix">
        <?php
        $co = 0;
        $tit;
        $query = new WP_Query( array( 'post_type' => 'activos', 'posts_per_page'=> -1 ) );
        while ($query->have_posts()):$query->the_post();
        $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
        $m2 = get_post_meta( get_the_ID(), 'wpcf-metros-2', true );
        $dire = get_post_meta( get_the_ID(), 'wpcf-direccion-activo', true );
        $tipo = get_post_meta( get_the_ID(), 'wpcf-tipo-de-activo', true );
        $tit = get_the_title();
        ?>
        <div class="unactiv w-clearfix">
          <div class="laimgactivext" style="background-image: url(<?php echo $post_thumbnail[0]; ?>);">
            <a class="w-inline-block zoom" href="<?php echo $post_thumbnail[0]; ?>" data-fancybox="group" data-caption="<?php the_title(); ?>"></a>
            <?php
        $thumb_id = get_post_thumbnail_id(get_the_ID());
        $icono_agencia = get_post_meta( get_the_ID(), 'wpcf-icono-ir-agencia', true );
        $args = array(
          'post_type' => 'attachment',
          'post_mime_type' => 'image',
          'post_parent' => $post->ID,
          'post_status' => 'null',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
          );
        $images = new WP_Query($args);
        while ($images->have_posts()):$images->the_post();
        $image = wp_get_attachment_image_src($post->ID, 'full');
        ?>
    <a class="w-inline-block zoom" href="<?php echo $image[0]; ?>" data-fancybox="group-<?php echo $co; ?>" data-caption="<?php the_title(); ?>"></a>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
          </div>
          <div class="infodelactiv w-clearfix">
            <div class="dire w-clearfix">
              <div class="adorno"></div>
              <h4 class="labelextra">Dirección del bien<br>inmueble</h4>
              <div class="datodelimn"><?php echo $dire; ?></div>
            </div>
            <div class="mets w-clearfix">
              <h4 class="labelextra">METROS 2</h4>
              <div class="datodelimn"><?php echo $m2; ?></div>
            </div>
            <div class="tipodex w-clearfix">
              <h4 class="labelextra">CASA / TERRENO</h4>
              <div class="datodelimn"><?php echo $tipo; ?></div>
            </div>
            <a class="solicitarinfo w-button" data-fancybox data-src="<?php bloginfo('template_url')?>/inc/form-activo.php?pro=<?php echo $tit; ?>" href="javascript:;">Solicitar más información</a>
          </div>
        </div>

        <?php
        $co++;
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>