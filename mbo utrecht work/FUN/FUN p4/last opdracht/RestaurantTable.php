<?php
require_once 'Service.php';

class RestaurantTable extends Service {
    private $tableNumber;
    private $capacity;

    public function __construct($serviceID, $name, $price, $tableNumber, $capacity) {
        parent::__construct($serviceID, $name, $price);
        $this->tableNumber = $tableNumber;
        $this->capacity = $capacity;
    }

    public function book() {
        // Code to book a restaurant table
    }

    public function cancel() {
        // Code to cancel a restaurant table booking
    }
}
?>
