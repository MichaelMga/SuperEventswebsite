<html>

  <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href= "public/assets/main.css">
       <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
       <script src="https://js.stripe.com/v3/"></script>
  </head>

   <body>
  
     <header> 
     
       <div id="navBar">

       
     <?php

        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){

          echo "<a href='" . rootUrl . "bLogout'><button>Se déconnecter</button></a>";

           if($_SESSION["username"] == admin){
              echo "<a href='" . rootUrl . "users'><button>Utilisateurs</button></a>";
              echo "<a href='" . rootUrl . "users'><button>Projets</button></a>";
              echo "<a href='" . rootUrl . "newProject'><button>Créer un projet</button></a>";
           } 

        } else {
           echo "<a href='" . rootUrl . "login'><button>Se connecter</button></a>";
           echo "<a href='<?php echo rootUrl ?>register'><button>Créer un compte</button></a>";
        }
        
      ?>   
         


       </div>

    </header>


   <main>
   
