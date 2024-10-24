<?php 
require 'vendor/autoload.php';
 use Binance\API;

 //Inicializar la API y sus credenciales
 $api = new API('bYg0yEZYSJyourdvV2xtyrgxxm51Hw74lIZw5MmGSAe88xbARSvBlmif40wiGALB','qGJ8EVZvrJoxgcj8Fl03Pufo41GVT5WoGXz8wSSkIMxBN5KIVM9SnXjFngZd0dWH');

 // Deshabilita la verificación del certificado SSL (solo en entorno de desarrollo)
//$api->disableCertCheck();

 //obtiene el precio de BT/USDT
 $ticker = $api -> price ('BTCUSDT');

 

 //Mostrar en la pagina
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binance API - Precio de BTC</title>
 </head>
 <body>
    <h1>Precio actual de BTC/USDT</h1>
    <p>El precio de Bitcoin es: <?php echo $ticker; ?> USDT</p>
 </body>
 </html>
