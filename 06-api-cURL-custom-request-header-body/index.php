<!-- GET PUT & DELETE CUSTOM cURL API HTTP HEADERS for use with github -->

<?php
/*
$curlHandle = curl_init();

$requestHeaders = [
    "Accept: application/vnd.github+json",
    "Authorization: Bearer ghp_xxxxxxxxxxxxxxxxxxxxxxxxx"
];

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $requestHeaders,
    CURLOPT_USERAGENT => "el_el",
    CURLOPT_CUSTOMREQUEST => "PUT" // CURLOPT_CUSTOMREQUEST => "DELETE"
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";
echo $response, "\n";
*/
?>


<!-- POST CUSTOM cURL API HTTP HEADERS for use with github -->
<?php
$curlHandle = curl_init();

$requestHeaders = [
    "Accept: application/vnd.github+json",
    "Authorization: Bearer ghp_xxxxxxxxx"
];

$requestPayload = json_encode([
    "name" => "Created from API",
    "description" => "An example API-created repo"
]); 

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $requestHeaders,
    CURLOPT_USERAGENT => "el_el",
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $requestPayload
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";
echo $response, "\n";
?>