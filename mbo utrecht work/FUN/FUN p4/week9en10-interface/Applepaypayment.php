<?php

require_once 'IPaymentMethod.php';

class ApplePayPayment implements IPaymentMethod {
    public function processPayment($amount) {
        echo "Processing Apple Pay payment of $" . $amount . "\n";
    }

    public function cancelPayment($transactionId) {
        echo "Cancelling Apple Pay payment with transaction ID: " . $transactionId . "\n";
    }

    public function getPaymentDetails($transactionId) {
        return "Apple Pay Payment - Transaction ID: " . $transactionId;
    }
}
?>
