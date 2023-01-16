<?php
 require_once __DIR__ . '/src/autoload.php';
 require_once __DIR__ . '/env.php';
 require_once __DIR__ . '/src/const.php';
 require_once __DIR__ . '/src/App/routes.php';


 use App\component\httpComponent\Response;
 use App\component\Routing;

 $request = $_ENV['request'];
 $url = $request->getUrl();


$matcher = new routing\matcher\RouteMatcher($routes);

 try{

   if($matcher->routeFound($url)){

      $controller = new $routes[$url]["controller"];
      $method = $routes[$url]["method"];
      $parameters = $routes[$url]["parameters"];

      $response = call_user_func_array([$controller,$method] , $parameters );

    } else {
      $response = new Response("route not found");
    }

 } catch(Exception $e){

    $response = new Response($e);
    $response->setStatusCode(500);

 }

 $response->send();
