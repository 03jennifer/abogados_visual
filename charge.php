

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Enlazar el archivo CSS -->
</head>
<div id="payment-container">
    <h1>Formulario de Pago</h1>

    <form action="charge.php" method="post" id="payment-form">
        <input type="text" name="cardholder_name" placeholder="Nombre del titular"> <br>
        <input type="text" id="card_number" placeholder="Número de tarjeta"><br>
        <input type="text" id="expiry_month" placeholder="Mes de vencimiento (MM)"><br>
        <input type="text" id="expiry_year" placeholder="Año de vencimiento (YYYY)"><br>
        <input type="text" id="cvc" placeholder="CVC">
        <button type="submit">Pagar</button>
    </form>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script src="check.js"></script> <!-- Archivo JavaScript para manejar el pago -->

<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51PDubeP7TyiYxzEqwsmSPs3qcce13mFTpfpBWeDYQGIadLdcCLSZ0fFjIdxsPXnidnipqNArOTFZqdAJFkWeQa0F00k9cNnCSh');
?>

<?php
    try {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new Exception('Método de solicitud no permitido');
        }
    
        $token = $_POST['stripeToken'];
        $amount = 1000; // Monto en centavos (en este ejemplo, $10.00 USD)
    
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'USD',
            'source' => $token,
            'description' => 'Pago en línea'
        ]);
    
        // Pago exitoso
        echo "¡Pago exitoso! ID de transacción: " . $charge->id;
    } catch (Exception $e) {
        // Error al procesar el pago
        echo "Error: " . $e->getMessage();
    }
    
?>