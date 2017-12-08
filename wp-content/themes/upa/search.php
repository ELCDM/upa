<?php

/**

 * The template for displaying search results pages

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */



get_header(); ?>

<div class="content w-clearfix">

  <div class="contactocontent search">

    <div class="max960 w-clearfix">

      <div class="tituldelsearch w-clearfix"><?php echo get_search_query(); ?><span class="resulttext"> Resultados</span>

      </div>

      <?php if ( have_posts() ) :

      while ( have_posts() ) : the_post();

      $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'Buscador');

      $thumb_tilte = get_post(get_post_thumbnail_id())->post_title;

      ?>

      <div class="unresultado w-clearfix">

      <h4 class="titulresult"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

        <div class="textencontrado"><?php the_content(); ?></div>

        </div>

      <?php endwhile;

      else : ?>

      <div class="contentcontacto contentgracias">

        <div class="textcontacto textregistro textogracias">No existen resultados para tu busqueda. Por favor realiza otra busqueda o ve a Inicio.</div>

        <a href="<?php bloginfo('home'); ?>" class="w-button enviarbot butgracias btgra">Ir a Inicio</a>

      </div>



    <?php endif;

    ?>

  </div>

</div>

</div>

<?php get_footer(); ?>

