<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="StyleR.css">
  <title>Registro</title>

</head>
<body>
  <!--FORMULARIO DE REGISTRO DE USUARIO-->
  <form method="post" action="registroDatos.php">
   
  <section class ="form-register formulario" id="registro">
    <h4>REGISTRO</h4>
   
    <label>Correo Electronico</label>
    <input class="controls" type="email" name="CORREO_ELEC"  placeholder="Ingrese su Correo Electronico" required>
    <label>Nombre de Usuario</label>
    <input class="controls" type="text" name="NOMBRE_U"  placeholder="Ingrese su Nombre Usuario" required>
    <label>Contraseña</label>
    <input class="controls" type="password" name="CONTRASEÑA"  placeholder="Ingrese su Contraseña" required>
    <label></label>
    <br>
    <input class="boton" type="submit" value="Registrar">

    
  </section>
 
</form>
</body>
</html>
