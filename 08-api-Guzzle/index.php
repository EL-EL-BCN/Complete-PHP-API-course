<?php

require "guzzle_test/vendor/autoload.php";

$client = new GuzzleHttp\Client;

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "token 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",
        "User-Agent" => "el_el"
    ]
]);

echo $response->getStatusCode(), "\n";

echo $response->getHeader("content-type")[0], "\n";

echo substr($response->getBody(), 0, 200), "...\n";