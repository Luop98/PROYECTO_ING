<?php
//CONECTAR BD
include('conexion.php');


// CAPTURAMOS LOS VALORES DEL FORM EN VARIABLES

$correo = $_POST['CORREO_ELEC'];
$nombre = $_POST['NOMBRE_U'];
//$cod_u = $_POST['COD_Usuario'];
$contraseña = $_POST['CONTRASEÑA'];

//consulta ingresar los datos registrados

$insertar = "insert into t_usuarios (CORREO_ELEC, NOMBRE_U, CONTRASEÑA) 
values ('$correo','$nombre','$contraseña')";

$resultado = mysqli_query($conexion,$insertar);


if($resultado){
    echo "<script>alert ( ' Se ha registrado el usuario con éxito');
    window. location='/Proyecto'</script>";
} else {
    echo "<script>alert ( 'No se pudo registrar ');
    window.history.go(-1);</script>";
}
