<?php
require_once 'Customer.php';
require_once 'HotelRoom.php';
require_once 'RestaurantTable.php';
require_once 'CarRental.php';
require_once 'Reservation.php';
require_once 'Payment.php';

// Create a Customer instance
$customer = new Customer(1, "John Doe", "john@example.com");

// Create Service instances
$hotelRoom = new HotelRoom(1, "Deluxe Room", 200, 101, "Deluxe");
$restaurantTable = new RestaurantTable(2, "Table for Two", 50, 10, 2);
$carRental = new CarRental(3, "Sedan", 100, "Toyota Camry", 7);

// Make Reservations
$reservation1 = new Reservation(1, $customer, $hotelRoom, "2024-06-30");
$reservation2 = new Reservation(2, $customer, $restaurantTable, "2024-06-30");
$reservation3 = new Reservation(3, $customer, $carRental, "2024-06-30");

// Add Reservations to Customer
$customer->makeReservation($reservation1);
$customer->makeReservation($reservation2);
$customer->makeReservation($reservation3);

// List all reservations
$reservations = $customer->listReservations();
foreach ($reservations as $reservation) {
    echo $reservation->getDetails() . "\n";
}

// Cancel a reservation
$customer->cancelReservation(2);

// List all reservations after cancellation
$reservations = $customer->listReservations();
foreach ($reservations as $reservation) {
    echo $reservation->getDetails() . "\n";
}
?>
