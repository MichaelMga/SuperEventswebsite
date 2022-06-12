
  <h1>Bienvenue chez AFB</h1>

</br>


<form id="myForm" action="<?php echo rootUrl ?>?event=" method="post">
   <input id="eventInput" type="text" placeholder="search your event">
   <button onclick="executeLoadingScript(event)">Chercher</button>
</form>

<script>

  const executeLoadingScript = (event) => {
    document.getElementById("myForm").action += document.getElementById("eventInput").value;
  }

</script>
