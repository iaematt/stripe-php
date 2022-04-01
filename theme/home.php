<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stripe</title>
</head>
<body>
    <form action="" method="POST" id="payment-form">
        <input type="email" name="email" class="StripeElement StripeElement--empty"
        placeholder="nome@servidor.com" required />
        <br />
        <div id="card-element"></div>
        <div id="card-errors"></div>
        <br />
        <button type="submit">Enviar pagamento</button>
    </form>

    <script src="theme/js/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="theme/js/charge.js"></script>
</body>
</html>
