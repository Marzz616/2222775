<?php

include 'Person.php';

$date1 = new SimpleDate(10, 5, 1990);
$date2 = new SimpleDate(15, 8, 1985);

$person1 = new Person("John Doe", $date1, "123 Main St", "Cityville", "12345");
$person2 = new Person("Jane Smith", $date2, "456 Elm St", "Townsville", "54321");

echo $person1 . "\n";
echo $person2->ToString() . "\n";

?>
