<?php

class Car {
    private $brands;

    public function Setbrands($newbrands) {
        $this->brands = $newbrands;
    }

    public function getbrands() {
        return $this->brands;
    }
}

?>