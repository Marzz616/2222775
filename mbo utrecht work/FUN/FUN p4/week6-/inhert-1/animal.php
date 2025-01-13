<?php
require_once 'SimpleDate.php';

class Animal {
    protected $name;
    protected $age;
    protected $birthday;
    protected $registrationNumber;
    protected $isAdopted;

    public function __construct($name, $age, $registrationNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->registrationNumber = $registrationNumber;
        $this->isAdopted = false;
        $this->birthday = null;

public function getRegistrationNumber() {
    return $this->registrationNumber;
}

    }

    public function incrementAge() {
        $this->age += 1;
    }

    public function setAdopted($isAdopted) {
        $this->isAdopted = $isAdopted;
    }

    public function setBirthday($day, $month, $year) {
        $this->birthday = new SimpleDate($day, $month, $year);
    }

    public function __toString() {
        $adoptedStatus = $this->isAdopted ? "Yes" : "No";
        $birthdayStr = $this->birthday ? $this->birthday->__toString() : "Unknown";
        return "Name: $this->name, Age: $this->age, Birthday: $birthdayStr, Registration Number: $this->registrationNumber, Adopted: $adoptedStatus";
    }
}
?>
