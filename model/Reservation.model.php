<?php
//L'encapsulation est un principe de la programmation orientée objet qui consiste à restreindre l'accès direct à certains composants d'un objet et à ne permettre l'accès qu'à travers des méthodes publiques. Cela permet de protéger les données internes de l'objet et de contrôler comment elles sont utilisées.
//création d'une instance de la classe Reservation
// la classe Reservation représente une réservation avec des informations telles que le nom, l'email, le lieu, les dates de début et de fin, le prix total, le prix par nuit, le statut et la date de réservation
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
    public $cancelDate;
    public $cleaningPrice = 5000; // prix de nettoyage
    public $paid; // prix payé
    public $cancel; // prix annulé
    public $comment; // commentaire de réservation
    public $commentDate; // date de commentaire
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
        $this->cleaningOption = false; // option de nettoyage, j'ai choisi faux pour que ce ne soit pas obligatoire
        // si l'option de nettoyage est activée, le prix de nettoyage est ajouté au prix total
        $this->bookedAt = new DateTime();
        $this->status = "CART"; // statut de réservation

        // valeurs calculées automatiquement
        $this->totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + $this->cleaningPrice;
    }

    public function paid()
    {
        if ($this->status === "CART") { // méthode de réservation par carte
            $this->status = "PAID"; // methode de paiement si carte
            //c'est là que je peux mettre la méthode stipe pour que le paiement soit effectué
            // $this->paymentMethod = "Stripe"; // méthode de paiement
            $this->paid = new DateTime(); // date de paiement
        }
    }

    public function leaveComment($comment)
    {
        if ($this->status === "PAID") { // méthode de réservation par carte
            $this->status = "COMMENT"; // methode de commentaire si carte
            $this->comment = $comment; // commentaire de réservation
            $this->commentDate = new DateTime(); // date de commentaire pas besoin de le passer en paramètre ça se fait automatiquement
        }
    }
  

    // méthode pour changer le statut de la réservation
    public function cancel()
    {
        if ($this->status === "CART") {   // méthode de réservation par carte
            $this->status = "CANCELLED"; // methode d'annulation si carte
            $this->cancelDate = new DateTime(); // date d'annulation
        }
    }
}


$name = "evil"; // nom de réservation
$email = "evil@evil.com"; // adresse e-mail de réservation
$place = "Mooréa"; // lieu de réservation
$startDate = new DateTime("2025-10-01"); // date de début de réservation
$endDate = new DateTime("2025-11-10"); // date de fin de réservation
$cleaningOption = false; // option de nettoyage, j'ai choisi faux
// Création d'une instance de la classe Reservation, sachant que le new fait référence au constructeur
// et que le constructeur est appelé automatiquement lors de la création de l'objet
$reservation = new Reservation($name, $email, $place, $startDate, $endDate, $cleaningOption);

$reservation->paid(); // méthode de réservation par carte
$reservation->leaveComment("C'est une belle réservation !"); //message de commentaire
//var_dump($reservation); // affiche les informations de réservation
//var_dump($reservation->totalPrice); // affiche le prix total de la réservation
//var_dump($reservation->nightPrice); // affiche le prix de la nuit
//var_dump($reservation->cleaningPrice); // affiche le prix de nettoyage
//var_dump($reservation->bookedAt); // affiche la date de réservation
//var_dump($reservation->status); // affiche le statut de réservation
//var_dump($reservation->paid); // affiche le prix payé
//var_dump($reservation->cancel); // affiche le prix annulé
//var_dump($reservation->comment); // affiche le commentaire de réservation
//var_dump($reservation->commentDate); // affiche la date de commentaire