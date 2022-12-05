<!-- Using cURL with stripe -->

<?php
/*
$api_key = "sk_test_xxxxxx";

$data = [
    "name" => "Bob",
    "email" => "bob@example.com"
];

$curlhandler = curl_init();

curl_setopt_array($curlhandler, [
    CURLOPT_URL => 'https://api.stripe.com/v1/customers',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS => http_build_query($data)
]);

$response = curl_exec($curlhandler);

curl_close($curlhandler);

echo $response;
*/
?>


<!-- Using Stripe SDK packages to perform the API -->
<?php

$api_key = "sk_test_51M8ftyFA0rVlkahNEeRIq9bnibHsmRsBpXjMP6ATQXQkn0NCpdcxcYk3ctmk49hUOXYMwWK9gs8XEqSmiFxYe4eb00N6FCZmbP";

$data = [
    "name" => "Alice",
    "email" => "alice@example.com"
];

require "stripeSDK/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;
?>