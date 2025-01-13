<?php
require_once 'Vehicle.php';

class Owner {
    private $ownerID;
    private $name;
    private $vehicles;

    public function __construct($ownerID, $name) {
        $this->ownerID = $ownerID;
        $this->name = $name;
        $this->vehicles = array();
    }

    public function addVehicle($vehicle) {
        if ($vehicle instanceof Vehicle) {
            $this->vehicles[$vehicle->getID()] = $vehicle;
            return true;
        }
        return false;
    }

    public function removeVehicle($vehicleID) {
        if (isset($this->vehicles[$vehicleID])) {
            unset($this->vehicles[$vehicleID]);
            return true;
        }
        return false;
    }

    public function listVehicles() {
        return $this->vehicles;
    }
}
?>
