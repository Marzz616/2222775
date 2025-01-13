<?php
require_once 'Cat.php';
require_once 'Dog.php';

// Create instances
$birthday = new SimpleDate(1, 1, 2020);
$lastWalkDate = new SimpleDate(15, 6, 2024);

$cat = new Cat("Whiskers", 3, 12345, "Scratching furniture");
$cat->setBirthday(1, 1, 2020);
$cat->setAdopted(true);

$dog = new Dog("Buddy", 5, 67890, $lastWalkDate);
$dog->setBirthday(2, 2, 2019);
$dog->setAdopted(false);

// Print details
echo $cat . "\n";
echo $dog . "\n";
?>
