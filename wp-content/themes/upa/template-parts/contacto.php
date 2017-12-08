<?php

/**

* Template Name: Contacto

*

* @package WordPress

* @subpackage Twenty_Fourteen

* @since Twenty Fourteen 1.0

*/



the_post();

get_header();

$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

?>

<main class="content w-clearfix">

  <div class="contactocontent w-clearfix">

    <div class="tituldecont w-clearfix">

      <h1 class="tituldecontacto">Contacto</h1>

    </div>

    <div class="datosyformulario">

      <div class="max960 w-clearfix">

        <div class="datos w-clearfix">

          <h2 class="tituldedatoscont">UPA CENTRAL</h2>

          <div class="textdedatos">3a. Av. 7-27 Barrio San Antonio, Amatitlán</div>

          <div class="pbxencont textdedatos"><a href="tel:77205757">PBX: 7720-5757</a></div><a class="correocont textdedatos" href="mailto:info@cooperativaupa.net">info@cooperativaupa.net</a>

        </div>

        <div class="formcontact">

          <form class="w-clearfix" data-name="Email Form 2" id="contacto" name="contacto">

            <input class="inputform w-input val" data-name="nombre" id="nombre" maxlength="256" name="nombre" placeholder="Nombre*" type="text">

            <input class="inputform w-input val" data-name="correo" id="correo" maxlength="256" name="correo" placeholder="Correo electrónico*" type="email">

            <input class="inputform w-input val" data-name="telefono" id="telefono" maxlength="256" name="telefono" placeholder="Teléfono*" type="number">

            <select class="inputform w-input val" data-name="asunto" id="asunto" name="asunto" placeholder="Asunto*" type="text">

              <option value="ahorros">Ahorros</option>

              <option value="prestamos">Prestamos</option>

              <option value="tarjetas">Tarjetas</option>

              <option value="seguros">Seguros</option>

              <option value="remesas">Remesas</option>

              <option value="otro">Otro</option>

            </select>

            <select class="inputform w-input val" data-name="agencia" id="agencia" name="agencia" type="text">

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

          <input type="hidden" name="contacto" value="true">

          <input id="enviar_contacto" class="enviarcontent w-button g-recaptcha val" data-wait="Please wait..." type="button" value="Enviar" >

        </form>

      </div>

    </div>

  </div>

  <div class="fotodetiendacontent w-clearfix">

    <img class="fotdeagenc" sizes="100vw" src="<?php echo $post_thumbnail[0]; ?>">

  </div>

</div>

</main>

<?php

get_footer();

?>