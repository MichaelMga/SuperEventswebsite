<?php

 namespace App\controllers;

 use App\controllers\abstractClass\AbstractController;
 use App\component\httpComponent\Response;


  class EventController extends AbstractController {

     public function displayEvent(string $event) : Response {
       return $this->renderPage("events/page", ["event" => $event] );
     }

  }
