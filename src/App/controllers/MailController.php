<?php

 namespace App\controllers;

 use App\controllers\abstractClass\AbstractController;

 class MailController extends AbstractController {


    public function renderMailForm (){

        return $this->renderPage("mail/form");

    }

 }
