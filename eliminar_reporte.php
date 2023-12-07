<?php
if (!isset($_GET['codigo'])) {
    header('Location: reporte.php?mensaje=error');
    exit();
}

include 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("DELETE FROM reporte where codigo = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE) {
    header('Location: reporte.php?mensaje=eliminado');
} else {
    header('Location: reporte.php?mensaje=error');
}

?>