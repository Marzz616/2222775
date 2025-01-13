<?php

include 'SimpleDate.php';
include 'Address.php';

class Person {
    private $name;
    private $address;
    private $dateOfBirth;

    public function __construct($name, $dateOfBirth, $street, $city, $zip) {
        $this->name = $name;
        $this->dateOfBirth = new SimpleDate($dateOfBirth[0], $dateOfBirth[1], $dateOfBirth[2]);
        $this->address = new Address($street, $city, $zip);
    }

    public function __toString() {
        return "Person(name: $this->name, dateOfBirth: $this->dateOfBirth, address: $this->address)";
    }
}

?>