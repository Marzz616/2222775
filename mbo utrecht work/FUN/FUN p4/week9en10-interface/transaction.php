<?php

class Transaction {
    private $amount;
    private $paymentMethod;
    private $status;
    private $timestamp;
    private $transactionId;

    public function __construct($amount, IPaymentMethod $paymentMethod, $transactionId) {
        $this->amount = $amount;
        $this->paymentMethod = $paymentMethod;
        $this->transactionId = $transactionId;
        $this->status = "Initialized";
    }

    public function executeTransaction() {
        $this->timestamp = date('Y-m-d H:i:s');
        try {
            $this->paymentMethod->processPayment($this->amount);
            $this->setStatus("Completed");
        } catch (Exception $e) {
            $this->setStatus("Failed");
        }
    }

    public function cancelTransaction() {
        try {
            $this->paymentMethod->cancelPayment($this->transactionId);
            $this->setStatus("Cancelled");
        } catch (Exception $e) {
            $this->setStatus("Failed");
        }
    }

    public function getTransactionDetails() {
        return "Transaction ID: " . $this->transactionId . ", Amount: " . $this->amount . 
               ", Status: " . $this->status . ", Timestamp: " . $this->timestamp;
    }

    private function setStatus($status) {
        $this->status = $status;
    }
}
?>
