<?php
require_once 'Owner.php';
require_once 'Vehicle.php';

// Create an Owner instance
$owner = new Owner(1, "John Doe");

// Create Vehicle instances
$vehicle1 = new Vehicle(101, "Toyota Camry", 2010);
$vehicle2 = new Vehicle(102, "Honda Accord", 2015);

// Add vehicles to the owner
$owner->addVehicle($vehicle1);
$owner->addVehicle($vehicle2);

// List all vehicles owned by the owner
$vehicles = $owner->listVehicles();
foreach ($vehicles as $vehicle) {
    echo $vehicle->getDetails() . "\n";
}

// Remove a vehicle from the owner
$owner->removeVehicle(101);

// List all vehicles after removal
$vehicles = $owner->listVehicles();
foreach ($vehicles as $vehicle) {
    echo $vehicle->getDetails() . "\n";
}
?>