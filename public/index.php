<?php

$url = $_ENV["api_url"] ?? "https://jsonplaceholder.typicode.com/users";
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, $url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($cURLConnection);
curl_close($cURLConnection);
echo $result;