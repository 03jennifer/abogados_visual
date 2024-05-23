<?php 

$usuario=$_POST ['usuario'];
$contrasena=$_POST ['contrasena'];
session_start();
$_SESSION['usuario'] = $usuario;

include ('conexion.php');

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
$resultado = mysqli_query($conectar, $consulta);

$filas= mysqli_fetch_array($resultado);


if (isset($filas['tipo_usuario']) && $filas['tipo_usuario'] == 1) { // Administrador
  header("location: VistaA.php");
}

elseif (isset($filas['tipo_usuario']) && $filas['tipo_usuario'] ==2) { // Usuario
  header("location: VistaU.php");
} else {
  include("usuario.php");
  ?>
  <h2>ERROR EN LA AUTENTICACIÓN</h2>
  <?php
}



mysqli_free_result($resultado);
mysqli_close($conectar);
