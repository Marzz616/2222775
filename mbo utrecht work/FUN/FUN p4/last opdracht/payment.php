<?php
class Payment {
    private $paymentID;
    private $amount;
    private $date;
    private $status;

    public function __construct($paymentID, $amount, $date) {
        $this->paymentID = $paymentID;
        $this->amount = $amount;
        $this->date = $date;
        $this->status = "pending";
    }

    public function confirmPayment() {
        $this->status = "paid";
    }

    public function getStatus() {
        return $this->status;
    }
}
?>
