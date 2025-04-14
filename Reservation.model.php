<?php

require_once "../config/config.php";

// Reservation.model.php

class Reservation {

    public $name;
    public $email;
    public $place;
    public $startDate;
    public $endDate;
    public $totalPrice;
    public $nightPrice;
    public $status;
    public $bookedAt;
    public $cleaningOption;
    public $cleaningPrice = 5000; // prix de nettoyage

public function __construct() {
    $this->name = "Evil";
    $this->email = "evil@evil.com";
    $this->place = "Mooréa";
    $this->startDate = new DateTime("2025-10-01");
    $this->endDate = new DateTime("2025-11-10");
    $this->nightPrice = 1000;
    $this->cleaningOption = true;
    $this->bookedAt = new DateTime();
    $this->status = "CART";



    // valeurs calculées automatiquement
$this->totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + $this->cleaningPrice;

}
}


$reservation = new Reservation();

var_dump($reservation);

