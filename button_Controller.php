<?php

session_start();
include("conexion.php");
$conn = conectar();


if (isset($_POST["boton_ingresar"])) {
    $email = $_POST["email"];
    $pass = md5($_POST["password"]);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE correo = '" . $email . "' and password = '" . $pass . "'");

    $nr = mysqli_num_rows($query);
    if ($nr == 1) {
        echo "<script> alert('Bienvenido'); window.location='principal.php'</script>";
        $_SESSION['correo'] = $email;
    } else {
        echo "<script> alert('Datos invalidos'); window.location='index.html'</script>";
    }

}
if (isset($_POST["boton_registrar"])) {
    $email = $_POST["email"];
    $pass = md5($_POST["password"]);
    $username = $_POST["name"];

    $query_validacion = mysqli_query($conn, "SELECT * FROM user WHERE correo = '" . $email . "'");

    $nr_validacion = mysqli_num_rows($query_validacion);

    if ($nr_validacion == 1) {
        echo "<script> alert('Este correo ya esta en uso'); window.location='index.html'</script>";
        
    } else {
        $sqlgrabar = "INSERT INTO user(nombre,correo,password) values('$username','$email','$pass')";
        if (mysqli_query($conn, $sqlgrabar)) {
            echo "<script> alert('Registro exitoso $username'); window.location='index.html'</script>";
        } else {
            echo "Error al crear cuenta: " . $sql . "<br></br>" . mysql_error($conn);
        }
    }
}

?>