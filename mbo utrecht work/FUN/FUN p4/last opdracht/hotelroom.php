<?php
require_once 'Service.php';

class HotelRoom extends Service {
    private $roomNumber;
    private $type;

    public function __construct($serviceID, $name, $price, $roomNumber, $type) {
        parent::__construct($serviceID, $name, $price);
        $this->roomNumber = $roomNumber;
        $this->type = $type;
    }

    public function book() {
        // Code to book a hotel room
    }

    public function cancel() {
        // Code to cancel a hotel room booking
    }
}
?>
