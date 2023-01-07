<?php

// Inicializa cURL
$ch = curl_init();

// Establece la URL de destino de la solicitud
curl_setopt($ch, CURLOPT_URL, 'https://bumblebee.hive.swarm.space/hive/login');

// Establece el método de solicitud como POST
curl_setopt($ch, CURLOPT_POST, true);

// Establece el tipo de contenido de la solicitud como application/x-www-form-urlencoded
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

// Establece el cuerpo de la solicitud como una cadena codificada en URL
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=kherman&password=boyas2022');

// Establece la opción CURLOPT_RETURNTRANSFER para que la función curl_exec devuelva el resultado de la solicitud en lugar de imprimirlo directamente
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecuta la solicitud
$response = curl_exec($ch);

// Establece la URL de destino de la solicitud
curl_setopt($ch, CURLOPT_URL, 'https://bumblebee.hive.swarm.space/hive/api/v1/telemetry/devices/latest');

// Establece el método de solicitud como GET
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPGET, true);

// Establece el tipo de contenido de la solicitud como application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Establece la opción CURLOPT_RETURNTRANSFER para que la función curl_exec devuelva el resultado de la solicitud en lugar de imprimirlo directamente
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecuta la solicitud
$response = curl_exec($ch);

// Procesa la respuesta
$responseData = json_decode($response, true);

// Muestra la respuesta
print_r($responseData);

// Cierra la sesión cURL
curl_close($ch);

?>