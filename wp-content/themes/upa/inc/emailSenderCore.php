<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$fecha = date("Y-m-d H:i:s");

include_once 'mail/class.phpmailer.php';
include_once 'mail/class.pop3.php';
include_once 'mail/class.smtp.php';

function sendSendgridEmail($para1, $para2, $para3, $subject, $body_text, $body_html, $from, $fromName)
{
  $url = 'https://api.sendgrid.com/';
  $user = 'ElCentro';
  $pass = 'ElC3ntr0';
  $json_string = array(

    'to' => array(
      $para1, $para2, $para3
      ),
    'category' => 'test_category'
    );


  $params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'x-smtpapi' => json_encode($json_string),
    'to'        => $para1,
    'subject'   => $subject,
    'html'      => $body_html,
    'text'      => $body_text,
    'from'      => $from,
    );


  $request =  $url.'api/mail.send.json';

// Generate curl request
  $session = curl_init($request);
// Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
  $response = curl_exec($session);
  curl_close($session);

// print everything out
  //print_r($response);
}


//************FORMULARIO CONTACTO**************
if($_REQUEST['contacto'] != ''){
  $wpdb->insert('contacto',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'nombre' => $_REQUEST['nombre'],
      'correo' => $_REQUEST['correo'],
      'telefono'=> $_REQUEST['telefono'],
      'asunto'=> $_REQUEST['asunto'],
      'agencia' => $_REQUEST['agencia'],
      'mensaje' => $_REQUEST['mensaje']
      ),
    array(
      '%d',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com, info@cooperativaupa.com, cmunoz@cooperativaupa.com, analucia.juarez@elcentrodemarketing.com, mercadeoupamicoope@gmail.com';
  $toaddress1 = 'cmunoz@cooperativaupa.com';
  $toaddress2 = ' ';
  $toaddress3 = ' ';
  $subject = 'UPA Contácto';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #3ea43a; "><td colspan="2">
    <h3 style="text-align: center; background: #3ea43a; color:#fff; ">CONTACTO</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Correo:</td><td>' . $_REQUEST['correo'] .'</td></tr>
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
  <tr><td>Asunto:</td><td>' . $_REQUEST['asunto'] .'</td></tr>
  <tr><td>Agencia:</td><td>' . $_REQUEST['agencia'] .'</td></tr>
  <tr><td>Mensaje:</td><td>' . $_REQUEST['mensaje'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "contactoupa@cooperativaupa.com", "UPA Contacto");
echo 10;
}

//************FORMULARIO ASESORIA**************
if($_REQUEST['producto'] != ''){
  $wpdb->insert('producto',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'nombre' => $_REQUEST['nombre'],
      'correo'=> $_REQUEST['correo'],
      'telefono'=> $_REQUEST['telefono'],
      'agencia' => $_REQUEST['agencia'],
      'producto' => $_REQUEST['product'],
      'mensaje' => $_REQUEST['mensaje']
      ),
    array(
      '%d',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com,  info@cooperativaupa.com, cmunoz@cooperativaupa.com, mercadeoupamicoope@gmail.com';
  $toaddress1 = 'cmunoz@cooperativaupa.com';
  $toaddress2 = ' ';
  $toaddress3 = ' ';
  $subject = 'Mensaje de UPA PRODUCTO';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #164479; "><td colspan="2">
    <h3 style="text-align: center; background: #164479; color:#fff; ">SOLICITUD DE PRODUCTO</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Correo:</td><td>' . $_REQUEST['correo'] .'</td></tr>
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
  <tr><td>Agencia:</td><td>' . $_REQUEST['agencia'] .'</td></tr>
  <tr><td>Producto:</td><td>' . $_REQUEST['product'] .'</td></tr>
  <tr><td>Mensaje:</td><td>' . $_REQUEST['mensaje'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "productoupa@cooperativaupa.com", "UPA PRODUCTO");
echo 10;
}



//************FORMULARIO ACTIVO EXTRA**************
if($_REQUEST['activoform'] != ''){
  $wpdb->insert('activo',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'nombre' => $_REQUEST['nombre'],
      'correo'=> $_REQUEST['correo'],
      'telefono'=> $_REQUEST['telefono'],
      'activo' => $_REQUEST['activo']
      ),
    array(
      '%d',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com, info@cooperativaupa.com, cmunoz@cooperativaupa.com, bpalala@cooperativaupa.com, analucia.juarez@elcentrodemarketing.com, mercadeoupamicoope@gmail.com';
   $toaddress1 = 'bpalala@cooperativaupa.com';
  $toaddress2 = 'cmunoz@cooperativaupa.com';
  $toaddress3 = ' ';
  $subject = 'Mensaje de UPA Activo';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #526781; "><td colspan="2">
    <h3 style="text-align: center; background: #526781; color:#fff; ">ACTIVO EXTRAORDINARIO</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Correo</td><td>' . $_REQUEST['correo'] .'</td></tr>  
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
  <tr><td>Activo:</td><td>' . $_REQUEST['activo'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "activoupa@cooperativaupa.com", "UPA ACTIVO EXTRA");

echo 10;
}



//************UTILIZAR COTIZADOR**************
if($_REQUEST['cotizar'] != ''){
  $wpdb->insert('cotizador',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'nombre' => $_REQUEST['nombre'],
      'correo' => $_REQUEST['correo'],
      'telefono'=> $_REQUEST['telefono']  
      ),
    array(
      '%d',
      '%s',
      '%s',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, info@cooperativaupa.com, cmunoz@cooperativaupa.com, emachapin@gmail.com';
  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com, analucia.juarez@elcentrodemarketing.com, mercadeoupamicoope@gmail.com';
  $toaddress1 = ' ';
  $toaddress2 = ' ';
  $toaddress3 = ' ';
  $subject = 'UPA Utilizar Cotizador';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #3ea43a; "><td colspan="2">
    <h3 style="text-align: center; background: #3ea43a; color:#fff; ">Utilizar Cotizador</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Correo:</td><td>' . $_REQUEST['correo'] .'</td></tr>
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
//sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "cotizadorupa@cooperativaupa.com", "UPA COTIZADOR");
echo 100;
}
?>
