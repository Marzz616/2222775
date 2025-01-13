.<?php

// Include the Animal class
include 'cars.php';

$mycar = new car();

// Create an instance/object of the Animal class
$mycar->Setbrands("Bugatti");

// Set the species attribute using the setter method
$brands = $mycar->getbrands();

// Display the result
echo "The brands of my car is: " . $brands;

?>

