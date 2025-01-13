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

    public function __toString() {
        return "$this->day-$this->month-$this->year";
    }
}
?>
