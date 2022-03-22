<?php

$example = file_get_contents('example.txt');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:42069/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $example);
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000); // Max connection time, returns null when reached
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

var_dump($output);