<?php
require_once 'Engine.php';

class Car {
    private $brand;
    private $constructionYear;
    private $licencePlate;
    private $engine;

    public function __construct($brand, $engineModel, $revs, $constructionYear, $licencePlate) {
        $this->brand = $brand;
        $this->constructionYear = $constructionYear;
        $this->licencePlate = $licencePlate;
        $this->engine = new Engine($engineModel, $revs);
    }

    public function CheckRevs() {
        return "The engine revs are: " . $this->engine->GetRevs();
    }
}
?>
