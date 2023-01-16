
  <div id="cartContainer" style='margin-top: 3%; margin-bottom: 10vh; margin-left: 3%; height: 100%; width:40%; max-width: 1100px; display:flex; flex-direction:column;'>
  </div>

  <div class="rightCartContainer" >
         <div style="width:100%; height: 10%; background: white">
             5 images
         </div>
         <div style="height: 70%; width: 50%; display:flex; justify-content: flex-start">
            Prix à payer : 10$
         </div>

         <div style="height: 20%; width: 20%; display: flex; justify-content: flex-end">
           <button onclick='buyImages()'> Acheter mes images </button>
         </div>
  </div>

  <div class="mobileCartPaymentContainer">
     <div style='display: flex; flex-direction: row; justify-content: space-between; width:100%'>
         <div style="width: 40%; display:flex; justify-content: flex-start">
            Prix à payer : 10$
         </div>

         <div style="width: 40%; display: flex; justify-content: flex-end">
           <button onclick='buyImages()'> Acheter mes images </button>
         </div>
      </div>

  </div>


<script>

  window.onload = () => {
    displayCookieImages();
  }

</script>

</br>
