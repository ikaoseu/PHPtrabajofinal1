<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "tienda";


$conexion = mysqli_connect($host, $usuario, $clave, $bd);

if($conexion){
    echo "conectado correctamente";
    
}else{
    echo "no se puede conectar";
}

?>