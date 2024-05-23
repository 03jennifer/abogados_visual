<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta API</title>
    <style>


        .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }
    .last-update {
        font-size: 14px;
        color: #000;
        text-align: right;
    }
    .conversion-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
    }
    .currencies {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .currency {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
    }
    .currency-type {
        font-weight: bold;
        color: #555;
    }

    </style>
</head>
<body>
<?php
//API ES ABSTRAC
//DOCUMENTACIÓN
//https://docs.abstractapi.com/exchange-rates/live

// URL de la API
$url = "https://exchange-rates.abstractapi.com/v1/live/?api_key=c9f5b22f0ff248d59ceec540ddcbb9a9&base=MXN&target=EUR,USD,BTC,JPY,LTC";
// Realizar la llamada a la API y obtener la respuesta
$response = file_get_contents($url);

// Verificar si se recibió una respuesta válida
if ($response === false) {
    // Manejar el error
    echo "Error al llamar a la API";
} else {
    // Decodificar la respuesta JSON
    $data = json_decode($response, true);

    // Verificar si la decodificación fue exitosa
    if ($data === null) {
        echo "Error al decodificar la respuesta JSON";
    } else {
        // Acceder a los datos
        $base = $data['base'];
        $ultimaActualizacionTimestamp = $data['last_updated'];
        // Convertir el sello de tiempo Unix a formato legible
        //$ultimaActualizacion = date("Y-m-d H:i:s", $ultimaActualizacionTimestamp); //Devuelve fecha y hora
        $ultimaActualizacion = date("H:i:s", $ultimaActualizacionTimestamp); //Devuelve hora
        $cambios = $data['exchange_rates'];
        $euros = $cambios['EUR'];
        $dolares = $cambios['USD'];
        $yenes = $cambios['JPY'];
        // Formatear el valor de Bitcoin
        $bitcoin = number_format($cambios['BTC'], 10); // Mostrar hasta 10 decimales
        $litcoin = $cambios['LTC'];

        // echo "<div class='container'>";
        // echo "<br>";
        // echo "Última actualización, $ultimaActualizacion";
        // echo "<br>";
        // echo "1 Peso Méxicano Equivale a";
        // echo "<br>";
        // echo "<div class='dolares'>Dolares: $dolares Euros: $euros Yenes: $yenes Bitcoin: $bitcoin Litecoin: $litcoin</div>";
        // echo "</div>";


        echo "<div class='container'>";
        echo "<br>";
        echo "<div class='last-update'>Última actualización: $ultimaActualizacion</div>";
        echo "<br>";
        echo "<div class='conversion-title'>1 Peso Méxicano Equivale a:</div>";
        echo "<br>";
        echo "<div class='currencies'>";
        echo "<div class='currency'><span class='currency-type'>Dolares:</span> $dolares</div>";
        echo "<div class='currency'><span class='currency-type'>Euros:</span> $euros</div>";
        echo "<div class='currency'><span class='currency-type'>Yenes:</span> $yenes</div>";
        echo "<div class='currency'><span class='currency-type'>Bitcoin:</span> $bitcoin</div>";
        echo "<div class='currency'><span class='currency-type'>Litecoin:</span> $litcoin</div>";
        echo "</div>";
        echo "</div>";


    }
}
?>