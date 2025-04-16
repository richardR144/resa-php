<?php

require_once('../config/config.php');
require_once('../model/reservation-repository.php');
require_once('../model/Reservation.model.php');

    session_start(); // Démarrer la session pour accéder aux variables de session

    $reservationForUser = findReservationForUser();
    $commentMessage = ""; 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        if (!is_null ($reservationForUser)) {
            $reservationForUser->commentMessage(); // Ajout des parenthèses pour appeler la méthode
            persistReservation($reservationForUser);  // Enregistrement de la réservation payée
            $commentMessage = "Votre commentaire est bien commenter"; // Correction des espaces et amélioration de la lisibilité
        } 
        else 
        {
            echo "Le commentaire n'a pas été trouvé"; // Message d'erreur en cas de problème
        }
    }

    require_once('../view/comment-reservation-view.php');       