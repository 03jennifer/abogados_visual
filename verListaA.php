<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
  <title>VISTA DE ADMINISTRADOR LISTAS DE AGENDA</title>

  <?php 
  include "LOGO.PHP";
  ?>

</head>
<body>
  <div class="contenedor">
  <div id="barribaA">
          
          <h1>BUFETE DE ABOGADOS <br>
          WEIGHT OF  
          THE LAW</h1>
          <div class="regresar">
      <a href="vistaA.php">regresar</a>
    </div>

  </div>
      <div class="lista">
<table>
<tr>

<th>nombre</th>
<th>abogado</th>
<th>archivo</th>
<th>eliminar</th>

</tr>
<?php
include "conexion.php";

$tabla1 = "SELECT * FROM `datos` ORDER BY id ASC";
$resultado = mysqli_query($conectar,$tabla1);

          while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
              <td>
                <?php echo $fila["Nombre"] ?>
              </td>
              <td>
                <?php echo $fila["abogado"] ?>
              </td>
              <td>
                <?php
                
                echo '<div class="documento">';
                echo "<embed src=".$fila["documento"]." type='application/pdf' width='200px' height='200px' />";
                echo '</div>';
                ?>

              </td>
           
              <td><a class="eliminar" href="#" onClick="validar('eliminar.php?id=<?php echo $fila["id"]; ?>')">Eliminar </a>
              </td>
                  <?php
          }
          ?>

</table>


      </div>

      <div class="lista2">
<table>
<tr>

<th>nombre</th>
<th>fecha</th>
<th>eliminar</th>
</tr>
<?php
include "conexion.php";

$tabla2 = "SELECT * FROM `agenda` ORDER BY id ASC";
$resultado = mysqli_query($conectar,$tabla2);

          while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
              <td>
                <?php echo $fila["cliente"] ?>
              </td>
              <td>
                <?php echo $fila["fecha"] ?>
              </td>
           
              <td><a class="eliminar" href="#" onClick="validar('eliminar2.php?id=<?php echo $fila["id"]; ?>')">Eliminar </a>
              </td>
                  <?php
          }
          ?>

</table>
  </div>
  <script>
    function validar(url) {
      var eliminar = confirm("realmente desea eliminar este cliente???????????");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>
</body>
</html>