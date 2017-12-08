<?php

the_post();

get_header();

$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

$tel = get_post_meta( get_the_ID(), 'wpcf-telefono', true );

$dire = get_post_meta( get_the_ID(), 'wpcf-direccion', true );

$hora = get_post_meta( get_the_ID(), 'wpcf-horario', true );

$latitud = get_post_meta( get_the_ID(), 'wpcf-latitud', true );

$longitud = get_post_meta( get_the_ID(), 'wpcf-longitud', true );

?>

<div class="content w-clearfix">

  <div class="agenciasinternacont contactocontent w-clearfix">

    <div class="tituldeagencias tituldecont w-clearfix">

      <h1 class="tituldecontacto"><?php the_title(); ?></h1>

    </div>

    <div class="max960 w-clearfix">

      <div class="datosdeagencia w-clearfix">

        <img class="imagendeagencia" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">

        <div class="datosdeagenciain w-clearfix">

          <div class="undatodela w-clearfix">

            <div class="icontel textdetienda">Teléfono:</div>
            <?php
            $telcall = split (" ", $tel);
            //var_dump($telcall);
            ?>
            <a href="tel:<?php echo $telcall[1]; ?>" class="datoagenc datoagence pbxtel textdetienda"><?php echo $tel; ?></a>

          </div>

          <div class="undatodela w-clearfix">

            <div class="direc textdetienda">Dirección:</div>

            <div class="datoagenc textdetienda"><?php echo $dire; ?></div>

          </div>

          <div class="ultimagenc undatodela w-clearfix">

            <?php if($post->ID == 183 || $post->ID == 182){

              echo '<div class="horarios textdetienda">Horario de Atención:</div>';

            } else {

              echo '<div class="horarios textdetienda">Horario oficina:</div>';

            } ?>

            <div class="datoagenc direcci textdetienda"><?php echo $hora; ?></div>

          </div>

        </div>

      </div>



      <div class="latienda">

        <div class="lat" style="display: none;"><?php echo $latitud; ?></div>

        <div class="lon" style="display: none;"><?php echo $longitud; ?></div>

        <div class="tit" style="display: none;"><?php the_title(); ?></div>

        <div class="con" style="display: none;"><?php echo $dire.'</br>&nbsp;</br>'.$tel; ?></div>

        <div class="urlmarker" style="display: none;"><?php bloginfo("template_url"); ?>/images/pinupa.png</div>

      </div>



      <div id="elmapa" class="mapagoogle w-clearfix"></div>



    </div>

  </div>

</div>

<script type="text/javascript">

 var $ = jQuery.noConflict();

 $(document).ready(function () { 

//MAPAS AGENCIAS

google.maps.event.addDomListener(window, 'load', init);

function init() {

 var mapOptions = {

  zoom: 15,

      center: new google.maps.LatLng(14.618813, -90.520593) // Guaterra

    };

    var mapElement = document.getElementById('elmapa');

    var map = new google.maps.Map(mapElement, mapOptions);

    //map.setMapTypeId(google.maps.MapTypeId.SATELLITE);







    //SE CREA EL MARCADOR CON LA IMAGEN Y COORDENADAS

    function crearMarcadorint(lat, longi, mark) {

      var locationint = new google.maps.LatLng(lat, longi);

      var iconoUrlint = "http://elcentrodemarketing.com/upa/wp-content/themes/upa/images/pinupa.png ";

      var marker = new google.maps.Marker({

        position: locationint,

        map: map,

        icon: iconoUrlint

      });

      return marker;

    }





    //SE CREA EL CONTENIDO DEL MARCADOR

    function addInfoWindow(marker, title, contenido,  show) {

      var infoWindow;

      infoWindow = new google.maps.InfoWindow({

        minWidth: 200,

        content: '<div class="globito" style="width:250px; height:180px; "><h4>'+title+'</h4><div style="width:150px;">'+contenido+'</div></div>'

      });



      if (show == 'true'){

        setTimeout(function() {

          infoWindow.open(map, marker);

        }, 500);

      }



      google.maps.event.addListener(marker, 'click', function() {

        infoWindow.open(map, marker);

        setTimeout(function() {

          infoWindow.close();

          // map1.setCenter(14.557686, -90.748834);

        }, 30000);

      });

    }



    //CREAR MARCADOR

    var lat = $( '.latienda' ).find('.lat').text();

    var lon = $( '.latienda' ).find('.lon').text();

    var tit = $( '.latienda' ).find('.tit').text();

    var cont = $( '.latienda' ).find('.con').text();

    var mrk = $( '.latienda' ).find('.urlmarker').text();







    var location = new google.maps.LatLng(lat, lon);

    map.setCenter(location, 20);

    map.setZoom(16);

    var INTERNA = crearMarcadorint(lat, lon, mrk);

    addInfoWindow(INTERNA, tit, cont);

    var infoWindow = new google.maps.InfoWindow({

      content: '<div class="globito" style="width:250px; height:50px; "><h4>'+tit+'</h4></div>'

    });



    infoWindow.open(map, INTERNA);

    setTimeout(function() {

      infoWindow.close();

    }, 8000);

  }

});

</script>

<?php

get_footer();

?>