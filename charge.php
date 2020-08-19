<?php
require_once "vendor/autoload.php";

if(isset($_POST['stripeToken']) && !empty($_POST['stripeToken'])){

require_once 'stripe-php/init.php';

 \Stripe\Stripe::setApiKey("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"); 

$token = $_POST['stripeToken'];
try {  
        $customer = \Stripe\Customer::create(array( 
            'email' => $_POST['email'], 
            'source'  => $token 
        )); 
    }catch(Exception $e) {  
        $api_error = $e->getMessage();  
    }
  try {  
            $charge = \Stripe\Charge::create(array( 
                'customer' => $customer->id, 
                'amount'   => $_POST['amount']*100, 
                'currency' => 'INR',  
            )); 
        }catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
 
  if(empty($api_error) && $charge){ 
         
            // Retrieve charge details 
            $chargeJson = $charge->jsonSerialize(); 
         
            // Check whether the charge is successful 
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
                // Transaction details  
                $transactionID = $chargeJson['balance_transaction']; 
                $paidAmount = $chargeJson['amount'];  
                $paidCurrency = $chargeJson['currency']; 
                $payment_status = $chargeJson['status'];
 if($payment_status == 'succeeded')
  echo "payment is successful.your payment id is: ".$transactionID;
else
  echo "Transaction failed";
}}
  else{
  echo api_error;
  }
  }
  else
    echo "Invalid API keys";

