<?php
the_post();
get_header();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interna-blog');
?>
<main class="content w-clearfix">
    <div class="bloginterno">
      <div class="headinterblog"></div>
      <div class="max960 w-clearfix">
      <img class="imgblog" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
        <div class="contentbloginter w-clearfix">
          <div class="contentprincipal w-clearfix">
            <div class="etiquetayfecha w-clearfix">
              <div class="etiquetainterna">PRESTAMO</div>
              <div class="fechainterna">Jun 22, 2015</div>
            </div>
            <h1 class="titullbloginter"><?php the_title(); ?></h1>
            <div class="textinterblog"><?php the_content(); ?></div>
            <div class="compartir w-clearfix">
              <div class="text-block-9">Compartir el artículo</div>
              <a class="w-inline-block" href="#"><img class="botshare" src="<?php bloginfo('template_url')?>/images/botfb.png">
              </a>
              <a class="w-inline-block" href="#"><img class="botshare" src="<?php bloginfo('template_url')?>/images/bottwit.png">
              </a>
            </div>
          </div>
          <div class="sidebarinterblog w-clearfix">
            <div class="articulosrelcontent w-clearfix">
              <h3 class="tituldeartrel">artículos relacionados</h3><a class="unrelinter" href="#">Cras dapibus. Vivamus elementum<br>Aenean vulputate .</a><a class="unrelinter" href="#">Cras dapibus. Vivamus elementum<br>Aenean vulputate .</a><a class="unrelinter" href="#">Cras dapibus. Vivamus elementum<br>Aenean vulputate .</a>
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
              </ul><a class="cotizarprest w-button" href="#">Cotiza prestamo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php
get_footer();
?>