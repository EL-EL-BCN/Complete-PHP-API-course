<?php
$curlHandle = curl_init();

$requestHeaders = [
    "Accept: application/vnd.github+json",
    "Authorization: Bearer ghp_xxxxxxxxxxxxxxxxxxx"
];

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "https://api.github.com/repos/httpie/httpie/stargazers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $requestHeaders,
    CURLOPT_USERAGENT => "el_el"
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";
echo $response, "\n";
?>