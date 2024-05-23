<?php 
include "conexion.php";

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$query = "INSERT INTO usuarios(usuario, contraseña,tipo_usuario) values ('$usuario','$contrasena',2)";

$resultado = mysqli_query($conectar,$query);

if($resultado){
    header("location:usuario.php");

}
else{
  echo "falló";
}
?>
