var $ = jQuery.noConflict();
$(document).ready(function () {

//MENU ANIMACIÓN
$( ".cono, .sub-cono" ).mouseover(function() {

 $( "#menu_prin" ).addClass( "submenumove" );
 $('.sub-cono').addClass('displayb');

}).mouseout(function() {

 $( "#menu_prin" ).removeClass( "submenumove" );
 $('.sub-cono').removeClass('displayb');

});


$( ".product-serv, .submenuproduc" ).mouseover(function() {

 $( "#menu_prin" ).addClass( "submenumove" );
 $('.submenuproduc').addClass('displayb');

}).mouseout(function() {

 $( "#menu_prin" ).removeClass( "submenumove" );
 $('.submenuproduc').removeClass('displayb');

});


  //COTIZADOR

  
  //verde> #96dbb3
  // azul> rgba(33, 150, 243, 0.43)
  // rojo>  rgba(244, 67, 54, 0.58);

  //FUNCION RANGO DE MONTO SOLICITADO
  function RestriccionCampo(campo, min, max, clase, event, text) {
    var monto = $(campo).val();
    monto = parseInt(monto);
    if( monto >= 0){
      if(monto < min || monto > max){
        if(event == "focusout"){
          if($(campo).attr('alert') == "false"){
            $(campo).attr('alert', true);
            $( "#las-alertas" ).append(text);  
          } 
        } else {
          $('.'+clase).remove();
          $(campo).attr('alert', true);
          $( "#las-alertas" ).append(text);
          $('html, body').animate({
            scrollTop: $(".lasalertas").offset().top
          }, 1000);
        }
      } else {
        $(campo).attr('alert', false);
        $('.'+clase).remove();
        
      }
    } else {
    //console.log('monto diferente');
  }
}

//FUNCION PLAZO EN PRESTAMO ATOMÁTICOS
function PlazoAutomatico(campo, min1, max1, min2, max2, clase, event, text1, text2) {
  var plazo = $(campo).val();
  var monto = $('#monto-solicitado').val();
  if(plazo != 0 ){
    if(monto <= 100000){
      if(plazo < min1 || plazo > max1){
        if(event == "focusout"){  
         if($(campo).attr('alert') == "false"){
          $(campo).attr('alert', true);
          $( "#las-alertas").append(text1);  
        }  
      } else {
       $('.'+clase).remove();
       $(campo).attr('alert', true);
       $( "#las-alertas").append(text1); 
     }
   } else {
    $(campo).attr('alert', false);
    $('.'+clase).remove();      
  }   
} else {
  if(plazo < min2 || plazo > max2){ 
    if(event == "focusout"){  
      if($(campo).attr('alert') == "false"){
        $(campo).attr('alert', true);
        $( "#las-alertas" ).append(text2);  
      } 
    } else{
      $('.'+clase).remove();
      $(campo).attr('alert', true);
      $( "#las-alertas" ).append(text2);
    }
    $('html, body').animate({
      scrollTop: $(".lasalertas").offset().top
    }, 1000);
  } else {
    $(campo).attr('alert', false);
    $('.'+clase).remove();

  }
}
}
}

//FUNCION DE 70%
function SiAlcanza(){
 var p_ingre = $('#ingresos-mensuales').val();
 p_ingre = Math.round(p_ingre * 100) / 100;
 var p_gast = $('#gastos-mensuales').val();
 p_gast = Math.round(p_gast * 100) / 100;
 var monts = $('#monto-solicitado').val();
 monts = Math.round(monts * 100) / 100;
 var plazs = $('#plazo-en-meses').val();
 plazs = Math.round(plazs * 100) / 100;
 var interesz = parseInt($('#interes-sobre-saldos').val());
 interesz = interesz/100;
 interesz = Math.round(interesz * 100) / 100;
 var d = new Date();
 var n = d.getFullYear();
 var anios = parseInt(n);
 var vici = 365;
 if (anios == 2020 || anios == 2024 || anios == 2028 || anios == 2032 || anios == 2036){
  vici = 366;
}
intere = (monts * interesz * 31)/vici
var capi = monts/plazs
var cuotaz = capi+intere+10;
var dif =  (p_ingre -  p_gast)*0.7
//console.log('('+p_ingre+'-'+ p_gast+')*0.7');
//console.log(dif+'<'+cuotaz);
if( p_ingre > 0){
  if(dif < cuotaz){ 
    if($('#ingresos-mensuales').attr('alert2') == "false"){
     $( "#las-alertas").append('<li class="unaalerta noalcanza">De acuerdo a los datos proporcionados, en estos momentos no califica al monto y plazo solicitado, favor ingresar un monto menor o un plazo mayor.</li>');   
     $('#ingresos-mensuales').attr('alert2', true);
   } 
   $('html, body').animate({
    scrollTop: $(".lasalertas").offset().top
  }, 1000);
 } else {
   $('#ingresos-mensuales').attr('alert2', false);
   $('.noalcanza').remove();
 }
} 
}
//FUNCION DE COMA DE MILES
function Miles(numero){
  var cuotas = numero.toString();
  var cuot = cuotas.split(".");
  //console.log('1) '+cuot[1]);
  var numcaract = cuot[0].split("");
  var cant = numcaract.length;
  var nuevocuot = "";
  var rest = cant-3;
  for (li = 0; li < cant; li++) {
    if(cant > 3){
      if(rest == li){
        nuevocuot += ',';
      }
    }
    nuevocuot += numcaract[li];
  }
  if(cuot[1]){
    var numdecim = cuot[1].length;
    if(numdecim == 1){
      var variable = nuevocuot+'.'+cuot[1]+'0';
    } else {
      var variable = nuevocuot+'.'+cuot[1];
    } 
  } else {
    var variable = nuevocuot+'.00';
  }
  return variable;
}


function Tabla(){
//tabla de amortización
var lista = $("#las-alertas li").size();
var mont = $('#monto-solicitado').val();
var plaz = $('#plazo-en-meses').val();
var ingre = $('#ingresos-mensuales').val();
var gast = $('#gastos-mensuales').val();
texto = $('#interes-sobre-saldos').val();
console.log('Interes= '+ texto);
texto = texto.substring(0,texto.length-1);
var intere = parseFloat(texto);
intere = intere/100;
var camp0 = plaz*mont*ingre*gast
var cap = mont/plaz
cap = Math.round(cap * 100) / 100;
var d = new Date();
var n = d.getFullYear();
var anio = parseInt(n);
var aport = 10.00
var vi = 365;
if (anio == 2020 || anio == 2024 || anio == 2028 || anio == 2032 || anio == 2036){
  vi = 366;
}
if(lista == 0){
  if(camp0 != 0 ){
    $('.latablaborde').css('display', 'block');
    $('.unacuota').remove();
    var saldo = mont;
    var intetot = 0;
    var cuota = 0;
    for (i = 0; i < plaz; i++) {    
      inte = (saldo * intere * 31)/vi
      inte = Math.round(inte * 100) / 100;
      var total = cap+inte+aport;
      total = Math.round(total * 100) / 100;
      saldo = Math.round(saldo * 100) / 100;  

      saldo_text = Miles(saldo);
      cap_text = Miles(cap);
      inte_text = Miles(inte);
      total_text = Miles(total);
      $('.latablaborde')
      .append('<div class="unacuota w-clearfix"><div class="c1">'+(i+1)+'</div><div class="c1 c2 sal"> Q '+saldo_text+'</div><div class="c1 c2"> Q '+cap_text+'</div><div class="c1 c2 c3">Q '+inte_text+'</div><div class="c1 c2 c4">Q '+aport+'.00</div><div class="c1 c2 c5">Q '+total_text+'</div></div>'); 
      saldo = saldo - cap;
      intetot = intetot + inte
      intetot = Math.round(intetot * 100) / 100;
      if(i == 0){
        cuota = total
      }
    }

    var tasa_efectiva = ((intetot/mont)/(plaz/12))*100  
    tasa_efectiva = Math.round(tasa_efectiva * 100) / 100;
        //((4650,00000000001/10000)/(72/12))*100
        var interestotal = Miles(intetot);
        $('#intereses-pago').val('Q '+interestotal);
        var quoat = Miles(cuota);
        $('#cuota-pagar').val('Q '+quoat);
        $('#tasa-efectiva').val(tasa_efectiva+'%');
        $( "#las-alertas").append('<li class="unaalerta textok">De acuerdo a los datos proporcionados en estos momentos precalifica al préstamo seleccionado, es importante señalar que se realizará un análisis de acuerdo a la papelería que presente y a la información que complete. Los resultados de este pre calificador, muestran los datos generados en base a los datos ingresados por el usuario. La información facilitada y procesada son únicamente de carácter informativo y no deben utilizarse o considerarse como un análisis final para el otorgamiento de un préstamo. Cooperativa UPA, R.L. no se responsabiliza de los daños y perjuicios causados por decisiones tomadas en base al resultado de este pre calificador.</li>');
        $('.lasalertas').css('background-color', '#96dbb3');
        //Bajar animación
        $('html, body').animate({
          scrollTop: $(".latablaborde").offset().top
        }, 1000);
      } else {
       $('.latablaborde').css('display', 'none');
     }
   } else {
    $('.latablaborde').css('display', 'none');
  }

}

//EVENTO SOLO FOCUS INGRESOS Y GASTOS
$('.inputingas').focusout(function() {
  var a_ingre = $('#ingresos-mensuales').val();
  a_ingre = Math.round(a_ingre * 100) / 100;
  var a_gast = $('#gastos-mensuales').val();
  a_gast = Math.round(a_gast * 100) / 100;

  if(a_ingre <= a_gast ){  
    if($('#gastos-mensuales').attr('alert2') == "false"){
      $( "#las-alertas").append('<li class="unaalerta txingast">Para optar a un prestamo tus gastos no pueden ser mayor ni iguales a tus ingresos mensuales</li>');  
      $('#gastos-mensuales').attr('alert2', true);
    } 
  } else {
   $('#gastos-mensuales').attr('alert2', false);
   $('.txingast').remove();
 }

});


//EVENTO CAMBIO DE DATO
/*$('.inputcoti').focusout(function() {
  var tipopres = $('#tipo-de-prestamo').val();
  switch(tipopres) {
    case "presta-facil":
    RestriccionCampo('#monto-solicitado', 1000, 50000, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q1,000.00 a Q50,000.00</li>');
    RestriccionCampo('#plazo-en-meses', 6, 60,'txplazo', 'focusout', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 60 meses para este préstamo</li>'); 
    RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
    RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
    SiAlcanza();
    break;

    case "prestamo-fiduciario":
    RestriccionCampo('#monto-solicitado', 1000, 200000, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q1,000.00 a Q200,000.00</li>'); 
    RestriccionCampo('#plazo-en-meses', 6, 120, 'txplazo', 'focusout', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 120 meses para este préstamo</li>'); 
    RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
    RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
    SiAlcanza();
    break;

    case "prestamo-hipotecario":
    RestriccionCampo('#monto-solicitado', 5000, 999999999, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe ser un mínimo de Q5,000.00 y no exceder las 9 cifras</li>'); 
    RestriccionCampo('#plazo-en-meses', 6, 240, 'txplazo', 'focusout', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 240 meses para este préstamo</li>'); 
    RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
    RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
    SiAlcanza();
    break;

    case "prestamo-automatico":
    $('.txingast').remove();
    $('.noalcanza').remove();
    RestriccionCampo('#monto-solicitado', 200, 10000000, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q200.00 a Q10.000,000.00</li>');
    PlazoAutomatico('#plazo-en-meses', 6, 120, 6, 240, 'txplazo', 'focusout','<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 120 meses para este préstamo</li>', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 240 meses para este préstamo</li>'); 
    break;

    default: 
  }



  var numli = $("#las-alertas li").size();
  if(numli == 0){
    $('.lasalertas').css('background-color', '#96dbb3');
  } else {
    $('.lasalertas').css('background-color', 'rgba(244, 67, 54, 0.58)');
    $('.textok').remove();
  }

  Tabla();            

});*/

//EVENTO BOTON COTIZAR
$('#cotizarr').click(function() {
  var tipopres = $('#tipo-de-prestamo').val();
  switch(tipopres) {
    case "presta-facil":
    RestriccionCampo('#monto-solicitado', 1000, 75000, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q1,000.00 a Q75,000.00</li>');
    RestriccionCampo('#plazo-en-meses', 6, 60,'txplazo', 'focusout', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 60 meses para este préstamo</li>'); 
    RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
    RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
    SiAlcanza();
    break;

    case "prestamo-fiduciario":
    RestriccionCampo('#monto-solicitado', 1000, 200000, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q1,000.00 a Q200,000.00</li>'); 
    RestriccionCampo('#plazo-en-meses', 6, 120, 'txplazo', 'focusout', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 120 meses para este préstamo</li>'); 
    RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
    RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
    SiAlcanza();
    break;

    case "prestamo-hipotecario":
    RestriccionCampo('#monto-solicitado', 5000, 999999999, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe ser un mínimo de Q5,000.00 y no exceder las 9 cifras</li>'); 
    RestriccionCampo('#plazo-en-meses', 6, 240, 'txplazo', 'focusout', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 240 meses para este préstamo</li>'); 
    RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
    RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
    SiAlcanza();
    break;

    case "prestamo-automatico":
    $('.txingast').remove();
    $('.noalcanza').remove();
    RestriccionCampo('#monto-solicitado', 200, 10000000, 'txmonto', 'focusout', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q200.00 a Q10.000,000.00</li>');
    PlazoAutomatico('#plazo-en-meses', 6, 120, 6, 240, 'txplazo', 'focusout','<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 120 meses para este préstamo</li>', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 240 meses para este préstamo</li>'); 
    break;

    default: 
  }



  var numli = $("#las-alertas li").size();
  if(numli == 0){
    $('.lasalertas').css('background-color', '#96dbb3');
  } else {
    $('.lasalertas').css('background-color', 'rgba(244, 67, 54, 0.58)');
    $('.textok').remove();
  }

  Tabla();  
});

  //CAMBIO DE PRESTAMO
  $( "#tipo-de-prestamo" ).change(function() {
    var pres = $(this).val();
    switch(pres) {
      case "presta-facil":
      RestriccionCampo('#monto-solicitado', 1000, 75000, 'txmonto', 'change', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q1,000.00 a Q75,000.00</li>'); 
      RestriccionCampo('#plazo-en-meses', 6, 60, 'txplazo', 'change', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 60 meses para este préstamo</li>');         
      RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
      RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');
      $('#filagastos, #filaingresos').css('display','block');
      $('#interes-sobre-saldos').val('15%');
      SiAlcanza();
      Tabla();
      break;

      case "prestamo-fiduciario":
      RestriccionCampo('#monto-solicitado', 1000, 200000, 'txmonto', 'change', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q1,000.00 a Q200,000.00</li>'); 
      RestriccionCampo('#plazo-en-meses', 6, 120, 'txplazo', 'change', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 120 meses para este préstamo</li>'); 
      RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
      RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');

      $('#filagastos, #filaingresos').css('display','block');
      $('#interes-sobre-saldos').val('15%');
      SiAlcanza();
      Tabla();
      break;

      case "prestamo-hipotecario":
      RestriccionCampo('#monto-solicitado', 5000, 999999999, 'txmonto', 'change', '<li class="unaalerta txmonto">El monto solicitado debe ser un mínimo de Q5,000.00 y no exceder las 9 cifras</li>'); 
      RestriccionCampo('#plazo-en-meses', 6, 240, 'txplazo', 'change', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 240 meses para este préstamo</li>'); 
      RestriccionCampo('#ingresos-mensuales', 1000, 999999999, 'txingreso', 'focusout', '<li class="unaalerta txingreso">El ingreso mensual no puede ser menor a Q1,0000.00 ni exceder las 9 cifras</li>');
      RestriccionCampo('#gastos-mensuales', 500, 999999999, 'txgasto', 'focusout', '<li class="unaalerta txgasto">Los gastos mensuales no puede ser menor a Q500.00 ni exceder las 9 cifras</li>');

      $('#filagastos, #filaingresos').css('display','block');
      $('#interes-sobre-saldos').val('12.5%');
      SiAlcanza();
      Tabla();
      break;

      case "prestamo-automatico":
      $('.txingast').remove();
      $('.noalcanza').remove();
      RestriccionCampo('#monto-solicitado', 200, 10000000, 'txmonto', 'change', '<li class="unaalerta txmonto">El monto solicitado debe estar en un rango de Q200.00 a Q10.000,000.00</li>'); 
      PlazoAutomatico('#plazo-en-meses', 6, 120, 6, 240, 'txplazo', 'change', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 120 meses para este préstamo</li>', '<li class="unaalerta txplazo">El plazo en meses debe estar en un rango de 6 a 240 meses para este préstamo</li>'); 
      $('#filagastos, #filaingresos').css('display','none');
      $('.txingreso').remove();
      $('.txgasto').remove();
      $('#ingresos-mensuales').val(2);
      $('#gastos-mensuales').val(1);
      $('#interes-sobre-saldos').val('8.75%');
      Tabla();
      break;

      default:

    }
    var numli = $("#las-alertas li").size();
    if(numli == 0){
      $('.lasalertas').css('background-color', '#96dbb3');
    } else {
      $('.lasalertas').css('background-color', 'rgba(244, 67, 54, 0.58)');
      $('.textok').remove();
    }
    
  });

//ENVIO DE FORMULARIO VALIDADOS
function reset() {
  $("#toggleCSS").attr("href", templateurl + "/css/alertify.default.css");
  alertify.set({
    labels: {
      ok: "OK",
      cancel: "Cancel"
    },
    delay: 5000,
    buttonReverse: false,
    buttonFocus: "ok"
  });
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (!regex.test(email)) {
    return false;
  } else {
    return true;
  }
}

function Validadyenviar(boton, form) {
  $(boton).click(function () {
    //console.log('clic');
    $( form+' .val' ).each(function( index ) {
      var val = $(this).val();
      var id = $(this).attr('id');
      var type = $(this).attr('type');
      var name = $(this).attr('name');
    //console.log('val-'+val);
    switch(type) {
      case 'text':
      if (val.length < 1 ) {
        reset();
        alertify.error("Ingrese su "+name);
        return false; 
      }
      break;

      case 'number':
      if (val.length < 1 ) {
        reset();
        alertify.error("Ingrese su "+name);
        return false; 
      } else if ($.isNumeric(val) == false ) {
        reset();
        alertify.error("Su teléfono es Invalido.");
        return false;
      }
      break;

      case 'email':
      if (val.length < 1 ) {
        reset();
        alertify.error("Ingrese su "+name);
        return false; 
      } else if (IsEmail(val) == false) {
        reset();
        alertify.error("Correo Invalido.");
        return false;
      }
      break;

      case 'captcha':
      if($('#g-recaptcha-response').val() == '')  {
        reset();
        alertify.error("Complete la casilla de verificación.");
        return false;

      }
      break;

      case 'button':
      var contform = $(form).serialize();
      //console.log(contform);
      $.ajax({
        type: "POST",
        url: templateurl + "/inc/emailSenderCore.php",
        data: contform
      })
      .done(function (data) {
          console.log(data);
          if (data == 10) {
            $("input[type=text], textarea, input[type=email], input[type=number]").val("");
            reset();
            alertify.success('¡Gracias por comunicarse, enseguida estaremos en contacto!');
            return false;
          } else if (data == 100) {
            $('.elcotizador').removeClass('cotz');
            $('.contentform').addClass('cotz');
            reset();
            alertify.success('¡Gracias, Ahora puedes utilizar el COTIZADOR!');
          }
        });
      break;

      default:
    }


  });
  });
}
//Validadyenviar(boton, form)
Validadyenviar('#enviar_contacto', '#contacto');
Validadyenviar('#enviar_formulario', '#form-producto');
Validadyenviar('#enviar_activo', '#form-activo');
Validadyenviar('#enviar_plaza', '#form-plaza');
Validadyenviar('#utilizarcotbot', '#utilizarcot');

$("[data-fancybox]").fancybox({
  iframe : {
    css : {
      height : '100%'
    }
  }
});

//FUNCIONALIDAD DE EDUCACIÓN FINANCIERA
$( "#blogcategory" ).change(function() {
  var categoria = $(this).val();
  //alert(cat);
  $.ajax({
    type: "POST",
    url: templateurl + "/inc/blog.php",
    data: { cat: categoria}
  })
  .done(function (data) {
    //alert(data);
    $('#todoslosblogs').html(data);
  });

});

//Cargar más
$( "#botdecargarmas" ).click(function() {
  var cate = $('#blogcategory').val();
 var size = $(".blogarchiv").size();
  $.ajax({
    type: "POST",
    url: templateurl + "/inc/blog.php",
    data: { func: 'mas', cant: size, cat: cate}
  })
  .done(function (data) {
    if(data){
      alert(data);
    $('.otrosblogs').append(data);
    } else {
      alert('sindata');
      $('.botdecargarmas').hide();
    }
  });

});


});