<?php
$curlHandle = curl_init();

$requestHeaders = [
    "Authorization: Client-ID _ulE3RpFu6ontC309tETZNqE_fzwlLcwQL9o3m-gHYI"
];

$responseHeaders = [];

$headerCallback = function($curlHandle, $header) use (&$responseHeaders) {
    $len = strlen($header);
    $parts = explode(":", $header, 2);
    if (count($parts) < 2) {
        return $len;
    }
    $responseHeaders[$parts[0]] = trim($parts[1]);
    return $len;
};

curl_setopt_array($curlHandle, [
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $requestHeaders,
    CURLOPT_HEADERFUNCTION => $headerCallback
]);

$response = curl_exec($curlHandle);

$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle);

echo "<p>cURL status code: $statusCode</p><br>";
print_r($responseHeaders);
echo $response, "\n";
?>