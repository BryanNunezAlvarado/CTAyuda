<?php
function conectar_postgres(){
    $dbconection = "host=localhost dbname=proyecto user=postgres password=123";
    $conn_p = pg_connect($dbconection);
    if(!$conn_p){
        die("No hay conexion: ".mysqli_connect_error());
    }
    return $conn_p;
}

?>