<?php
	require_once('easily.php');
	
	
	// Procesamiento del formulario de contacto
	if($_POST['consulta']=='contactenos'){
		
		// Determinación de variables
		$nombre = strtoupper($_POST['nombre']);
		$apellido = strtoupper($_POST['apellido']);
		$telefono = strtoupper($_POST['telefono']);
		$email = strtolower($_POST['email']);
		$tipo = $_POST['tipo'];
		$mensaje = $_POST['mensaje'];
		
		// Sentencia SQL
		$sql = "
			INSERT INTO 
				contactos (
					nombre,
					apellido,
					telefono,
					email,
					tipo,
					mensaje,
					optin
				) VALUES (
					'$nombre',
					'$apellido',
					'$telefono',
					'$email',
					'$tipo',
					'$mensaje',
					'1'
				)
			";
		
		$q = mysqli_query($con,$sql);
		
		if(!$q){
			echo "Se ha presentado un error procesando su solicitud. Por favor inténtelo de nuevo.";
		}else{			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$url=URL_NOTIFICACION;
			$html=file_get_contents($url);
			$contenido="
				<p>A continuación la información relacionada:</p>
				<p>
					<b>Nombre:</b><br />$nombre
				</p>
				<p>
					<b>Teléfono:</b><br />$telefono
				</p>
				<p>
					<b>Email:</b><br />$email
				</p>
				<p>
					<b>¿En qué se encuentra interesado?:</b><br />$tipo
				</p>
				<p>
					<b>Mensaje:</b><br />$mensaje
				</p>
			";
			$html=str_replace("{{contenido}}",$contenido,$html);       
			$mail = new PHPMailer();
			$mail->From = '$custom_from';
			$mail->FromName = utf8_decode(FROM_NAME);
			$mail->Subject = "$custom_subject";
			$mail->Body = utf8_decode($html);
			$mail->IsHTML(true);
			$mail->AddAddress("$receiving_email_address");
			$mail->AddBCC(EMAIL_NOTIFICACIONES);		
		    $mail->AddReplyTo($email);
			if(!$sent_mail= $mail->Send()){
				echo "Se ha presentado un error procesando su solicitud. Por favor inténtelo de nuevo.";
			}else{
				echo "Gracias por escribirnos $nombre. Hemos recibido su mensaje y pronto estaremos en contacto.";
			}
		}

	}
	
	