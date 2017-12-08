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
    <div class="elcontentemergent formactivo">
      <div class="textdemerget">Llena el siguiente formulario y un agente se comunicará para brindarte más información del Activo que solicitas</div>
      <div class="formemergents">
        <form class="w-clearfix" id="form-activo" name="form-activo">
          <input class="fieldemerge w-input val" data-name="nombre" id="nombre" maxlength="256" name="nombre" placeholder="Nombre*" type="text">
          <input class="fieldemerge w-input val" data-name="email" id="correo" maxlength="256" name="correo" placeholder="Correo Electrónico*" type="email">
          <input class="fieldemerge w-input val" data-name="telefono" id="telefono" maxlength="256" name="telefono" placeholder="Teléfono*" type="number">
          <!--<div class="captcha captchactivo">
            <div id="captcha" class="g-recaptcha val" data-sitekey="6LfuISMUAAAAAH3l2nAFcICrj72fFZvh-tuBjwwI" type="captcha">
            </div>  
          </div>-->
          <input type="hidden" name="activo" value="<?php echo $pro; ?>">
          <input type="hidden" name="activoform" value="true">
          <input id="enviar_activo" class="botdenviar w-button val" type="button" value="Enviar">
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