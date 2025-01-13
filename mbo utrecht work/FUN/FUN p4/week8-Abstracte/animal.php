<?php

abstract class Animal {
    protected $name;
    protected $age;
    protected $birthday;
    protected $registrationNumber;
    protected $isAdopted;
    protected $weight;

    public function __construct($name, $age, $weight, $registrationNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->registrationNumber = $registrationNumber;
    }

    public function incrementAge() {
        $this->age++;
    }

    public function setAdopted($isAdopted) {
        $this->isAdopted = $isAdopted;
    }

    public function setBirthday($day, $month, $year) {
        $this->birthday = new SimpleDate($day, $month, $year);
    }

    public function getRegistrationNumber() {
        return $this->registrationNumber;
    }

    public function __toString() {
        return "Name: $this->name, Age: $this->age, Weight: $this->weight, Registration Number: $this->registrationNumber";
    }

    abstract public function getDiet(): string;
}
?>
