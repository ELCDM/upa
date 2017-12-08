<?php
the_post();
get_header();
?>
<div class="content w-clearfix">
  <div class="agenciascontent contactocontent w-clearfix">
    <div class="tituldeagencias tituldecont w-clearfix">
      <h1 class="tituldecontacto">Agencias</h1>
    </div>
    <div class="max960 w-clearfix">
      <div class="tablaagencia w-clearfix">
        <div class="encabezadoagencia w-clearfix">
          <div class="agenciacel">Aagencia</div>
          <div class="agenciacel telagencia">Teléfono</div>
          <div class="agenciacel direccion">Dirección</div>
        </div>
        <?php
        $co = 0;
        $query = new WP_Query( array( 'post_type' => 'agencias', 'posts_per_page'=> -1 ) );
        while ($query->have_posts()):$query->the_post();
        $tel = get_post_meta( get_the_ID(), 'wpcf-telefono', true );
        $dire = get_post_meta( get_the_ID(), 'wpcf-direccion', true );
        ?>
        <div class="unagenciafila w-clearfix">
          <div class="agenombre"><?php the_title(); ?></div>
          <?php
          $telcall = split (" ", $tel);
            //var_dump($telcall);
          ?>
          <a href="tel:<?php echo  $telcall[1]; ?>" class="agenombree agenombre pbxtels"><?php echo $tel; ?></a>
          <div class="agenombre direccs"><?php echo $dire; ?></div><a class="vermasinfoagencia" href="<?php the_permalink(); ?>">Ver más información</a>
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