<?php

require_once('../config/config.php');
require_once('../model/reservation-repository.php');
require_once('../model/Reservation.model.php');



$cancelMessage = "";
$reservationForUser = findReservationForUser();

if ($_SERVER["REQUEST_METHOD"] === "POST") { // Vérification de la méthode POST
        $reservationForUser->cancel(); // Annulation de la réservation
        persistReservation($reservationForUser); // Enregistrement de la réservation annulée
        $cancelMessage = "Votre réservation a été annulée avec succès."; // Message de confirmation

    } 

require_once('../view/cancel-reservation-view.php');