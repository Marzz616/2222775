<?php

require_once 'Animal.php';

class Fish extends Animal {
    private $color;
    private $size;

    public function __construct($name, $age, $weight, $registrationNumber, $color, $size) {
        parent::__construct($name, $age, $weight, $registrationNumber);
        $this->color = $color;
        $this->size = $size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getDiet(): string {
        return "2 grams/day";
    }

    public function __toString() {
        return parent::__toString() . ", Color: " . $this->color . ", Size: " . $this->size;
    }
}
?>
