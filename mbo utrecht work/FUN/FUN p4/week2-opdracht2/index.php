<?php

include 'Person.php';

$person1 = new Person("Alice", [15, 6, 1985], "123 Main St", "Springfield", "12345");
$person2 = new Person("Bob", [23, 9, 1990], "456 Elm St", "Shelbyville", "67890");

echo $person1 . PHP_EOL;
echo $person2 . PHP_EOL;

?>
