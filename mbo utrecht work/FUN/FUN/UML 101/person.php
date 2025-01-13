<?php

class SimpleDate {
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year) {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function ToString() {
        return $this->day . "/" . $this->month . "/" . $this->year;
    }
}

class Address {
    private $street;
    private $city;
    private $zip;

    public function __construct($street, $city, $zip) {
        $this->street = $street;
        $this->city = $city;
        $this->zip = $zip;
    }

    public function ToString() {
        return $this->street . ", " . $this->city . ", " . $this->zip;
    }
}

class Person {
    private $name;
    private $address;
    private $dateOfBirth;

    public function __construct($name, $dateOfBirth, $street, $city, $zip) {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = new Address($street, $city, $zip);
    }

    public function __toString() {
        return "Name: " . $this->name . ", Date of Birth: " . $this->dateOfBirth->ToString() . ", Address: " . $this->address->ToString();
    }
}

?>
