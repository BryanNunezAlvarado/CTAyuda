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
if (isset($_POST["boton_recuperar"])) {
    $logitudPass = 5;
    $miPassword = substr(md5(microtime()), 1, $logitudPass);
    $pass = md5($miPassword);
    $clave = $pass;
    $_SESSION['codigo'] = $miPassword;


    $correo = $_POST["email_recuperar"];
    $_SESSION['correo_verificar'] = $correo;
    $consulta = ("SELECT * FROM user WHERE correo ='" . $correo . "'");
    $queryconsulta = mysqli_query($conn, $consulta);
    $cantidadConsulta = mysqli_num_rows($queryconsulta);
    $dataConsulta = mysqli_fetch_array($queryconsulta);

    if ($cantidadConsulta == 0) {
        echo "<script> alert('Correo Invalido'); window.location='index.html'</script>";
        exit();
    } else {


        $cuerpo = '
    </head>
    <body>
        <div class="contenedor">
        <img class="imgBanner" src="http://cta.cucei.udg.mx/sites/default/files/recurso_23x-100.jpg" alt="recuperar" width="900" height="200">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        
        <tr>
            <td style="background-color: #ffffff;">
                <div class="misection">
                    <h2 style="color: red; margin: 0 0 7px">Hola, ' . $dataConsulta['nombre'] . '</h2>
                    <p style="margin: 2px; font-size: 18px">Tu codigo de Verificación es: <strong>' . $miPassword . '</strong> </p>
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
            $mail->addAddress($correo, $dataConsulta['nombre']); //Add a recipient


            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Recuperando Contraseña - CTAyuda';
            $mail->Body = $cuerpo;

            $mail->CharSet = 'UTF-8';
            if ($cantidadConsulta == 1) {
                echo "<script> alert('Verifica Correo Electronico'); window.location='cambiar_contraseña.php'</script>";


            }


            $mail->send();

            echo 'Mensaje Enviado';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }
}
if (isset($_POST["boton_contraseña"])) {
    $codigo_verificacion = $_POST["codigo_verificacion"];
    $contraseña = md5($_POST["password_1"]);
    $confirmar_contraseña = md5($_POST["password_2"]);

    if ($codigo_verificacion == $_SESSION['codigo']) {
        if ($contraseña == $confirmar_contraseña) {
            $updateClave = ("UPDATE user SET password='$contraseña' WHERE correo='" . $_SESSION['correo_verificar'] . "' ");
            $queryResult = mysqli_query($conn, $updateClave);
            echo "<script> alert('Contraseña actualizada'); window.location='index.html'</script>";
        } else {
            echo "<script> alert('Contraseñas no coinciden'); window.location='cambiar_contraseña.php'</script>";
        }
    } else {
        echo "<script> alert('Codigo de Verificacion Incorrecto'); window.location='cambiar_contraseña.php'</script>";
    }

}

?>