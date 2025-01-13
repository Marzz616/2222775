
<?php

class Book {
    private $title;
    private $authorFirstName;
    private $authorLastName;
    private $pages;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setAuthor($firstName, $lastName) {
        $this->authorFirstName = $firstName;
        $this->authorLastName = $lastName;
    }

    public function getAuthor() {
        $author = $this->authorFirstName != "" ? $this->authorFirstName : '-';
        $author .= " ";
        $author .= $this->authorLastName != "" ? $this->authorLastName : '-';
        return $author;
    }

    public function setPages($pages) {
        if ($pages >= 0 && $pages <= 500) {
            $this->pages = $pages;
        } else {
            echo "Het aantal pagina's moet tussen 0 en 500 liggen.";
        }
    }

    public function getPages() {
        return $this->pages;
    }5
}

// Voorbeeld van het gebruik van de Book-klasse
$book = new Book();
$book->setTitle("Voorbeeldboek");
$book->setAuthor("Jan", "Janssen");
$book->setPages(300);

echo "Titel: " . $book->getTitle() . "<br>";
echo "Auteur: " . $book->getAuthor() . "<br>";
echo "Aantal pagina's: " . $book->getPages() . "<br>";

// Proberen het aantal pagina's aan te passen naar een negatief getal
$book->setPages(-100);
