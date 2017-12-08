<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$fecha = date("Y-m-d H:i:s");

function sendSendgridEmail($para1, $para2, $para3, $subject, $body_text, $body_html, $from, $fromName)
{
	$url = 'https://api.sendgrid.com/';
	$user = 'ElCentro';
	$pass = '31C3ntr0';
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
	print_r($response);
}

$toaddress1 = 'sergio.calderon@elcentrodemarketing.com';
$toaddress2 = 'emachapin@gmail.com';
$toaddress3 = ' ';
$subject = 'UPA Contácto';
$message = '<table width="300" border="1" style="color: #000; ">
<tr style="background: #3ea43a; "><td colspan="2">
	<h3 style="text-align: center; background: #3ea43a; color:#fff; ">CONTACTO</h3>
</td></tr>
<tr><td>Nombre:</td><td>Juan Perez</td></tr>
<tr><td>Correo:</td><td>juan@gmail.com</td></tr>
<tr><td>Teléfono:</td><td>00000000</td></tr>
<tr><td>Asunto:</td><td>Esto es un Correo</td></tr>
<tr><td>Agencia:</td><td>ESKALA</td></tr>
<tr><td>Mensaje:</td><td>Hola, quiero que esto funcione</td></tr>
</table>';
sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "upacontacto@cooperativaupa.net", "UPA Contacto");

?>
