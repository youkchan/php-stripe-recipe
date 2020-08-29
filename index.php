<?php
require_once('vendor/autoload.php');
require_once('recipes/Customer.php');
use Recipes\Customer;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$stripeClient = new \Stripe\StripeClient(
     $_ENV['STRIPE_SECRET_KEY']
);

$customer = new Customer($stripeClient);
$id = $customer->create_customer();

echo $id;
