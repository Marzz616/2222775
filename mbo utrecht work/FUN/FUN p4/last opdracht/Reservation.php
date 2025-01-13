<?php
class Reservation {
    private $reservationID;
    private $customer;
    private $service;
    private $date;
    private $status;

    public function __construct($reservationID, $customer, $service, $date) {
        $this->reservationID = $reservationID;
        $this->customer = $customer;
        $this->service = $service;
        $this->date = $date;
        $this->status = "reserved";
    }

    public function getReservationID() {
        return $this->reservationID;
    }

    public function confirm() {
        $this->status = "confirmed";
    }

    public function cancel() {
        $this->status = "cancelled";
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDetails() {
        return "Reservation ID: $this->reservationID, Service: {$this->service->name}, Date: $this->date, Status: $this->status";
    }
}
?>
