<?php

class Persoon {
    private $voornaam;
    private $achternaam;
    private $leeftijd;
    private $geslacht;

    // Constructor
    public function __construct($voornaam, $achternaam, $leeftijd, $geslacht) {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->leeftijd = $leeftijd;
        $this->geslacht = $geslacht;
    }

    // toString functie
    public function __toString() {
        return "Naam: " . $this->voornaam . " " . $this->achternaam . ", Leeftijd: " . $this->leeftijd . ", Geslacht: " . $this->geslacht;
    }
}

// Maak objecten aan en toon de inhoud
$persoon1 = new Persoon("Jan", "Jansen", 30, "Man");
$persoon2 = new Persoon("Anna", "Pieters", 25, "Vrouw");

echo $persoon1;
echo "\n";
echo $persoon2;

?>
