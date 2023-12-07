<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

session_start();
include("conexion.php");
$conn = conectar();
$correo_cta = "ctayuda@cucei.udg.mx";
if (isset($_POST["boton_contacto"])) {


    $correo = $_SESSION['correo'];
    $message = $_POST["Message_contacto"];
    $consulta = ("SELECT * FROM user WHERE correo ='" . $correo . "'");
    $queryconsulta = mysqli_query($conn, $consulta);
    $cantidadConsulta = mysqli_num_rows($queryconsulta);
    $dataConsulta = mysqli_fetch_array($queryconsulta);

    if ($cantidadConsulta == 0) {
        echo "<script> alert('Verifica que los datos sean correctos'); window.location='contact.php'</script>";
        exit();
    } else {


        $cuerpo = '
    </head>
    
    <body>
        <div class="contenedor">
        <img class="imgBanner" src="http://cta.cucei.udg.mx/sites/default/files/recurso_23x-100.jpg" alt="recuperar" width="900" height="200">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <table >
        
        <tr>
            <td style="background-color: #ffffff;">
                <div>
                    <h2 align="center" style="color: red; margin: 0 0 7px">Tenemos un comentario de nuestro usuario: ' . $dataConsulta['nombre'] . '</h2>
                    <p>&nbsp;</p>
                    <p align="left" style="margin: 2px; font-size: 16px" ><strong>Mensaje:</strong> ' . $message . '</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                     <p>&nbsp;</p>
                    
                </div>
            </td>
        </tr>
        
    </table>
    </div>
    </body>
  </html>
    ';


        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = $correo_cta; //SMTP username
            $mail->Password = 'hwwwskvgtjwjuyyp'; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($correo_cta, 'CTAyuda');
            $mail->addAddress($correo_cta, $dataConsulta['nombre']); //Add a recipient


            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Informacion de Contacto - CTAyuda';
            $mail->Body = $cuerpo;

            $mail->CharSet = 'UTF-8';
            if ($cantidadConsulta == 1) {
                echo "<script> alert('¡Gracias por tus comentarios!'); window.location='principal.php'</script>";


            }


            $mail->send();

            echo 'Mensaje Enviado';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }
}


?>