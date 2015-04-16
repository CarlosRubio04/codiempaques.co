<?php 
	$db_server = "localhost";
	$db_user = "desarrol";
	$db_password = '`A2/HH!0[[';
	$db_name = "desarrol_dezea";
	
	require_once('conn.php'); 
	
	require_once('phpmailer.php');
	
	///////////////// Opciones Editables /////////////////////

	$receiving_email_address = "camilo@closerdesign.co";  // Establezca la dirección de correo electrónico donde desea recibir los mensajes.

	$custom_subject = "Nueva Solicitud desde [Codiempaques.com]"; // Cambie la línea de asunto del correo electrónico por su elección.
	
	$custom_from = "no-reply@codiempaques.com"; // este es el correo remitente.
	
	define(URL_NOTIFICACION,"http://desarrollo.closerdesign.co/cd/email/index.html");
	
	define(EMAIL_NOTIFICACIONES,"camilo@closerdesign.co"); // este deberia ser el mail con el que se hacen las pruebas
	
	define(FROM_NAME,"Webmaster Dezea"); // este es el nombre del remitente
	/////////////////////////////////////////////////////////
?>

