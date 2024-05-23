<?php 

include "conexion.php";

$nombre = $_POST ["nombre"];
$abogados = $_POST["abogados"];

$nombreArchivo = $_FILES['documento']['name'];
  $tipoArchivo = $_FILES['documento']['type'];
  $rutaTemp = $_FILES ["documento"]["tmp_name"];
 
  $rutaServer = 'documento';
  $rutaDestino =$rutaServer . "/" . $nombreArchivo;
  
  move_uploaded_file($rutaTemp, $rutaDestino);
  

$query = "INSERT INTO datos (Nombre,documento,abogado) values ('$nombre', '$rutaDestino', '$abogados')";

$resultado = mysqli_query($conectar,$query);


if($resultado){
header("location:vista2U.php");

}

?>

