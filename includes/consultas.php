<?php
    require_once('conn.php');
    require_once('phpmailer.php');
    
    $interaccion = array(
    	"1"=>"Cotización",
    	"2"=>"Información",
    	"3"=>"Servicio al Cliente",
    	"4"=>"Eventos",
    	"5"=>"Sugerencias",
    	"6"=>"Trabaje con nosotros"
    	
    );
    
    // Procesamiento del formulario de contacto
    if($_POST['consulta']=='contactenos'){
    	
    	// Determinación de variables
    	$tipo = $_POST['tipo'];
    	$empresa = strtoupper($_POST['empresa']);
    	$nombre = strtoupper($_POST['nombre']);
    	$apellido = strtoupper($_POST['apellido']);
    	$cargo = strtoupper($_POST['cargo']);
    	$email = strtolower($_POST['email']);
    	$telefono = strtoupper($_POST['telefono']);
    	$celular = strtoupper($_POST['celular']);
    	$ciudad = strtoupper($_POST['ciudad']);
    	$asunto = strtoupper($_POST['asunto']);
    	$mensaje = $_POST['mensaje'];
    	
    	// Agrupación de los campos adicionales
    	$detalles = implode(") (", array('('."Empresa: ".$empresa,"Cargo: ".$cargo,"Celular: ".$celular,"Ciudad: ".$ciudad,"Asunto: ".$asunto,"Mensaje: ".$mensaje.')'));
    	
    	// Sentencia SQL
    	$sql = "
    		INSERT INTO 
    			contactos (
    				nombre,
    				apellido,
    				email,
    				telefono,
    				interaccion,
    				detalles,
    				optin
    			) VALUES (
    				'$nombre',
    				'$apellido',
    				'$email',
    				'$telefono',
    				'$tipo',
    				'$detalles',
    				'1'
    			)
    		";
    	
    	$q = mysqli_query($con,$sql);
    	
    	if(!$q){
    		echo "Se ha presentado un error procesando su solicitud. Por favor inténtelo de nuevo.";
    	}else{			
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    		$url='http://www.ilpingenieria.com/email/index.html';
    		$html=file_get_contents($url);
    		$contenido="
    			<p>A continuación la información relacionada:</p>
    			<p>
    				<b>Tipo:</b><br />$interaccion[$tipo]
    			</p>
    			<p>
    				<b>Empresa:</b><br />$empresa
    			</p>
    			<p>
    				<b>Nombre:</b><br />$nombre
    			</p>
    			<p>
    				<b>Apellido:</b><br />$apellido
    			</p>
    			<p>
    				<b>Cargo:</b><br />$cargo
    			</p>
    			<p>
    				<b>Email:</b><br />$email
    			</p>
    			<p>
    				<b>Teléfono:</b><br />$telefono
    			</p>
    			<p>
    				<b>Celular:</b><br />$celular
    			</p>
    			<p>
    				<b>Ciudad:</b><br />$ciudad
    			</p>
    			<p>
    				<b>Mensaje:</b><br />$mensaje
    			</p>
    		";
    		$html=str_replace("{{contenido}}",$contenido,$html);       
    		$mail = new PHPMailer();
    		$mail->From = 'no-reply@ilpingenieria.com';
    		$mail->FromName = utf8_decode('Webmaster ILPINGENIERIA.COM');
    		$mail->Subject = utf8_decode($interaccion[$tipo].": ".$asunto);
    		$mail->Body = utf8_decode($html);
    		$mail->IsHTML(true);
    		$mail->AddAddress('gerenciacomercial@ilpingenieria.com');
    		$mail->AddAddress('diana.laverde@ilpingenieria.com');
    		$mail->AddBCC('backup@esquemacreativo.com');		
    	    $mail->AddReplyTo($email);
    		if(!$sent_mail= $mail->Send()){
    			echo "Se ha presentado un error procesando su solicitud. Por favor inténtelo de nuevo.";
    		}else{
    			echo "Gracias por escribirnos $nombre. Hemos recibido su mensaje y pronto estaremos en contacto.";
    		}
    	}
    }
    
    if($_POST['consulta']=='trabaje'){
		$archivo=$_FILES['adjuntarCv'];
		$ext = pathinfo($archivo['name'], PATHINFO_EXTENSION);
		if( ($ext ==  'docx') ||  ($ext ==  'doc') ||  ($ext ==  'pdf') ){
			
			if( $archivo['size'] > 2000000 ){
				echo "Lo sentimos, pero el archivo supera el peso admitido. El peso máximo admitido es de 2 mb.";
			}else{
				
				$oferta=strtoupper($_POST['oferta']);
		    	$nombre=strtoupper($_POST['nombre']);
		    	$apellido=strtoupper($_POST['apellido']);
		    	$telefono=strtoupper($_POST['telefono']);
		    	$ciudad=strtoupper($_POST['ciudad']);
		    	$email=strtolower($_POST['email']);
		    	$profesion=strtoupper($_POST['profesion']);
		    	$perfil=$_POST['perfil'];
				
				
				
				$detalles=implode(") (", array('('."Oferta: ".$oferta,"Ciudad: ".$ciudad,"Profesión: ".$profesion,"Perfil: ".$perfil.')'));
				
				$sql="INSERT INTO 
		    		contactos (
		    			nombre,
		    			apellido,
		    			email,
		    			telefono,
		    			interaccion,
		    			detalles,
		    			optin
					) VALUES (
						'$nombre',
						'$apellido',
						'$email',
						'$telefono',
						'6',
						'$detalles',
						'1'
					)
				";
				
				$q=mysqli_query($con,$sql);
				
				if(!$q){
					echo "Lo sentimos, se ha presentado un error, por favor inténtelo de nuevo.";
				}else{
					if(!move_uploaded_file($archivo['tmp_name'], '../cv/'.$archivo['name'])){
						echo "Lo sentimos, se ha presentado un error. Por favor intente de nuevo. (file)";
					}else{
						$headers  = 'MIME-Version: 1.0' . "\r\n";
			    		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			    		$url='http://www.ilpingenieria.com/email/index.html';
			    		$html=file_get_contents($url);
			    		$contenido="
			    			<p>A continuación la información relacionada:</p>
			    			<p>
			    				<b>Oferta Laboral:</b><br />$oferta
			    			</p>
			    			<p>
			    				<b>Nombre:</b><br />$nombre
			    			</p>
			    			<p>
			    				<b>Apellido:</b><br />$apellido
			    			</p>
			    			<p>
			    				<b>Email:</b><br />$email
			    			</p>
			    			<p>
			    				<b>Teléfono:</b><br />$telefono
			    			</p>
			    			<p>
			    				<b>Ciudad:</b><br />$ciudad
			    			</p>
			    			<p>
			    				<b>Profesión:</b><br />$profesion
			    			</p>
			    			<p>
			    				<b>Perfil:</b><br />$perfil
			    			</p>
			    			<p>Adjunto encontrará el archivo correspondiente.</p>
			    		";
			    		$html=str_replace("{{contenido}}",$contenido,$html);         
			    		$mail = new PHPMailer();
			    		$mail->From = 'no-reply@ilpingenieria.com';
			    		$mail->FromName = utf8_decode('Webmaster ILPINGENIERIA.COM');
			    		$mail->Subject = utf8_decode('Nueva postulación a través del website');
			    		$mail->Body = utf8_decode($html);
			    		$mail->IsHTML(true);
			    		$mail->AddAddress('auxiliar.recursoshumanos@ilpingenieria.com');
			    		//$mail->AddAddress('camilo@closerdesign.co');
			    		$mail->AddBCC('backup@esquemacreativo.com');
						$mail->AddReplyTo($_POST['email']);
						$mail->AddAttachment('../cv/'.$archivo['name']);
						if(!$sent_mail= $mail->Send()){
							echo "Lo sentimos, se ha presentado un error. Por favor intente de nuevo.";
						}else{
							echo "Gracias por tu interés en nuestra compañía. Hemos procesado tu aplicación y en el evento de requerirlo, nos pondremos en contacto contigo.";
						}
					}
				}
			}
			
		}else{
			echo "Lo sentimos, pero el formato del archivo es inválido. Solo se permiten archivos con extensión DOC, DOCX o PDF.";
		}
	}