<?php

require_once('../config/config.php');
require_once('../model/reservation-repository.php');
require_once('../model/Reservation.model.php');

    session_start(); // Démarrer la session pour accéder aux variables de session

    $reservationForUser = findReservationForUser();
    $comment = "";


    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $comment = $_POST["comment"];  
        $reservationForUser->leaveComment($comment); // Appel de la méthode leaveComment de l'objet Reservation
        persistReservation($reservationForUser); // Enregistrement de la réservation avec le commentaire                 
}      

    
    
    
require_once('../view/comment-reservation-view.php'); // Inclure la vue pour afficher le formulaire de commentaire