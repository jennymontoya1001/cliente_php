<?php

include("conexion.php");
$con = conectar();

$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$fech_nac = $_POST["fech_nac"];


if(!empty($dni) && !empty($nombre) && !empty($apellido) && !empty($direccion) && !empty($fech_nac)){
   
    $sql = "INSERT INTO cliente VALUES('$dni', '$nombre', '$apellido', '$direccion', '$fech_nac')";
    $query = mysqli_query($con, $sql);
    
    if($query){
        header("Location: index.php");
    }else{
        error_log("No insertado");
    }
    
}else{
    echo("Diligencie todos los campos");
}


?>