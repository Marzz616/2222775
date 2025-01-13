<?php
require_once 'Service.php';

class CarRental extends Service {
    private $carModel;
    private $rentalPeriod;

    public function __construct($serviceID, $name, $price, $carModel, $rentalPeriod) {
        parent::__construct($serviceID, $name, $price);
        $this->carModel = $carModel;
        $this->rentalPeriod = $rentalPeriod;
    }

    public function book() {
        // Code to rent a car
    }

    public function cancel() {
        // Code to cancel a car rental
    }
}
?>
