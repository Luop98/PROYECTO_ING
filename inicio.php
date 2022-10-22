<?php
include("conexion.php");
session_start();
//$nombre = $_POST ['Usuario'];
$tareas = "SELECT * FROM t_tareas where ";
$resul = mysqli_query($conexion,$tareas);
$row= mysqli_fetch_array($resul);

//$usuario = "SELECT * FROM t_usuarios";
//$res =  mysqli_query($conexion,$usuario);
//$roww = mysqli_fetch_array($res);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
   <center><h1 >Bienvenido <?php $nombre=$_SESSION ['NOMBRE_U']; echo $nombre ?>   </h1></center> 


   <div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h1>Nueva Tarea</h1>

            <form action="insertarT.php" method="POST">
            <label>ID</label>
            <input type="text" class="form-control mb-3" name="id" placeholder="id" required>
            <label>TAREA</label>
            <input type="text" class="form-control mb-3 " name="tareas" placeholder="Tareas" required>

            <button name="ENVIAR" type="submit">ENVIAR</button>
         
            </form>
        </div>
           <div class ="col-md-8">
            <h1>Tabla de Tareas</h1>
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                    
                        <th>ID</th>
                        <th>Tareas</th>
                       <th>Acción</th>
                        
                       
                    </tr>
                    </tr>

                </thead>
                <tbody>
                    <?php
                   while($row= mysqli_fetch_array($resul)){
                    ?>
                    <tr>
                        <th><?php echo $row['id'] ?>  </th>
                        <th><?php echo $row['tareas'] ?>  </th>
                        
                         <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a> <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                        
                    </tr>
                    <?php
 
                        }

                    ?>
                </tbody>
            </table>
           </div> 
    </div>
</div>





<br>

   <!--Boton Cerrar SESION -->
   <a href="CerrarSesion.php" class="btn btn-danger">Cerrar Sesion</a>
   
</body>
</html>