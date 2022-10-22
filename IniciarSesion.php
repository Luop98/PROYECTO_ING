<?php   
    session_start();
    include('Conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Clave']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']); 
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: Index.php?error=La clave Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);
        
        $Sql = "SELECT * FROM t_usuarios where NOMBRE_U='$Usuario' and CONTRASEÑA='$Clave'";
        $result = mysqli_query($conexion, $Sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['NOMBRE_U'] === $Usuario && $row['CONTRASEÑA']===$Clave){
            $_SESSION['NOMBRE_U']=$row['NOMBRE_U'];    
            $_SESSION['CORREO_ELEC']=$row['CORREO_ELEC'];
            $_SESSION['COD_Usuario']=$row['COD_Usuario'];  
            header("Location: Inicio.php");
            exit();
            
        }else {
            header("Location: Index.php?error=El usuario o la clave son incorrectas");
            exit();
        }

    }else {
        header("Location: Index.php?error=El usuario o la clave son incorrectas");
        exit();
    }
}

        } else {
        header("Location: Index.php");
                exit();
}

