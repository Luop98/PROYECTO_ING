<?php

include("conexion.php");

$id=$_GET['id'];

$sql = "SELECT * FROM t_tareas WHERE id= '$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <h3>ACTUALIZAR</h3>
<form action="update.php" method="POST">
<div class="container-mt-5">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?> ">
        <br>
        <input type="text" class="form-control mb-3" name="tareas" placeholder="Tareas" value= "<?php echo $row['tareas'] ?>">

        <input type="submit" class="btn btn-prymary btn-block" value="Actualizar">
    </form>

</div>
 </form>

</body>
</html>