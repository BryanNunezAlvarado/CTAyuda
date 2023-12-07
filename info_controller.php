<?php
session_start();
include("conexion.php");

// Laps ----------------------------------------------------------------------------------
if (isset($_POST["boton_windows"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalar Windows';

}

if (isset($_POST["boton_office"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalar Office';

}

if (isset($_POST["boton_SolidWorks"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalar Solidworks';

}

if (isset($_POST["boton_DriverPack"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'DriverPack';

}

if (isset($_POST["boton_Windows_Update"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Windows Update';

}

if (isset($_POST["boton_Paqueteria_Basica"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Paqueteria Basica';

}

if (isset($_POST["boton_Optimizar_Equipo"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Optimizar arranque';

}

if (isset($_POST["boton_Instalación_de_Disco_duro"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalación de Disco duro';

}

if (isset($_POST["boton_Instalación_RAM"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalación RAM';

}


if (isset($_POST["boton_Recuperar_archivos"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Recuperar archivos';

}

if (isset($_POST["boton_Comprobar_Salud_Disco_Duro"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Comprobar Salud Disco Duro';

}

if (isset($_POST["boton_USB_booteable"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Memoria booteable';

}

if (isset($_POST["boton_Respaldo"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Respaldo';

}

// Escritorio ----------------------------------------------------------------------------------

if (isset($_POST["boton_Instalación_de_Disco_duro_E"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalación de Disco duro PC';

}

if (isset($_POST["boton_Instalación_RAM_E"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Instalación RAM PC';

}

if (isset($_POST["boton_Mantenimiento_Preventivo_E"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Limpieza PC';

}

if (isset($_POST["boton_Fuente_de_Poder_E"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Fuente de Poder';

}

// Impresoras ----------------------------------------------------------------------------------


if (isset($_POST["boton_Consultar_IP"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Consultar IP';

}

if (isset($_POST["boton_Impresion_de_Prueba"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Impresion de Prueba';

}


if (isset($_POST["boton_Conectar_en_Red"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Conectar en Red';

}

if (isset($_POST["boton_Conectar_con_Cable"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Conectar con Cable';

}

if (isset($_POST["boton_Cambio_de_Cartucho"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Cambio de Cartucho';

}

if (isset($_POST["boton_Mantenimiento"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Mantenimiento';

}



// Scaner ----------------------------------------------------------------------------------


if (isset($_POST["boton_Escaneo_de_Prueba"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Escaneo de Prueba';

}

if (isset($_POST["boton_Escaneo_a_carpeta"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Escaneo a carpeta';

}

if (isset($_POST["boton_Conectar_en_Red_S"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Conectar Scaner en Red';

}

if (isset($_POST["boton_Conectar_con_Cable_S"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Conectar Scaner con Cable';

}

if (isset($_POST["boton_Mantenimiento_S"])) {
    echo "<script>window.location='single.php'</script>";
    $_SESSION['nombre_categoria'] = 'Mantenimiento Scaner';

}


// Reporte  ----------------------------------------------------------------------------------

if (isset($_POST["boton_Reporte"])) {
    echo "<script>window.location='reporte.php'</script>";
    $_SESSION['nombre_categoria'] = 'Reporte';

}


// Drivers impresoras ----------------------------------------------------------------------------------

if (isset($_POST["boton_impresora_hp"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Impresora Hp';

}
if (isset($_POST["boton_impresora_brother"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Impresora Brother';

}
if (isset($_POST["boton_impresora_ricoh"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Impresora Ricoh';

}
if (isset($_POST["boton_impresora_canon"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Impresora Canon';

}

// Driver scanner

if (isset($_POST["boton_scanner_hp"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Scanner Hp';

}
if (isset($_POST["boton_scanner_epson"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Scanner Epson';

}
if (isset($_POST["boton_scanner_brother"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Scanner Brother';

}
if (isset($_POST["boton_scanner_canon"])) {
    echo "<script>window.location='drivers.php'</script>";
    $_SESSION['nombre_driver'] = 'Scanner Canon';

}

?>