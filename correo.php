<?php 

if($_POST["enviar"]) {
  $recipient="le20080447@merida.tecnm.mx";
  $subject="nuevo cliente";
  $correo=$_POST["correo"];
  $comentario=$_POST["comentario"];
  $mailBody=" cliente nuevo: $correo
   \ncaso del cliente: $comentario";
  mail($recipient, $subject, $mailBody, "From:<$correo>");

}
echo '<script>alert("¡El correo se ha enviado correctamente!"); window.location.href = "vistaU.php";</script>';

?>