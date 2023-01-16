

<div id = "mainDiv">
    <div style=" height: 100%; width:100%; max-width: 1100px; display:flex; align-content: flex-start; flex-wrap: wrap; flex-direction: row">
<?php

  $imgFolder = glob("public/eventImages/$event/*.jpg");


  foreach($imgFolder as $index => $image){

      $imgKey = "img_$index";

      if(isset($_COOKIE[$imgKey])){
        echo "<div class='mainImageContainer' >
                <img class='mainImage' src='$image' />
                <button id='addImgBtn_img_$index' onclick='removeImageFromCart(`$imgKey`)'>Retirer</button>
             </div>";

      } else {

        echo "<div class='mainImageContainer' >
                <img  class='mainImage' src='$image' />
                <button id='addImgBtn_img_$index' onclick='addImageToCart(`$imgKey`, `$image` )'>Ajouter</button>
             </div>";
      }

  }


 ?>

    </div>

  </div>

</div>
