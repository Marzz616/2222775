<?php
abstract class Service {
    protected $serviceID;
    protected $name;
    protected $price;

    public function __construct($serviceID, $name, $price) {
        $this->serviceID = $serviceID;
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function book();
    abstract public function cancel();
}
?>
