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
  <form method="post" action="login.php">
   
  <section class ="form-register formulario" id="registro">
    <h4>REGISTRO</h4>
    <label>Codigo Usuario</label>
    <input class="controls" type="text" name="txtnombre"  placeholder="Ingrese Codigo Usuario" require>
    <label>Correo Electronico</label>
    <input class="controls" type="text" name="txtapellido"  placeholder="Ingrese su Correo Electronico">
    <label>Nombre de Usuario</label>
    <input class="controls" type="email" name="txtcorreo"  placeholder="Ingrese su Nombre Usuario">
    <label>Contraseña</label>
    <input class="controls" type="password" name="txtpassword"  placeholder="Ingrese su Contraseña">
    <label></label>
    <br>
    <button type="submit">Registrar</button>
    <a href="index.php">Ya tienes Usuario?</a>
    
  </section>
 
</form>
</body>
</html>
