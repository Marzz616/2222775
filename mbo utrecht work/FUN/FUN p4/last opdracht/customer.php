<?php
require_once 'User.php';

class Customer extends User {
    private $reservations = array();

    public function makeReservation($reservation) {
        if ($reservation instanceof Reservation) {
            $this->reservations[] = $reservation;
            return true;
        }
        return false;
    }

    public function cancelReservation($reservationID) {
        foreach ($this->reservations as $key => $reservation) {
            if ($reservation->getReservationID() == $reservationID) {
                unset($this->reservations[$key]);
                return true;
            }
        }
        return false;
    }

    public function listReservations() {
        return $this->reservations;
    }
}
?>
