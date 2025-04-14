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
        //creation de la fonction _constucteur
        // le constructeur est une méthode spéciale qui est appelée automatiquement lors de la création d'un objet 
        public function __construct($name, $email, $place, $startDate, $endDate, $cleaningOption)
    {
        $this->name = $name; // nom de réservation
        $this->email = $email;
        $this->place = $place;;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->nightPrice = 10000; // prix de la nuit
        $this->cleaningOption = true;
        $this->bookedAt = new DateTime();
        $this->status = "CART";
       


        // valeurs calculées automatiquement
        $this->totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + $this->cleaningPrice;
        $this->status = "CART"; // statut de réservation
        $this->bookedAt = new DateTime(); // date de réservation
       
    }

        // méthode pour changer le statut de la réservation
            public function cancel()
        {
            if ($this->status === "CART")
        {   // statut de réservation par carte
            $this->status = "CANCELLED"; // methode d'annulation si carte
        }
    }
}        




$name = "evil"; // nom de réservation
$email = "evil@evil.com"; // adresse e-mail de réservation
$place = "Mooréa"; // lieu de réservation
$startDate = new DateTime("2025-10-01");
$endDate = new DateTime("2025-11-10");
$cleaningOption = false; // option de nettoyage, j'ai choisi faux


// Création d'une instance de la classe Reservation, sachant que le new fait référence au constructeur
// et que le constructeur est appelé automatiquement lors de la création de l'objet
$reservation = new Reservation($name, $email, $place, $startDate, $endDate, $cleaningOption);



    

var_dump($reservation);
