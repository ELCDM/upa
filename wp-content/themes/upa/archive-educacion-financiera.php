<?php
the_post();
get_header();
?>
<main class="content w-clearfix">
  <div class="archivoblog">
    <div class="max960 w-clearfix">
      <div class="filtro w-clearfix">
        <div class="elfiltro w-clearfix">
          <div class="textfiltro">Filtrar por</div>
          <div class="filtros w-dropdown" data-delay="0">
          <select id="blogcategory">
          <option value="todos">Todos los blogs</option>
              <?php 
              $terms = get_categories(); 
              //var_dump($terms);
              foreach ($terms as $term) {
                if($term->term_id != 1){
                  ?>
                  <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                  <?php } } ?>
                </select>
              </div>
            </div>
          </div>
          <div id="todoslosblogs" class="todoslosblogs">
          <?php
          $co = 0;
          $query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> -1 ) );
          while ($query->have_posts()):$query->the_post();
          $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interna-blog');
          $cat = wp_get_post_terms( $post->ID, 'category');
          $time = get_the_time('F j, Y');
          $eltime = split(' ', $time); 
          if($co == 0){
            ?>
            <a class="itemprincipal w-clearfix" href="<?php the_permalink(); ?>">
              <div class="imgblogprin">
                <img class="image-7" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
                <div class="etiqueta"><?php echo $cat[0]->name; ?></div>
              </div>
              <div class="contentdeblog w-clearfix">
                <div class="fechablogarch">
                  <span class="subra"><?php echo $eltime[0]; ?> </span><?php echo $eltime[1].' '.$eltime[2]; ?></div>
                  <h2 class="titulblogprin"><?php the_title(); ?></h2>
                </div>
              </a>
              <div class="otrosblogs w-clearfix">
                <?php } else if($co <= 10) { ?>
                <a class="blogarchiv unblogarchivofina w-clearfix" href="<?php the_permalink(); ?>">
                  <img src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
                  <div class="fechablogarch fechasublog">
                    <span class="subra"><?php echo $eltime[0]; ?> </span><?php echo $eltime[1].' '.$eltime[2]; ?></div>
                    <h2 class="titulblogprin titulotroblog"><?php the_title(); ?></h2>
                    <div class="etiqueta"><?php echo $cat[0]->name; ?></div>
                  </a>
                  <?php } ?>
                  <?php
                  $co++;
                  endwhile;
                  wp_reset_postdata();
                  
                  ?>
                </div>
                </div>
                <?php if($co > 10){ ?>
                <a id="botdecargarmas" class="botdecargarmas w-button" href="#">Cargar más</a>
                <?php } ?>
              </div>
            </div>
          </main>
          <?php
          get_footer();
          ?>