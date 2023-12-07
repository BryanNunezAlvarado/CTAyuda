<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php

    include 'model/conexion.php';


    if (isset($_POST["codigo"])) {

        $codigo = $_POST['codigo'];
        $descripcion = $_POST['txtDescripcion'];
        $status = $_POST['txtStatus'];
        $comentarios = $_POST['txtComentarios'];


        $sentencia = $bd->prepare("UPDATE reporte SET descripcion = ?, status = ?, comentarios = ? where codigo = ?;");
        $resultado = $sentencia->execute([$descripcion, $status, $comentarios, $codigo]);

        if ($resultado === TRUE) {
            header('Location: reporte.php?mensaje=editado');
        } else {
            header('Location: reporte.php?mensaje=error');
            exit();
        }

    }


    if (isset($_POST["btn_registrar_reporte"])) {

        if (empty($_POST["btn_registrar_reporte"]) || empty($_POST["txtDescripcion"]) || empty($_POST["txtStatus"]) || empty($_POST["txtComentarios"])) {
            header('Location: reporte.php?mensaje=falta');
            exit();
        }

        include_once 'model/conexion.php';
        $num_reporte = $_POST["txtReporte"];
        $descripcion = $_POST["txtDescripcion"];
        $status = $_POST["txtStatus"];
        $comentarios = $_POST["txtComentarios"];
        $creador = $_SESSION['creador'];

        $sentencia = $bd->prepare("INSERT INTO reporte(codigo,descripcion,status,comentarios,creador) VALUES (?,?,?,?,?);");
        $resultado = $sentencia->execute([$num_reporte, $descripcion, $status, $comentarios, $creador]);

        if ($resultado === TRUE) {
            header('Location: reporte.php?mensaje=registrado');
        } else {
            header('Location: reporte.php?mensaje=error');
            exit();
        }

    }

    ?>

</body>

</html>