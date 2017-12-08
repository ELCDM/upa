<?php
the_post();
get_header();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interna-blog');
$cat = wp_get_post_terms( $post->ID, 'category');
?>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=593adf1147d39c0011bceb99&product=inline-share-buttons"></script>
<main class="content w-clearfix">
  <div class="bloginterno">
    <div class="headinterblog"></div>
    <div class="max960 w-clearfix">
      <img class="imgblog" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
      <div class="contentbloginter w-clearfix">
        <div class="contentprincipal w-clearfix">
          <div class="etiquetayfecha w-clearfix">
            <div class="etiquetainterna"><?php echo $cat[0]->name; ?></div>
            <div class="fechainterna">Jun 22, 2015</div>
          </div>
          <h1 class="titullbloginter"><?php the_title(); ?></h1>
          <div class="textinterblog"><?php the_content(); ?></div>
          <div class="compartir w-clearfix">
            <div class="text-block-9">Compartir el artículo</div>
            <div class="sharethis-inline-share-buttons"></div>
          </div>
        </div>
        <div class="sidebarinterblog w-clearfix">
          <div class="articulosrelcontent w-clearfix">
            <h3 class="tituldeartrel">artículos relacionados</h3>
            <?php
            $co = 0;
            $query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> 3 ) );
            while ($query->have_posts()):$query->the_post();
            $tel = get_post_meta( get_the_ID(), 'wpcf-telefono', true );
            $dire = get_post_meta( get_the_ID(), 'wpcf-direccion', true );
            ?>
            <a class="unrelinter" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php
            $co++;
            endwhile;
            wp_reset_postdata();
            ?>
          </div>
          <div class="modcotizador w-clearfix">
            <div class="fondoarribamod"></div><img class="calculatorcoti" src="<?php bloginfo('template_url')?>/images/calculator.png">
            <h2 class="tituldemodcot w-clearfix">PRESTAMOS <span class="maspeque">QUE CAMBIAN VIDAS</span></h2>
            <ul class="unordered-list">
              <li class="lit">
                <div class="textitem">Hasta por &nbsp;un monto de Q50,000.00</div>
              </li>
              <li class="lit">
                <div class="textitem">Interés de 15% anual sobre saldo</div>
              </li>
              <li class="lit">
                <div class="textitem">Hasta 60 meses para pagar</div>
              </li>
            </ul><a class="cotizarprest w-button" href="<?php bloginfo('home')?>/cotizador">Cotiza prestamo</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
?>