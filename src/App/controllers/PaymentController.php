<?php

namespace App\Controllers;

use App\Controllers\abstractClass\AbstractController;
use App\component\httpComponent\Response;
use App\model\services\Mailer;


class PaymentController extends AbstractController {

   public function displayPaymentPage(int $numberOfElements, string $mail) : Response {

    return $this->renderPage("payment/checkout", [
      "numberOfElements" => $numberOfElements,
      "mail" => $mail,
      "stripeApiKey" => $_ENV["stripeApiKey"],
      "unitPrice" => $_ENV["stripeImageUnitPriceKey"]
    ]);

   }

   public function renderSuccessCheckoutPage(string $mail) : Response {

        Mailer::send($_ENV["mailSender"], $mail);
        return $this->renderPage("payment/success");

   }

    public function renderCartPage(): Response {

      return $this->renderPage("payment/cart");

    }
}
