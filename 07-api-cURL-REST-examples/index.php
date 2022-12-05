<!-- GET a list of gists -->

<?php
$curlHandle = curl_init();

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "https://api.github.com/gists",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "el_el",
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";

$data = json_decode($response, true);

foreach ($data as $gist) {
    echo "<span>".$gist['id']." - ". $gist['description']."</span><br>";
}
?>

<!-- GET information about a specific gists -->

<?php
$curlHandle = curl_init();

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "https://api.github.com/gists/e02a0a1e71d22b67a8e6267d109893df",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "el_el",
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";

print_r($data);
?>