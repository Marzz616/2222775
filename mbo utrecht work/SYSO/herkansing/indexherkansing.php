<?php
class Firework {
    // Properties 
    private $naam;
    private $prijs;
    private $fireworks;
    
    // Constructor 
    public function __construct($naam, $prijs, $fireworks) {
        $this->naam = $naam;
        $this->prijs = $prijs;
        $this->fireworks = $firework;
    }
    
    // Magic method to retrieve property
    public function getNaam() {
        return $this->naam;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function getFireworks() {
        return $this->fireworks;
    }

    // Magic method to set property value
    public function setNaam($naam) {
        if (strlen($naam) > 4 && strlen($naam) <= 20) {
            $this->naam = $naam;
        } else {
            throw new InvalidArgumentException("De naam moet langer zijn dan 4 tekens en niet langer dan 20 tekens.");
        }
    }

    public function setPrijs($prijs) {
        if ($prijs > 0.01 && $prijs<= 100) {
            $this->prijs = $prijs;
        } else {
            throw new InvalidArgumentException("De prijs moet meer dan 1 cent zijn en mag niet meer zijn dan 100 Euro.");
        }
    }

    public function setFireworks($fireworks) {
        if (in_array($fireworks, [1, 2, 3])) {
            $this->fireworks = $fireworks;
        } else {
            throw new InvalidArgumentException("Het type vuurwerk moet 1 (Knalvuurwerk), 2 (Siervuurwerk) of 3 (Pijlen) zijn.");
        }
    }
}

// Testing the Firework class

// Output: 1
$firework1 = new Firework("Dragonfly", 10.50, 1);
echo "Naam: " . $firework1->naam . "<br>";  
echo "Prijs: " . $firework1->prijs . "<br>";
echo "Firework type: " . $firework1->fireworks . "<br>";

// Output: 2
$firework2 = new Firework("FireGod", 69.69, 2);
echo "Name: " . $firework2->naam . "<br>";  
echo "Price: " . $firework2->prijs . "<br>";
echo "Firework type: " . $firework2->fireworks . "<br>";  


// Output: 3
$firework3 = new Firework("star fire", 50.00, 3);
echo "Name: " . $firework3->naam . "<br>";  
echo "Price: " . $firework3->prijs . "<br>";
echo "Firework type: " . $firework3->fireworks . "<br>";  
?>