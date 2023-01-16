<?php

 $request = $_ENV["request"];

 $routes = [
  rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["home", []]  ] ,
  rootUrl . 'event' => ["name" => "create", "controller" => "App\Controllers\EventController" , "method" =>  "displayEvent" , "parameters" => [$request->getGet("name", ""), []]  ],
  rootUrl . 'payment' => ["name" => "login", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["payment/stripeForm", []]  ],
  rootUrl . 'create-checkout-session' => ["name" => "create session checkout", "controller" => "App\Controllers\PaymentController" , "method" => "displayPaymentPage", "parameters" => [$request->getGet("numberOfElements", 1), $request->getGet("mail", "")]],
  rootUrl . 'checkout-success' => ["name" => "", "controller" => "App\Controllers\PaymentController", "method" => "renderSuccessCheckoutPage", "parameters" => [$request->getGet("mail", "")]],
  rootUrl . 'cart' => ["name" => "", "controller" => "App\Controllers\PaymentController", "method" => "renderCartPage", "parameters" => []],
  rootUrl . 'search' => ["name" => "" , "controller" => "App\controllers\SearchController", "method" => "search" , "parameters" => [$request->getGet("searchValue", "")] ],
  rootUrl . 'mailForm' => ["name" => "" , "controller" => "App\controllers\MailController", "method" => "renderMailForm" , "parameters" => [] ],
  ];
