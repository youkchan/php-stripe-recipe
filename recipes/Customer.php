<?php

namespace Recipes;

/*
 *
 * Stripe Customer Class
 *
 */
use Exception;

class Customer 
{

    private $stripeClient;
    
    public function __construct(\Stripe\StripeClient $stripeClient) {
        $this->stripeClient = $stripeClient;
    }

    public function create_customer(){
    
        try {
            $customer = $this->stripeClient->customers->create();
        } catch (Exception $e) {
            throw new Exception('Failed a customer creation');
        }
    
        return $customer->id;
    
    }

}
