<!-- Formulario de correo electrónico -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div>
		<form id="formCorreo" method="POST" name="frmCorreo">
			Destinatario: <input type="text" name="txtDestinatario" required><br>
			Asunto: <input type="text" name="txtAsunto" required> <br>
			Mensaje:<br>
			<textarea form="formCorreo" name="txtMensaje" placeholder="Escribe aquí tu mensaje..."></textarea><br>
			<input type="submit" name="btnEnviar" value="Enviar correo">
		</form>
	</div>
</body>
</html>
<?php
	$dest;
	$asunto;
	$mensaje;
	if (isset($_POST['txtAsunto']))
	{
		$asunto = $_POST['txtAsunto'];
		if (isset($_POST['txtDestinatario']))
		{
			$dest = $_POST['txtDestinatario'];
			$mensaje = $_POST['txtMensaje'];
		}
	}
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/SMTP.php';
	require 'PHPMailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try
	{
    	//Server settings
    	$mail->SMTPDebug = 0;                                 // Enable verbose debug output
    	$mail->isSMTP();                                      // Set mailer to use SMTP
    	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    	$mail->SMTPAuth = true;                               // Enable SMTP authentication
    	$mail->Username = 'eliottsalazar@gmail.com';                 // SMTP username
    	$mail->Password = 'salazar1.';                           // SMTP password
    	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    	$mail->Port = 587;                                    // TCP port to connect to

    	//Recipients
    	$mail->setFrom('eliottsalazar@gmail.com', 'Eliott Salazar');
    	$mail->addAddress($dest);     // Add a recipient //Name is optional.

	    //Content
    	$mail->isHTML(true);                                  // Set email format to HTML
    	$mail->Subject = $asunto;
    	$mail->Body    = $mensaje;

	    $mail->send();
    	echo 'Mensaje enviado';
	}
	catch (Exception $ex)
	{
    	echo 'Error al enviar el correo: ', $mail->ErrorInfo;
	}
?>