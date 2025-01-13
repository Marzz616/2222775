<?php

class Book {
    // Properties
    private $name;
    private $lastname;
    
    //  Methods
    public function __construct($name,$lastname){
        $this->name = $name;
        $this->lastname = $lastname;
    }
}
class Reader extends Book {
    // Properties
    private $pages =0;
    private $books =0;

    //Methods
    public function __construct($name,$lastname,$pages,$books){
        $this->page = $pages;
        $this->books = $books;
        parent::__construct($name,$lastname);
    }
} 
echo
?>
