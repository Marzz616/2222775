<?php
require_once 'Animal.php';

class Dog extends Animal {
    private $lastWalkDate;

    public function __construct($name, $age, $registrationNumber, $lastWalkDate) {
        parent::__construct($name, $age, $registrationNumber);
        $this->lastWalkDate = $lastWalkDate;
    }

    public function setLastWalkDate($day, $month, $year) {
        $this->lastWalkDate = new SimpleDate($day, $month, $year);
    }

    public function getLastWalkDate() {
        return $this->lastWalkDate;
    }

    public function __toString() {
        $lastWalkStr = $this->lastWalkDate ? $this->lastWalkDate->__toString() : "Unknown";
        return parent::__toString() . ", Last Walk Date: $lastWalkStr";
    }
}
?>
