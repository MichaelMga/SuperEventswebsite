<html>

  <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href= "public/assets/main.css">
  </head>

   <body>
  
     <header> 
     
       <div id="navBar">

       
     <?php

        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){

          echo "<a href='" . rootUrl . "bLogout'><button>Se déconnecter</button></a>";


           if($_SESSION["username"] == admin){
 
              echo "<a href='" . rootUrl . "bLogout'><button>Utilisateurs</button></a>";

              echo "<a href='" . rootUrl . "bLogout'><button>Messages</button></a>";


           } else {

              echo "<a href='" . rootUrl . "bLogout'><button>Mon profil</button></a>";

              echo "<a href='" . rootUrl . "bLogout'><button>Messages</button></a>";

            
           }


    
        } else {

           echo "<a href='" . rootUrl . "login'><button>Se connecter</button></a>";
        
        }
        
      ?>   
         
          <a href="<?php echo rootUrl ?>register"><button>Créer un compte</button></a>
          <a href="<?php echo rootUrl ?>"><button>Demander un rendez-vous</button></a>



       </div>

    </header>


   <main>
   
