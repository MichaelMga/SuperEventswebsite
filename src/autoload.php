<?php

 spl_autoload_register(function($className){

    $classPath = str_replace("\\","/", $className);


    if(file_exists($_ENV["projectRoot"] . "/src/$classPath.php")){

      require_once "src/$classPath.php";

    }


 });
