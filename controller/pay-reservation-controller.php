<?php

require_once('../config/config.php');
require_once('../model/reservation-repository.php');
require_once('../model/Reservation.model.php');

    session_start(); // Démarrer la session pour accéder aux variables de session

    $reservationForUser = findReservationForUser();
    $payMessage = ""; 

   

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        if (!is_null ($reservationForUser)) {
            $reservationForUser->pay(); // Ajout des parenthèses pour appeler la méthode
            $payMessage = "Votre séjour est bien réglé"; // Correction des espaces et amélioration de la lisibilité
            persistReservation($reservationForUser);  // Enregistrement de la réservation payée
            
        } 
        else 
        {
            echo "La réservation n'a pas été trouvée."; // Message d'erreur en cas de problème
        }
    }







require_once('../view/pay-reservation-view.php');
