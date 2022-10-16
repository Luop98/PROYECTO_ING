<?php


$host = "localhost";
$User = "root";
$pass ="";

$db ="Login";


$conexion = mysqli_connect($host,$User,$pass,$db);

if(!$conexion) {
    echo "conexion fallida";
}