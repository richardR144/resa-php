<?php

// Reservation.model.php

class Reservation {

    public $name;
    public $email;
    public $place;
    public $startDate;
    public $endDate;
    public $totalPrice;
    public $nigthPrice;
    public $status;
    public $bookedAt;
    public $cleaningOption;
}

$reservation = new Reservation();
$reservation->name = "Evil";
$reservation->email = "evil@evil.com";
$reservation->place = "Mooréa";
$reservation->startDate = "2025-10-01";
$reservation->endDate = "2025-11-10";
$reservation->totalPrice = 1000;
$reservation->cleaningOption = true;
$reservation->bookedAt = new DateTime("now", new DateTimeZone("Pacific/Tahiti"));
$reservation->status = "CART";


var_dump($reservation);
