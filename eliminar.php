<?php
    require "conexion.php";
    $link = $_GET['link'];

    $eliminar = "DELETE FROM juegos WHERE link='$link'";
    $resultado = mysqli_query($conectar, $eliminar);

    if($resultado){
        header("location:inicioAdmin.php");
    }
    else{
        echo "NO SE PUDO ELIMINAR EL DATO";
    }
?>