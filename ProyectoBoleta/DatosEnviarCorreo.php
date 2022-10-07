<?php
$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;   								//Habilitar la depuración de SMTP.
$mail->isSMTP(); 										//Configurar PHPMailer para usar SMTP.
$mail->Host = "smtp.gmail.com";						//Configurar el nombre de host SMTP                          
$mail->Username = "joaquinjordanf17@gmail.com"; 		//Proporciona el nombre de usuario y la contraseña                    
$mail->Password = "qbglunpbyzbtjnfl"; 

//$mail->Host = "smtp.gmail.com";						//Configurar el nombre de host SMTP                          
//$mail->Username = "facturasdrimer2@gmail.com"; 		//Proporciona el nombre de usuario y la contraseña                    
//$mail->Password = "2010@1308678x"; 

$mail->SMTPAuth = true; 								//Pon esto en true si el host SMTP requiere autenticación para enviar el correo electrónico
                          
$mail->SMTPSecure = "tls";  							//Si el SMTP requiere una encriptación TLS, entonces configúralo
$mail->Port = 587;  		 							//Configurar el puerto TCP para conectarse a
?>