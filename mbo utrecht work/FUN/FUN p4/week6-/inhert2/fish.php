<?php
require_once 'Animal.php';

class Fish extends Animal {
    private $color;
    private $size;

    public function __construct($name, $age, $registrationNumber, $color, $size) {
        parent::__construct($name, $age, $registrationNumber);
        $this->color = $color;
        $this->size = $size;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function __toString() {
        return parent::__toString() . ", Color: $this->color, Size: $this->size";
    }
}
?>
