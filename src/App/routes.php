<?php

 $routes = [
  rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["home", []]  ] ,
  rootUrl . 'testEvent' => ["name" => "create", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["events/test", []]  ]
  ];
