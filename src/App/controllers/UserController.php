<?php

 namespace App\controllers;

 require_once 'src/autoload.php';

 use App\controllers\abstractClass\AbstractController;
 use App\component\httpComponent\Response;
 use App\component\httpComponent\JsonResponse;
 use App\model\entities\Entity;


 require_once "src/services/database/entityManager.php";




class UserController extends AbstractController
{

    public function seeUser($userId) : Response
    {

        $user = $this->getSuperOrm()->getRepository("user")->getElementFromId($userId);
        $pendingProjects = $this->getSuperOrm()->getRepository("project")->getAllElementsFromProperties(["user_id" => $userId, "status" => "pending" ]);
        $waitingPaymentProjects = $this->getSuperOrm()->getRepository("project")->getAllElementsFromProperties(["user_id" => $userId, "status" => "waitingPayment" ]);
        $doneProjects = $this->getSuperOrm()->getRepository("project")->getAllElementsFromProperties(["user_id" => $userId, "status" => "done" ]);
          
        return $this->renderPage("admin/seeUser", ["user" => $user , "pendingProjects" =>  $pendingProjects , "waitingPaymentProjects" => $waitingPaymentProjects ,  "doneProjects" => $doneProjects ]);
   
   }



   public function getUserFromNameAsync($userName) : JsonResponse
    {
        
      $foundUser = true;

      return new JsonResponse(["foundUser" => $foundUser]);

   }

}