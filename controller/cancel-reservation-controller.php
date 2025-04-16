<?php

require_once('../config/config.php');
require_once('../model/reservation-repository.php');
require_once('../model/Reservation.model.php');



$reservationForUser = findReservationForUser();

if ($_SERVER["REQUEST_METHOD"] === "POST") {  // je vérifie si le formulaire a été envoyé
    $reservationForUser = findReservationForUser(); // je récupère la réservation de l'utilisateur
    if ($reservationForUser) { // je vérifie si la réservation existe
        $reservationForUser->cancel(); // j'annule la réservation
        persistReservation($reservationForUser); // je stocke la réservation dans la session
        echo "Réservation annulée avec succès."; // j'affiche un message de succès, sinon
    } else {
        echo "Aucune réservation trouvée."; // j'affiche un message d'erreur
    }
}







require_once('../view/cancel-reservation-view.php');