<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">

  <title>INICIO DE SESIÓN</title>

  <?php 
  include "LOGO.PHP";
  ?>
</head>

<body>
  <div class="contenedor">


    <div class="blanco">

      <form action="validar.php" class="form" method="post">

        <label for="" >USUARIO: </label>
        <input type="text" name="usuario">
        <br>
        <label for="">CONTRASEÑA: </label>
        <input type="text" name="contrasena">
        <br>

        <div class="botones">
          <button type="submit" id="envi" value="ingresar">Iniciar Sesión</button>

        </div>

      </form>

    </div>
    <div class="regresar">
      <a href="index.php"> Regresar al inicio</a>
    </div>
  </div>



</body>

</html>