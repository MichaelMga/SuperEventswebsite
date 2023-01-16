
<h1> Set your bank information </h1>

    <title>Buy cool new product</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <section>
      <div class="product">
        <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
        <div class="description">
          <h3>Stubborn Attachments</h3>
          <h5>$20.00</h5>
        </div>
      </div>
      <form action="/AFB/create-checkout-session" method="POST">
        <input type='text' name='numberOfElements' value='' placeholder="set number of picture to pay">
        <button type="submit" id="checkout-button">Pay picture(s)</button>
      </form>
    </section>
  </body>
</html>
