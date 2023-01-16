<?php

 namespace App\controllers;

 use App\controllers\abstractClass\AbstractController;
 use App\component\HttpComponent\JsonResponse;


  class SearchController extends AbstractController{

      public function search ( string $searchValue ) : JsonResponse {

         $searchResult;

         if(is_dir('public/eventImages/' . $searchValue )){
           $searchResult = ['found' => 'found'];
         } else {
           $searchResult = ['found' => 'notFound'];
         }

         return new JsonResponse($searchResult);
      }

  }
