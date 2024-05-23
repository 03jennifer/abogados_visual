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

  <title>VISTA DE ADMINISTRADOR</title>

  <?php 
  include "LOGO.PHP";
  ?>

</head>
<body>
  <div class="contenedor">
  <h3 class="elabogado">El abogado que usted ha selecionado anteriormente se le ha de enviar a un correo electrónico con la nota de su caso el cual será respondido dentro de los 3 días habiles y se le notificará por correo.</h3>

  <form action="correo.php" method="post" class="for">

        <br>
        <input type="text" name="correo" placeholder="Agregue su correo">
        <br>
        
<textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="agregue su opinión a cerca de su caso:"></textarea>
        <br>

        <div class="botones">
          <button type="submit" value="Enviar" name="enviar">Enviar</button>
        </div>

  </div>

      </form>

  

