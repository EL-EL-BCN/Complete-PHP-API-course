<?php
$curlHandle = curl_init();

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "http://api.openweathermap.org/data/2.5/forecast?q=Paris&appid=a44c2366eada4d91b124e9a01d82f381",
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";
echo $response, "\n";
?>