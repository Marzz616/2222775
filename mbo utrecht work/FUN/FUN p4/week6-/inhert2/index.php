<?php
require_once 'Administrator.php';

// Create instances
$cat = new Cat("Whiskers", 3, 12345, "Scratching furniture");
$cat->setBirthday(1, 1, 2020);
$cat->setAdopted(true);

$dog = new Dog("Buddy", 5, 67890, new SimpleDate(15, 6, 2024));
$dog->setBirthday(2, 2, 2019);
$dog->setAdopted(false);

$fish = new Fish("Nemo", 1, 54321, "Orange", "Small");
$fish->setBirthday(3, 3, 2021);

// Administrator actions
$admin = new Administrator('animals.txt');
$admin->addAnimal($cat);
$admin->addAnimal($dog);
$admin->addAnimal($fish);

// Show animals
echo "Current Animals:\n";
echo $admin->showAnimals();

// Save animals to file
$admin->saveAnimals();
?>
