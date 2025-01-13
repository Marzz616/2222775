<?php
    //Object
class Attraction {
    // Properties
    private $name;
    private $capacity;
    private $ticketPrice;

    // Methods
    public function __construct($name, $capacity, $ticketPrice,) {
        $this->name = $name;
        $this->capacity = $capacity;
        $this->ticketPrice = $ticketPrice;
    }
    //magic Method getter for name
    public function getName(){
        return $this->name;
    }
    //magic Method getter for capacity
    public function getCapacity(){
        return $this->capacity;
    }
    //magic Method getter for ticketPrice
    public function getTicketPrice() {
        return $this->ticketPrice;
    }
   //magic Method getter for name
   public function serName(){
        return $this->name;
    }
    //magic Method getter for capacity
    public function setCapacity(){
        return $this->capacity;
    }
    //magic Method getter for ticketPrice
    public function setTicketPrice() {
        return $this->ticketPrice;
    }
}
    // Object + child from Attaction
    class Rollercoaster extends Attaction {
        private $height;
        private $speed;        
    }
    // Method
    public function __comstruct($name, $capacity, $ticketPrice, $height, $speed){
        parent ::__construct($name, $capacity, $ticketPrice)
        $this->height=$height;
        $this->speed=$speed;
 
    
        //Magic Method getters
    public function getHeight() {
        return $this->height;
    }
        //Magic Method getters
    public function getSpeed() {
        return $this->speed;
    }
        //Magic Method getters
    public function getHeight() {
        return $this->height;
    }
        //Magic Method getters
        public function setSpeed() {
            return $this->speed;
    }
}
//attraction objecten
$attraction1 = new Attraction("Stoomcarrousel", 1200, 2.5);
$rollercoaster1 = new Rollercoaster("Python", 1000, 4, 31, 70);
$attraction2 = new Attraction("Salamander", 800, 2.5);
$rollercoaster2 = new Rollercoaster("Crab", 500, 4, 20, 50);
$attraction3 = new Attraction("Salamander", 600, 2.5);
$rollercoaster3 = new Rollercoaster("teapots", 300, 3, 17, 35);
$attraction4 = new Attraction("CherrySuprise", 600, 2.5);
$rollercoaster4 = new Rollercoaster("spitfire", 300, 3, 17, 35);
$attraction5 = new Attraction("Dragonfly", 600, 2.5);
$rollercoaster5 = new Rollercoaster("SeaSaw", 300, 3, 17, 35);

//lijst van attracties
$attractions = [$attraction1, $attraction2, $attraction3, $attraction4, $attraction5];

//berekening van total
$totalPrice = 0;
foreach($attractions as $attraction){
    $totalPrice += $attraction->getTicketPrice();
}

echo "De bezoeker moetin totaal" . $totalPrice . "betalen om alle attracties 1x te doen "
echo "Attractie Object:\n";
print_r($attraction1);

echo "\nRollercoaster Object:\n";
print_r($rollercoaster1);

