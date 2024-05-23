<?php

require "conexion.php";

$id = $_GET['id'];



$eliminar = "DELETE FROM agenda WHERE id='$id'";
$resultado = mysqli_query($conectar,$eliminar);

if($resultado){
    header("location:verListaA.php");
}
else{
    echo "no se pudo elimanar el dato";
}


?>