<?php

  namespace App\controllers;

  require_once 'src/autoload.php';

  use App\controllers\abstractClass\AbstractController;
  use App\component\httpComponent\Response;


   class AdminController extends AbstractController {

       function createNewEvent () : Response {

         $entityManager = $this->getEntityManager();

         if($entityManager){
            return new Response("we just reached the entityManager!!");
         }

         return new Response("new event created :) ");

       }

   }


 ?>
