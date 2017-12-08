<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$plaz = $_GET["plaz"];
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
      <h1 class="tituldelemer">APLICA A LA PLAZA</h1>
    </div>
    <div class="elcontentemergent formplaza">
      <div class="formemergents formdeplaz"> 
        <form class="w-clearfix" id="form-plaza" name="form-plaza">
          <input class="fieldemerge w-input val" data-name="nombre" id="nombre" maxlength="256" name="nombre" placeholder="Nombre Completo*" type="text">
          <input class="fieldemerge w-input val" data-name="email" id="correo" maxlength="256" name="correo" placeholder="Correo Electrónico*" type="email">
          <input class="fieldemerge w-input val" data-name="telefono" id="telefono" maxlength="256" name="telefono" placeholder="Teléfono*" type="number">
          <input class="fieldemerge w-input val" data-name="direccion" id="direccion" maxlength="256" name="direccion" placeholder="Dirección Actual*" type="text">
          <input class="fieldemerge w-input val" data-name="estudios" id="estudios" maxlength="256" name="estudios" placeholder="Nivel de estudios*" type="text">
          <div class="radiocontent">
          <label>¿cuenta con disponibilidad inmediata?</label>
          <input class="radioform val" type="radio" name="disponibilidad" value="si" type="radio"> 
          <span class="textradio">Si</span>
          <input class="radioform val" type="radio" name="disponibilidad" value="no" type="radio">     <span class="textradio">No</span>
          </div>
          <input class="fieldemerge w-input val" data-name="pretencion" id="pretencion" maxlength="256" name="pretencion" placeholder="Pretención salarial estimada*" type="number">
          <!--<div class="captcha captchactivo">
            <div id="captcha" class="g-recaptcha val" data-sitekey="6LfuISMUAAAAAH3l2nAFcICrj72fFZvh-tuBjwwI" type="captcha">
            </div>  
          </div>-->
          <input type="hidden" name="plaza" value="<?php echo $plaz; ?>">
          <input type="hidden" name="plazaform" value="true">
          <input id="enviar_plaza" class="botdenviar w-button val" type="button" value="Enviar">
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