<h1>
  Here is your form
</h1>

<!-- Add the following code where you want to display the form -->
	<div class="typeform-widget" data-url="YOUR_TYPEFORM_URL" data-transparency="50" data-hide-headers=true data-hide-footer=true style="width: 100%; height: 500px;"></div>
	<!-- Add the following script to handle the form submission and redirect to another page -->
	<script>
		var form = document.querySelector('.typeform-widget');
		form.addEventListener('submit', function() {
			var email = encodeURIComponent(document.querySelector('input[name="email"]').value);
			window.location.href = "YOUR_REDIRECT_PAGE_URL?email=" + email;
		});
	</script>

  <input id="userMailInput" placeholder="Adresse mail"/>
  <input id="userMailConfirmationInput" placeholder="Confirmation Adresse mail"/>
  <button onclick="sendMailIfValid()">Valider</button>
