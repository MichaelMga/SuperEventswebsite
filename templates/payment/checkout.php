<?php

require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51H03AQHsoMXBsfUuXefwcN7pALjO3Bg7zHL204QfsI8YIs6N4WmTCjkPFMmYYw7DMwJVPhUzrpL7wnllbtMpVbuj00QMBYI2uJ');

header('Content-Type: application/json');


$mail = $_GET["mail"];

$checkout_session = \Stripe\Checkout\Session::create([

  'customer_email' => $mail,

  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => $unitPrice,
    'quantity' => $numberOfElements,
  ]],
  'mode' => 'payment',
  'success_url' => "http://localhost:8888/AFB/checkout-success?mail=$mail",
  'cancel_url' => 'http://localhost:8888/AFB/',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
