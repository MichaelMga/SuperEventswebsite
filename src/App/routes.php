<?php

 $routes = [
  rootUrl => ["name" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["home", []]  ],
  rootUrl . 'create' => ["name" => "create", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["admin/projects/new", []]  ]
];
