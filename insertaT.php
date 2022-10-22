<?php
include("conexion.php");

//CAPTURAR VARIABLES DEL FORMULARIO DE TAREAS
$id=$_POST['id'];
$tareas=$_POST['tareas'];

$insert  = "inser into t_tareas(id,tareas) values('$id','$tareas')";
$res = mysqli_query($conexion,$insert);

if($res){
    header("Location:inicio.php");
}