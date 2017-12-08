<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$pro = $_GET["pro"];
?>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link href="<?php bloginfo('template_url')?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url')?>/css/webflow.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url')?>/css/upa-3dccb1.webflow.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.core.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.default.css" id="toggleCSS"/>
<link href="<?php bloginfo('template_url')?>/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
<script type="text/javascript">
  WebFont.load({
   google: {
    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Oswald:200,300,400,500,600,700"]
  }
});
  var templateurl = '<?php bloginfo('template_url'); ?>';
  var home = '<?php bloginfo('home'); ?>';
</script>
<div class="emergentecontent">
  <div class="formemergent w-clearfix">
    <div class="tituldelemergente w-clearfix">
      <h1 class="tituldelemer">ESCRÍBENOS</h1>
    </div>
    <div class="elcontentemergent">
      <div class="textdemerget">Completa el siguiente formulario como primer paso para obtener el producto que solicitaste, un agente se pondrá en contacto para continuar con el proceso.</div>
      <div class="formemergents">
        <form class="w-clearfix" id="form-producto" name="form-producto">
          <input class="fieldemerge w-input val" data-name="nombre" id="nombre" maxlength="256" name="nombre" placeholder="Nombre*" type="text">
          <input class="fieldemerge w-input val" data-name="email" id="correo" maxlength="256" name="correo" placeholder="Correo Electrónico*" type="email">
          <input class="fieldemerge w-input val" data-name="telefono" id="telefono" maxlength="256" name="telefono" placeholder="Teléfono*" type="number">
          <select class="w-select val" data-name="agencia cercana" id="agencia" name="agencia">
            <?php
            $co = 0;
            $query = new WP_Query( array( 'post_type' => 'agencias', 'posts_per_page'=> -1 ) );
            while ($query->have_posts()):$query->the_post();
            if($post->ID != 207){
              ?>
              <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
              <?php
            }
            $co++;
            endwhile;
            wp_reset_postdata();
            ?>
          </select>
          <textarea class="textareacont w-input val" data-name="mensaje" id="mensaje" maxlength="5000" name="mensaje" placeholder="Mensaje" type="text"></textarea>
          <!--<div class="captcha">
            <div id="captcha" class="g-recaptcha val" data-sitekey="6LfuISMUAAAAAH3l2nAFcICrj72fFZvh-tuBjwwI" type="captcha">
            </div>  
          </div>-->
          <input type="hidden" name="product" value="<?php echo $pro; ?>">
          <input type="hidden" name="producto" value="true">
          <input id="enviar_formulario" class="botdenviar w-button val" type="button" value="Enviar">
        </form> 
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url')?>/js/webflow.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/alertify.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php bloginfo('template_url')?>/js/action.js" type="text/javascript"></script>
