<?php
the_post();
get_header();
$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
?>
<div class="content w-clearfix">
  <div class="ahorrofond tituldecont w-clearfix">
    <h1 class="tituldecontacto"><?php echo $term->name; ?></h1>
  </div>
  <div class="max960 w-clearfix">
    <div class="textdesc"><?php echo $term->description; ?></div>
    <div class="menuarchive w-clearfix">
     <?php
     $co = 0;
     $query = new WP_Query( array( 'post_type' => 'productos', 'order' => 'ASC', 'tax_query' => array(
      array(
        'taxonomy' => 'tipo-de-producto',
        'field'    => 'slug',
        'terms'    => $term->slug,
        ),
      ) ) );
     while ($query->have_posts()):$query->the_post();
     $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
     //echo $term->slug;
     ?>
     <a href="<?php the_permalink(); ?>" class="<?php echo 'clas-'.$term->slug; ?> unitemarchivo w-clearfix" data-ix="alhoverarchivo">
      <div class="eltituldearhiv">
        <h3 class="heading-8"><?php the_title(); ?></h3>
        <div class="div-block-4"></div>
      </div>
      <div class="flechit" data-ix="flecits"><img class="flechgris" src="<?php bloginfo('template_url')?>/images/flechit_gris.png"><img class="flechitverde" src="<?php bloginfo('template_url')?>/images/flechit_verde.png">
      </div>
    </a>
    <?php
    $co++;
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
</div>
</div>
<?php
get_footer();
?>