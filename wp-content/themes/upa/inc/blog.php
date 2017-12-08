<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$fecha = date("Y-m-d H:i:s"); 
$cat = $_REQUEST['cat'];
$func = $_REQUEST['func'];
$co = 0;

//FITRAR POR CATEGORIA
if($func != 'mas'){
//todos
	if ($cat == 'todos'){
		$query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> 10) );
	} else {	
//Por categoría
		$query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> 10, 'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
			//'terms'    => 'ahorro',
				'terms'    => $cat,
				),
			), ) );
	}
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
				<?php } else { ?>
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

				<?PHP 
				//CARGAR MÁS POST
			} else { 
				$cant = intval($_REQUEST['cant'])+1;
				if ($cat == 'todos'){
					$query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> 3, 'offset' => $cant) );
				} else {	
					$query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> 3, 'offset' => $cant, 'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => $cat,
							),
						), ) );
				}
				while ($query->have_posts()):$query->the_post();
				$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interna-blog');
				$cat = wp_get_post_terms( $post->ID, 'category');
				$time = get_the_time('F j, Y');
				$eltime = split(' ', $time); 
				?>

				<a class="blogarchiv unblogarchivofina w-clearfix" href="<?php the_permalink(); ?>">
					<img src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
					<div class="fechablogarch fechasublog">
						<span class="subra"><?php echo $eltime[0]; ?> </span><?php echo $eltime[1].' '.$eltime[2]; ?></div>
						<h2 class="titulblogprin titulotroblog"><?php the_title(); ?></h2>
						<div class="etiqueta"><?php echo $cat[0]->name; ?></div>
					</a>
					<?php
					$co++;
					endwhile;
					wp_reset_postdata();
					?>

				<?php } ?>