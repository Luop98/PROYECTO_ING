<?php
include("conexion.php");

$id = $_POST['id'];
$tareas = $_POST['tareas'];

$sql ="UPDATE t_tareas SET tareas='$tareas'where id='$id'";
$query=mysqli_query($conexion,$sql);

if ($query){
    header("Location:inicio.php");
}