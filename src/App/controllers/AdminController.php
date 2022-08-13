<?php

  namespace App\controllers;

  require_once 'src/autoload.php';

  use App\model\entities\Event;
  use App\controllers\abstractClass\AbstractController;
  use App\component\httpComponent\Response;
  use App\model\entities\EntityInsertionQueryBag;


   class AdminController extends AbstractController {

       function createNewEvent (string $eventName) : Response {

         $entityManager = $this->getEntityManager();

         $event = new Event();
         $event->setName($eventName);

        $entityManager->insert($event);

        return new Response("anniv mathéo created!!");

       }
   }

 ?>
