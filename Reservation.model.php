<?php


class Reservation
{
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
        //creation 
        public function __construct($name, $email, $place, $startDate, $endDate, $cleaningOption)
    {
        $this->name = $name; // nom de réservation
        $this->email = $email;
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


$name = "evil"; // nom de réservation
$email = "evil@evil.com"; // adresse e-mail de réservation
$place = "Mooréa"; // lieu de réservation
$startDate = new DateTime("2025-10-01");
$endDate = new DateTime("2025-11-10");
$cleaningOption = true; // option de nettoyage, j'ai choisi vrai


// Création d'une instance de la classe Reservation, sachant que le new fait référence au constructeur
// et que le constructeur est appelé automatiquement lors de la création de l'objet
$reservation = new Reservation($name, $email, $place, $startDate, $endDate, $cleaningOption);

var_dump($reservation);
