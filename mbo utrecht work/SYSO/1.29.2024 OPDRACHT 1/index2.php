<?php
class Firework {
    // Properties declaration
    public $name;
    public $price;
    public $firework_type;
    
    // Constructor to initialize object properties
    public function __construct($name, $price, $firework_type) {
        // Set object properties using constructor arguments
        $this->name = $name;
        $this->price = $price;
        $this->firework_type = $firework_type;
    }
    
    // Getter method to retrieve property values
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getFireworkType() {
        return $this->firework_type;
    }

    // Setter method to set property values with validation
    public function setName($name) {
        if (strlen($name) > 4 && strlen($name) <= 20) {
            $this->name = $name;
        } else {
            throw new InvalidArgumentException("De naam moet langer zijn dan 4 tekens en niet langer dan 20 tekens.");
        }
    }

    public function setPrice($price) {
        if ($price > 0.01 && $price <= 100) {
            $this->price = $price;
        } else {
            throw new InvalidArgumentException("De prijs moet meer dan 1 cent zijn en mag niet meer zijn dan 100 Euro.");
        }
    }

    public function setFireworkType($firework_type) {
        if (in_array($firework_type, [1, 2, 3])) {
            $this->firework_type = $firework_type;
        } else {
            throw new InvalidArgumentException("Het type vuurwerk moet 1 (Knalvuurwerk), 2 (Siervuurwerk) of 3 (Pijlen) zijn.");
        }
    }
}

// Testing the Firework class

// Output: 1
$firework = new Firework("Dragonfly", 10.50, 1);
echo "Name: " . $firework->name . "<br>";  
echo "Price: " . $firework->price . "<br>";
echo "Firework type: " . $firework->firework_type . "<br>";

// Output: 2
$firework = new Firework("FireGod", 69.69, 2);
echo "Name: " . $firework->name . "<br>";  
echo "Price: " . $firework->price . "<br>";
echo "Firework type: " . $firework->firework_type . "<br>";  


// Output: 3
$firework = new Firework("star fire", 50.00, 3);
echo "Name: " . $firework->name . "<br>";  
echo "Price: " . $firework->price . "<br>";
echo "Firework type: " . $firework->firework_type . "<br>";  
?>