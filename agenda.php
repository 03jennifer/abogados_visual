<?php 
include "conexion.php";

$nombre = $_POST["nombres"];
$fecha = $_POST["fechacliente"];

$query = "INSERT INTO agenda(cliente, fecha) values ('$nombre','$fecha')";

$resultado = mysqli_query($conectar,$query);

if($resultado){
    header("location:verListaA.php");

}
else{
  echo "falló";
}
?>