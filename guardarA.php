<?php 
include "conexion.php";

$usuario = $_POST["usuarioA"];
$contrasena = $_POST["contrasena"];

$query = "INSERT INTO usuarios(usuario, contraseña,tipo_usuario) values ('$usuario','$contrasena',1)";

$resultado = mysqli_query($conectar,$query);

if($resultado){
  echo '<script>alert("¡El administrador se ha guardado correctamente!"); window.location.href = "vistaA.php";</script>';

}
else{
  echo "falló";
}
?>