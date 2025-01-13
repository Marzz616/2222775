<?php
class SimpleDate {
    public $day;
    public $month;
    public $year;

    public function __construct($day, $month, $year) {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function __toString() {
        return sprintf("%02d-%02d-%04d", $this->day, $this->month, $this->year);
    }
}
?>
