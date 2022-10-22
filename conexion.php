<?php

// conexion a la base de datos

$host = "localhost";
$User = "root";
$pass ="";

$db ="Login";

// variables de conexion 
$conexion = mysqli_connect($host,$User,$pass,$db);

//Comprobar si está bien la conexion
if(!$conexion) {
    echo "conexion fallida";
}