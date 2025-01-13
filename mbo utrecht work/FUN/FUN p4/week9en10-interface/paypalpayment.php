
<?php

require_once 'IPaymentMethod.php';

class PayPalPayment implements IPaymentMethod {
    public function processPayment($amount) {
        echo "Processing PayPal payment of $" . $amount . "\n";
    }

    public function cancelPayment($transactionId) {
        echo "Cancelling PayPal payment with transaction ID: " . $transactionId . "\n";
    }

    public function getPaymentDetails($transactionId) {
        return "PayPal Payment - Transaction ID: " . $transactionId;
    }
}
?>
