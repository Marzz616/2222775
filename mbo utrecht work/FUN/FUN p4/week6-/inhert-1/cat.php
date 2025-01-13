<?php
require_once 'Animal.php';

class Cat extends Animal {
    private $badHabits;

    public function __construct($name, $age, $registrationNumber, $badHabits) {
        parent::__construct($name, $age, $registrationNumber);
        $this->badHabits = $badHabits;
    }

    public function setBadHabits($badHabits) {
        $this->badHabits = $badHabits;
    }

    public function __toString() {
        return parent::__toString() . ", Bad Habits: $this->badHabits";
    }
}
?>
