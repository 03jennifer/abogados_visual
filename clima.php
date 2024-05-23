<?php 

$api = "f9820337005cd410830a3e7fc7f903b2";
$cityApi = "Merida";
$url = "http://api.openweathermap.org/data/2.5/weather?q=$cityApi,mx&appid=$api&units=metric";
//$googleAppiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityApi . "&lang=en&units=metric&APPID="
// Realizar la solicitud a la API
$response = file_get_contents($url);
// Decodificar la respuesta JSON
$datosClima = json_decode($response, true);

// Verificar si se obtuvieron datos válidos
if ($datosClima && $datosClima['cod'] == 200) {
    // Extraer los datos relevantes

    $temperatura = $datosClima['main']['temp'];
    $descripcion = $datosClima['weather'][0]['description'];
    $fecha = date('d F Y', $datosClima['dt']);
    $velocidadViento = $datosClima['wind']['speed'] * 3.6;

    switch ($descripcion) {
        case 'clear sky':
            $descripcion_es = 'cielo despejado';
            $icono = '☀';
            break;
        case 'few clouds':
            $descripcion_es = 'pocas nubes';
            $icono = '🌤';
            break;
        case 'scattered clouds':
            $descripcion_es = 'nubes dispersas';
            $icono = '⛅';
            break;
        case 'broken clouds':
            $descripcion_es = 'nubes rotas';
            $icono = '🌥';
            break;
        case 'shower rain':
            $descripcion_es = 'lluvia ligera';
            $icono = '🌦';
            break;
        case 'rain':
            $descripcion_es = 'lluvia';
            $icono = '🌧';
            break;
        case 'thunderstorm':
            $descripcion_es = 'tormenta eléctrica';
            $icono = '⛈';
            break;
        case 'mist':
            $descripcion_es = 'neblina';
            $icono = '🌫';
            break;
        default:
            $descripcion_es = $descripcion; // Si no se encuentra la traducción, se usa la misma descripción en inglés
            break;
    }

    // Mostrar los datos
    echo '<div class="weather-info">';
    echo "Temperatura: <span class='temperature'>" . $temperatura . "°C</span><br>";
    echo "Descripción: <span class='description'>" . $descripcion_es . " " . $icono . "</span><br>";
    echo "Fecha: <span class='date'>" . $fecha . "</span><br>";
    echo "Vientos: <span class='wind-speed'>" . $velocidadViento . " Km/h</span>";
    echo '</div>';
    
} else {
    // Manejar el caso de error
    echo "No se pudieron obtener los datos del clima.";
}
?>