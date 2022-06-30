
  <h1>Bienvenue chez AFB</h1>

</br>
   <form id="searchEventForm" action="<?php echo rootUrl ?>">
     <input id="eventInput" type="text" placeholder="search your event">
     <button onclick="executeLoadingScript(event)">Chercher</button>
 </form>

 <form id="createEventForm" action="<?php echo rootUrl ?>">
   <input id="createEventInput" type="text" placeholder="search your event">
   <button onclick="executeLoadingScript(event)">Chercher</button>
</form>


<script>

  const executeLoadingScript = (event) => {
    document.getElementById("searchEventForm").action += document.getElementById("eventInput").value;
  }

  const createEvent = (event) => {
    document.getElementById("createEventForm").action += document.getElementById("createEventInput").value;
  }

</script>
