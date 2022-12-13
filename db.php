<?php
//Configuracion BD
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "proyecto"; //basededaros en pgadmin


    //Conexion a la BD
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}

?>