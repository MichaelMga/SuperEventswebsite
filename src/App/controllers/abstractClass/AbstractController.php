<?php

namespace App\controllers\abstractClass;
use App\Component\HttpComponent\Response;



abstract class AbstractController
{

   protected function renderPage($page, $array=[]) : Response
   {

      extract($array);

      ob_start();
      include "templates/base.php";
      include "templates/$page.php";
      include "templates/footer.php";


      $content = ob_get_clean();
      return new Response($content);

   }
}
