<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="estilo.css">
  <title>crear inicio de sesión</title>
</head>

<body>
  <div class="contenedor">
  <div class="nuestra">
        <p>Gracias por querer ser parte de <span>WEIGHT OF  
            THE LAW</span> </p>
      </div>

    <div class="blanco1">
    
      <form action="guardarA.php" class="form" method="post">

        <label for="" >ADMINISTRADOR: </label>
        <input type="text" name="usuarioA" placeholder="Agregue su nombre o numero">
        <br>
        <label for="">CONTRASEÑA: </label>
        <input type="text" name="contrasena" placeholder="Agregue una contraseña">
        <br>

        <div class="botones">
          <button type="submit" id="cuentaN" value=" ">Guardar Cuenta</button>

        </div>

      </form>

    </div>

    <div class="regresar">
      <a href="vistaA.php"> Regresar</a>
    </div>
  </div>

</body>

</html>