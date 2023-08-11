<?php

// Conf
$ch = curl_init();

$url = 'https://pokeapi.co/api/v2/pokemon/ditto';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute req
$response = curl_exec($ch);

$data = json_decode($response);

// Ver la estructura del objeto
print_r($data);

// Cerrar el recurso cURL
curl_close($ch);
