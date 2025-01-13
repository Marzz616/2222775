<?php

require_once 'Animal.php';

class Cat extends Animal {
    private $badHabits;

    public function __construct($name, $age, $weight, $registrationNumber, $badHabits) {
        parent::__construct($name, $age, $weight, $registrationNumber);
        $this->badHabits = $badHabits;
    }

    public function setBadHabits($badHabits) {
        $this->badHabits = $badHabits;
    }

    public function getDiet(): string {
        return $this->age < 5 ? "35 grams/day" : "25 grams/day";
    }

    public function __toString() {
        return parent::__toString() . ", Bad Habits: " . $this->badHabits;
    }
}
?>
