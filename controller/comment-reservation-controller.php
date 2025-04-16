<?php

require_once('../config/config.php');
require_once('../model/reservation-repository.php');
require_once('../model/Reservation.model.php');

    session_start(); // Démarrer la session pour accéder aux variables de session

    $reservationForUser = findReservationForUser();
    $comment = "";


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
       try {
        $comment = $_POST["comment"];
          if(!is_null($reservationForUser))
          {
            $reservationForUser->leaveComment($comment); // Appel de la méthode leaveComment de l'objet Reservation
            $reservationForUser->status = "COMMENT"; // Changer le statut de la réservation à COMMENT
            $reservationForUser->commentDate = new DateTime(); // Date de commentaire
            $leaveComment = "Votre commentaire a été enregistré avec succès !"; // Message de succès
          } 
          else {
            $leaveComment = "Aucune réservation trouvée pour cet utilisateur";  // Message d'erreur si aucune réservation trouvée
          } 
     } catch (Exception $e) {                                                 //// Gestion des exceptions
        $leaveComment = "Erreur lors de l'enregistrement du commentaire"; // Message d'erreur 
      }
}      

    
    
    
