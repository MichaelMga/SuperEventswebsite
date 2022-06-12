
  <h1>Bienvenue chez AFB</h1>

</br>


<form id="myForm" action="<?php echo rootUrl ?>?event=" method="post">
   <input type="text" placeholder="search your event">
   <button>Chercher</button>
</form>

<script>

  window.onload = () => executeLoadingScript();

  const executeLoadingScript = () => {

    document.getElementById("myForm").action+="value";

  }

</script>
