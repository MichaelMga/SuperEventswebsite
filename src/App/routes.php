<?php


 $routes = [
  rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["home", []]  ] ,
  rootUrl . 'testEvent' => ["name" => "create", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["events/test", []]  ],
  rootUrl . 'payment' => ["name" => "login", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["payment/stripeForm", []]  ],
  rootUrl . 'admin' => ["name" => "admin", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["admin/admin", []]  ],
  rootUrl . 'events/create' => ["name" => "new event", "controller" => "App\Controllers\AdminController" , "method" =>  "createNewEvent" , "parameters" => [$request->getGet("eventName", ""), []]  ],
  ];
