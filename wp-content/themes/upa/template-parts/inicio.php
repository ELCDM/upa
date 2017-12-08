<?php
/**
* Template Name: Inicio
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
?>
<main class="content">
  <div class="max1300 w-clearfix">
    <div class="slider w-slider" data-animation="slide" data-autoplay="1" data-delay="8000" data-duration="1500" data-infinite="1">
      <div class="mask w-slider-mask">
         <!--<div class="slide slideactivos w-clearfix w-slide">
          <div class="textdeimg w-clearfix"><img class="textslide" src="">
          </div>
        </div>-->
        <div class="slide slide1 w-clearfix w-slide">
          <div class="textdeimg w-clearfix"><img class="textslide" src="<?php bloginfo('template_url')?>/images/textdeslide.png">
          </div><a class="ctabot ctaslide1 w-button" href="<?php bloginfo('home')?>/productos/ahorro-programado-mi-futuro-seguro">Más Información</a>
        </div>
        <div class="slide slide1 slide2 w-clearfix w-slide">
          <div class="textdeimg w-clearfix"><img class="textslide" src="<?php bloginfo('template_url')?>/images/textslider2.png">
          </div><a class="ctabot ctaslide1 w-button" href="<?php bloginfo('home')?>/productos/ahorro-corriente">Más Información</a>
        </div>
        <div class="slide slide1 slide4 w-clearfix w-slide">
          <div class="textdeimg w-clearfix"><img class="textslide" src="<?php bloginfo('template_url')?>/images/textslide4.png">
          </div><a class="ctabot ctaslide1 w-button" href="<?php bloginfo('home')?>/productos/prestamos-automaticos">Más Información</a>
        </div>
        <div class="slide slide1 slide3 w-clearfix w-slide">
          <div class="textdeimg w-clearfix"><img class="textslide" src="<?php bloginfo('template_url')?>/images/textslider3.png">
          </div><a class="ctabot ctacolor ctaslide1 w-button" href="<?php bloginfo('home')?>/productos/presta-facil">Más Información</a>
        </div>
        
        <div class="slide slide1 slide6 w-clearfix w-slide">
          <div class="textdeimg w-clearfix">
          <img class="textslide" src="<?php bloginfo('template_url')?>/images/textslide6.png">
          </div><a class="ctabot ctaslide1 ctazul w-button" href="<?php bloginfo('home')?>/productos/micoope-upa-visa-internacional">Más Información</a>
        </div>
        <div class="slide slide1 slide5 w-clearfix w-slide">
          <div class="textdeimg w-clearfix">
          <img class="textslide" src="<?php bloginfo('template_url')?>/images/textslide5.png">
          </div><a class="ctabot ctaslide1 w-button" href="<?php bloginfo('home')?>/productos/presta-facil-en-tu-empresa">Más Información</a>
        </div>
        <div class="slide slide1 slide7 w-clearfix w-slide">
          <div class="textdeimg w-clearfix">
          <img class="textslide" src="<?php bloginfo('template_url')?>/images/textupacredit.png">
          </div><a class="ctabot ctaslide1 w-button" href="<?php bloginfo('home')?>/productos/upa-credit/">Más Información</a>
        </div>
      </div>
      <div class="flechs w-slider-arrow-left">
        <div class="icon-3 w-icon-slider-left"></div>
      </div>
      <div class="flechder flechs w-slider-arrow-right">
        <div class="icon-2 w-icon-slider-right"></div>
      </div>
      <div class="slide-nav w-round w-slider-nav"></div>
    </div>
    <div class="modulosprincipales w-clearfix">

      <div class="modprinci w-clearfix" data-ix="modulosprincipales">
        <div class="contentimg"><img class="iconmod3" src="<?php bloginfo('template_url')?>/images/iconmodprin.png">
        </div>
        <div class="contentmodprin w-clearfix">
          <h2 class="tituldemod">Préstamos para tus proyectos</h2>
          <div class="textmodpri">Los préstamos inmediatos te pueden ayudar en casos de emergencia.</div><a class="ctamodprin ctaslide w-button" href="<?php bloginfo('home')?>/tipo-de-producto/prestamos">MÁS INFORMACIÓN</a>
        </div>
      </div>
      <div class="modprinci">
        <div class="mod2bix w-clearfix" data-ix="modulosprincipales">
          <div class="contendemodprin contenmod2 w-clearfix">
            <h2 class="tituldemod">¿Cómo Asociarse?</h2>
            <div class="textmodpri">Se parte de Cooperativa UPA y obtén grandes beneficios en ahorros y préstamos.</div><a class="ctamod2 ctamodprin ctaslide w-button" href="<?php bloginfo('home')?>/productos/como-asociarse">MÁS INFORMACIÓN</a>
            </div>
          </div>
        </div>
        <div class="modprinci w-clearfix" data-ix="modulosprincipales">
          <div class="contendemodprin w-clearfix">
            <h2 class="tituldemod">Ahorros - Mejor es prevenir</h2>
            <div class="textmodpri">El fin de ahorrar es lograr una meta próxima, recursos disponibles y protegidos que se necesitan.</div>
            <a class="ctamodprin ctaslide w-button" href="<?php bloginfo('home')?>/tipo-de-producto/ahorros">MÁS INFORMACIÓN</a>
          </div>
        </div>
      </div>
      <div class="otrosserviccios">
        <div class="max960 w-clearfix">
          <div class="tituldelseccion w-clearfix">
            <div class="lalineabord"></div>
            <h2 class="heading">Otros servicios de Cooperativa UPA</h2>
            <div class="lalineabord lineaotrolado"></div>
          </div>
          <div class="textdesubservicio">Encuentra a continuación el servicio que mejor se adapta a tus necesidades</div>
          <div class="servicicios w-clearfix">

            <a href="<?php bloginfo('home')?>/productos/micoope-upa-visa-internacional" class="unserv w-clearfix" data-ix="subir-leve-al-over"><img class="image-2" src="<?php bloginfo('template_url')?>/images/icons_01.png">
              <div class="text-block-3">MICOOPE UPA
                <br>Visa Internacional</div>
                <div class="separcacion"></div>
              </a>

              <a href="<?php bloginfo('home')?>/productos/upa-credit" class="unserv w-clearfix" data-ix="subir-leve-al-over"><img class="image-2" src="<?php bloginfo('template_url')?>/images/icons_03.png">
                <div class="text-block-3 unalinea">UPA Credit</div>
                <div class="separcacion"></div>
              </a>

              <a href="<?php bloginfo('home')?>/productos/remesas" class="unserv w-clearfix" data-ix="subir-leve-al-over"><img class="image-2" src="<?php bloginfo('template_url')?>/images/icons_05.png">
                <div class="text-block-3 unalinea">Remesas</div>
                <div class="separcacion"></div>
              </a>

              <a href="<?php bloginfo('home')?>/productos/seguros" class="unserv w-clearfix" data-ix="subir-leve-al-over"><img class="image-2" src="<?php bloginfo('template_url')?>/images/icons_07.png">
                <div class="text-block-3 unalinea">Seguros</div>
                <div class="separcacion"></div>
              </a>

              <a href="<?php bloginfo('home')?>/activos" class="unserv w-clearfix" data-ix="subir-leve-al-over">
                <img class="image-2" src="<?php bloginfo('template_url')?>/images/icons_09.png">
                <div class="text-block-3">Activos
                  <br>extraordinarios</div>
                  <div class="separcacion ultim"></div>
                </a>

              </div>
            </div>
          </div>
          <div class="otrosmodulos w-clearfix">
            <div class="modulospeques w-clearfix">
              <div class="unotromodulo w-clearfix" data-ix="scale-small">
                <div class="contentprimermod w-clearfix">
                  <h3 class="heading-2 titulprimersubmod">Haz realidad tu sueño</h3>
                  <div class="textprimersubtitle">Con un préstamo sin fiador de hasta Q75,000.00</div>
                </div>
                <div class="div-block-2 w-clearfix"><a class="botdeprest w-button" href="<?php bloginfo('home')?>/cotizador">Cotiza un préstamo</a>
                </div><img class="imgdeprimermod" src="<?php bloginfo('template_url')?>/images/imgdeprimermod.png">
              </div>
              <div class="mod2mid unotromodulo w-clearfix" data-ix="scale-small">
                <div class="imgcontentmod2"><img class="image-3" src="<?php bloginfo('template_url')?>/images/mod2visa.png">
                </div>
                <div class="contentmod2 w-clearfix">
                  <h3 class="tittextmod2">MICOOPE UPA VISA INTERNACIONAL</h3>
                  <div class="textmod2 textprimersubtitle">Tasa del 1.25% y mensual 55 días para pagar sin intereses.</div><a class="button ctamod2 w-button" href="<?php bloginfo('home')?>/productos/micoope-upa-visa-internacional">Más información</a>
                </div>
              </div>
              <div class="modul3 unotromodulo w-clearfix">
                <div class="contentimgmod3" data-ix="scale-small"><img class="image-4" src="<?php bloginfo('template_url')?>/images/logoupaescuela.png">
                  <div class="text-block-4">Institución educativa líder en la formación y capacitación de asociados que dan vida a sus sueños.</div><a class="button-2 ctamod3 w-button" href="http://www.escuelaupa.edu.gt/category/cursos/" target="_blank">Ver cursos</a>
                </div>
              </div>
              <a href="http://www.cooperativaupa.net/plazas" class="mod4 unotromodulo" data-ix="scale-small"></a>
            </div>
            <div class="testimonios">
              <h3 class="tituldetestimonios">Testimonios de personas a las que UPA les cambió la vida</h3>
              <div class="slidertestimonio w-slider" data-animation="slide" data-autoplay="1" data-delay="4000" data-duration="500" data-infinite="1">
                <div class="w-slider-mask">
                  <div class="w-slide">
                    <div class="testimoniotext">Lo mejor de ahorrar es observar sus recompensas, como tu
                      <br>patrimonio, &nbsp;la herencia de tus hijos crece junto
                      <br>a ellos. ¡Es lo mejor!
                      <br>
                      <br>Rosa Maria de Morales
                      <br>Asociado desde el año 2000</div>
                    </div>
                    <div class="w-slide">
                      <div class="testimoniotext">Encontré la mejor tasa de interés para poder realizar el préstamos y comprar mi carro, gracias a UPA he podido hacer mis cosas.
                        <br>
                        <br>Sergio Calderón
                        <br>Asociado desde el año 2010</div>
                      </div>
                      <div class="w-slide">
                      <div class="testimoniotext">Muy buena opción, mi préstamo salió antes de lo indicado, no tuve ningún inconveniente. Lo retiré con cheque de caja que no tuvo ningún costo adicional, el interés es uno de los más bajos del mercado, agencia zona 1 Real del Parque excelente atención, muy agradecida con Dios y con ellos que solventaron mi situación.
                        <br>
                        <br>Edna Gamas.
                        </div>
                      </div>
                    </div>
                    <div class="flech flechizqu w-slider-arrow-left">
                      <div class="iconflec w-icon-slider-left"></div>
                    </div>
                    <div class="flech w-slider-arrow-right">
                      <div class="iconflec w-icon-slider-right"></div>
                    </div>
                    <div class="displaynone w-round w-slider-nav"></div>
                  </div>
                </div>
              </div>
              <div class="seceducacionfinanciera">
                <div class="max960 w-clearfix">
                  <h1 class="tituleduchome">Educación financiera</h1>
                  <div class="todoslosblogs w-clearfix">
                    <?php
                    $co = 0;
                    $query = new WP_Query( array( 'post_type' => 'educacion-financiera', 'posts_per_page'=> 3 ) );
                    while ($query->have_posts()):$query->the_post();
                    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                    ?>
                    <div class="unblogarchivofina w-clearfix" data-ix="hover-solo-img"><img class="imgdeblog" src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>">
                      <div class="fechablog"><span class="detallefecha">May</span> 18,2015</div>
                      <h3 class="heading-3"><?php the_title(); ?></h3><a class="leermashomeblog" href="<?php the_permalink(); ?>">Leer más</a>
                    </div>
                    <?php
                    $co++;
                    endwhile;
                    wp_reset_postdata();
                    ?>
                  </div><a class="link" href="<?php bloginfo('home')?>/educacion-financiera">Ver todo</a>
                </div>
              </div>
            </div>
          </main>
          <?php
          get_footer();
          ?>