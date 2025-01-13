<?php

interface IPaymentMethod {
    public function processPayment($amount);
    public function cancelPayment($transactionId);
    public function getPaymentDetails($transactionId);
}
?>
