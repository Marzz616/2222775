<?php
require_once 'FileManager.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Fish.php';

class Administrator {
    private $animals;
    private $fileManager;

    public function __construct($filepath) {
        $this->animals = [];
        $this->fileManager = new FileManager($filepath);
    }

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
        return true;
    }

    public function removeAnimal($registrationNumber) {
        foreach ($this->animals as $key => $animal) {
            if ($animal->getRegistrationNumber() == $registrationNumber) {
                unset($this->animals[$key]);
                $this->animals = array_values($this->animals); // Re-index array
                return true;
            }
        }
        return false;
    }

    public function showAnimals() {
        $output = [];
        foreach ($this->animals as $animal) {
            $output[] = (string)$animal;
        }
        return implode("\n", $output);
    }

    public function saveAnimals() {
        return $this->fileManager->updateFile($this->animals);
    }
}
?>
