<?php

require_once 'IPaymentMethod.php';

class CreditCardPayment implements IPaymentMethod {
    public function processPayment($amount) {
        echo "Processing Credit Card payment of $" . $amount . "\n";
    }

    public function cancelPayment($transactionId) {
        echo "Cancelling Credit Card payment with transaction ID: " . $transactionId . "\n";
    }

    public function getPaymentDetails($transactionId) {
        return "Credit Card Payment - Transaction ID: " . $transactionId;
    }
}
?>
