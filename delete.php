<?php
include("conexion.php");

$id=$_GET['id'];

$sql = "DELETE FROM t_tareas WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

if($query){
    header("Location:inicio.php");
}
