<?php

 $_ENV['projectRoot'] = $_SERVER['DOCUMENT_ROOT'] . '/AFB';

 require_once $_ENV["projectRoot"] . '/src/autoload.php';

//Request

 use App\component\httpComponent\Request;
 $_ENV['request'] = Request::createFromSuperGlobals();

 //Mailer

$_ENV['SMTP_USER'] = 'middleweightsoul@gmail.com';
$_ENV['mailSender'] = $_ENV['SMTP_USER'];

$_ENV['SMTP_PASSWORD'] = 'zutvxwocrsijldeb';

// Default route error

$_ENV['default_error'] = "Nous sommes désolés, il y'a eu une erreur!!!";


// Stripe

$_ENV['stripeApiKey'] = 'sk_test_51IxbD8AxhkbQXqSAWWzfHf3gwc0d9Oj6ziEBgpcAOGuCVoMhHxshIfLURANm8nwv2ppRMAHNfAlsKY4CX4kXg7VO00t1CFJRoT';

$_ENV['stripeImageUnitPriceKey'] = 'price_1LHUWzHsoMXBsfUu27pVxek3';
