<?php
function conectar(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "proyecto";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $conn->set_charset("utf8");
    if(!$conn){
        die("No hay conexion: ".mysqli_connect_error());
    }
    return $conn;
}
?>