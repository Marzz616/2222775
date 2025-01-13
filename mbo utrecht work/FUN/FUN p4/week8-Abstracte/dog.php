<?php

require_once 'Animal.php';
require_once 'SimpleDate.php';

class Dog extends Animal {
    private $lastWalkDate;

    public function __construct($name, $age, $weight, $registrationNumber, $lastWalkDate) {
        parent::__construct($name, $age, $weight, $registrationNumber);
        $this->lastWalkDate = new SimpleDate($lastWalkDate['day'], $lastWalkDate['month'], $lastWalkDate['year']);
    }

    public function setLastWalkDate($day, $month, $year) {
        $this->lastWalkDate = new SimpleDate($day, $month, $year);
    }

    public function getLastWalkDate() {
        return $this->lastWalkDate;
    }

    public function getDiet(): string {
        return $this->age < 5 ? "40 grams/day" : "30 grams/day";
    }

    public function __toString() {
        return parent::__toString() . ", Last Walk Date: " . $this->lastWalkDate;
    }
}
?>
