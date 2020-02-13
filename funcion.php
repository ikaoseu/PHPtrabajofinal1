<?php
if($_GET['funcion'] == 1){
    
    require 'config.php';
    session_start();
    
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    $q = "SELECT COUNT(*) as contar from usuarios where usuario ='$usuario' and clave = '$clave'";
    $consulta = mysqli_query($conexion, $q);
    $array = mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
        $_SESSION['username'] = $usuario;
        header("location: index.php");
    }else{
        echo "Datos Incorrectos";
    }
    
}else{
    require 'config.php';
    session_start();
    
     $usuario = $_POST['usuario'];
     $clave = $_POST['clave'];
     
     $q = "SELECT COUNT(*) as contar from usuarios where usuario ='$usuario'";
     $consulta = mysqli_query($conexion, $q);
     $array = mysqli_fetch_array($consulta);
     
     
     if($array['contar'] == 0){
         
         $q = "INSERT INTO `usuarios` (`usuario`, `clave`) VALUES ('$usuario', '$clave');";
         $consulta = mysqli_query($conexion, $q);
         
        $_SESSION['username'] = $usuario;
        header("location: index.php");
    }else{
        echo "Datos Ya existentes";
    }
}
?>