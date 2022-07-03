<?php

  namespace App\controllers;

  require_once 'src/autoload.php';

  use App\controllers\abstractClass\AbstractController;
  use App\component\httpComponent\Response;


   class AdminController extends AbstractController {

       function createNewEvent () : Response {

         return new Response("new event created :) ");

       }

   }


 ?>
