<?php

namespace Source\Controllers;

use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

/**
 * @package Source\Controllers
 */
class Pay
{
    /**
     * Home
     * @return void
     */
    public function home(): void
    {
        include __DIR__ . "/../../theme/home.php";
    }

    /**
     * Create
     * @param array $data
     * @return void
     */
    public function create(array $data): void
    {
        $data = filter_var_array($data, FILTER_UNSAFE_RAW);

        $stripe = new Stripe();
        $stripe::setApiKey(CONF_STRIPE_API_KEY);

        $customer = new Customer();
        $customer::create([
            "email" => $data["email"],
            "source" => $data["stripeToken"],
        ]);

        $charge = new Charge();

        var_dump($stripe, $customer, $data);

        include __DIR__ . "/../../theme/pay.php";
    }
}
