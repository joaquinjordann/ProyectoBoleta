<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer\PHPMailer.php";
require "PHPMailer\Exception.php";
require "PHPMailer\SMTP.php";

//require_once "vendor/autoload.php";
$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;   						//Habilitar la depuración de SMTP.
$mail->isSMTP(); 								//Configurar PHPMailer para usar SMTP.
$mail->Host = "smtp.gmail.com";				//Configurar el nombre de host SMTP                          
$mail->SMTPAuth = true; 						//Pon esto en true si el host SMTP requiere autenticación para enviar el correo electrónico
$mail->Username = "joaquinjordanf17@gmail.com"; 		//Proporciona el nombre de usuario y la contraseña                    
$mail->Password = "qbglunpbyzbtjnfl";                           
$mail->SMTPSecure = "tls";  					//Si el SMTP requiere una encriptación TLS, entonces configúralo
$mail->Port = 587;                              //Configurar el puerto TCP para conectarse a
                                
$mail->From = "joaquinjordanf2@gmail.com";
$mail->FromName = "Joaquín Jordan";
$mail->addAddress("joaquinjordanf2@gmail.com", "Joaquín Jordan");

$mail->isHTML(true);

$mail->Subject = "CORREO DE PRUEBA";
$mail->Body = "<i>Cuerpo del correo en HTML</i>";
$mail->AltBody = "Esta es la versión de texto simple del contenido del correo electrónico";
$mail->CharSet="UTF-8";		

try {
    $mail->send();
    echo "El mensaje ha sido enviado correctamente";
} catch (Exception $e) {
    echo "Mensaje de: " . $mail->ErrorInfo;
}
?>