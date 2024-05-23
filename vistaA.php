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
  <div id="barribaA">
    <br>
  <h1>BUFETE DE ABOGADOS <br>
          WEIGHT OF  
          THE LAW</h1>
      <br>
          <a href="verListaA.php" id="li"> Ver Lista </a>


  <div class="listaC">

  <a href="creasA.php" id="li2"> agregar administrador </a>

</div>
<br>
  </div>

  <form action="agenda.php" method="post" id="agenda">
    <h4>agendar una cita con algún cliente ya existente en el sistema:</h4>
    <br>
    <select name="nombres" id="">

   
    <?php 
    include "conexion.php";
    
    $agenda = "SELECT Nombre FROM datos";

    $resultado = mysqli_query($conectar, $agenda);

    $options = '';
    while ($fila = $resultado->fetch_assoc()) {
        $texto = $fila['Nombre'];
        $options .= "<option value='$texto'>$texto</option>";
    }

echo $options;

        ?>
 </select>
<label for="start">cita con el cliente:</label>

<input type="date" id="start" name="fechacliente"
       value="2023-06-01"
       min="2018-01-01" max="2030-12-31">

       <div class="botones">
          <button type="submit" value=" ">Guardar</button>
  </form>

  <div class="regresar">
      <a href="salir.php">Cerrar sesion</a>
    </div>
  </div>

</body>
</html>