<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="estilo.css">

  <title>VISTA DE ADMINISTRADOR</title>

  <?php 
  include "LOGO.PHP";
  ?>

</head>
<body>
  <div class="contenedor">

  <h3 class="elabogado">los datos que usted agregará posteriormente se le notificará al abogado correspondiente a su selección.</h3>
<div class="formu">


  <form action="enviar.php" class="for1" method="post" enctype="multipart/form-data" id="solicitar">

        <label for=""  >*Nombre completo: </label>
        <input id="nombre" type="text" name="nombre" placeholder="*Agregue su nombre completo">
        <br>
        <label for="">Documento: </label>
        <input type="file" name="documento" placeholder="Agregue documentación">
<br>
        <select name="abogados" id="abogados">
          <option selected hidden>*abogados: </option>
          <option value="John Branca">John Branca</option>
          <option value="Barack Obama">Barack Obama</option>
          <option value="Rubén Blades">Rubén Blades</option>
        </select>
        <br>

        <div class="botones">
          <a href="charge.php" class="pagar">pagar</a>
          <button type="submit" value=" " >Enviar</button>
        </div>
        <div class="cambio">
          <h3>si requiere pagar estas son las modenas que se aceptan</h3>
        <?php
        include "cambio.php"?>
        </div>
      </form>
      </div>
  


  <div class="regresar">
      <a href="salir.php">Cerrar sesion</a>
    </div>
  </div>


  <script>
        window.addEventListener('DOMContentLoaded', function() {
            var formulario = document.getElementById('solicitar');
            var selectAbogados = document.getElementById('abogados');
            var inputNombre = document.getElementById('nombre');

            formulario.addEventListener('submit', function(event) {
                if (selectAbogados.value === '*abogados:' || inputNombre.value === '') {
                    event.preventDefault();
                    alert('Debes seleccionar una opción en el campo de abogados y/o proporcionar un nombre.');
                }
            });
        });
    </script>
</body>
</html>