<?php

function persistReservation($reservation) {  // je persiste la réservation dans la base de données et je vérifie si la réservation existe déjà
    session_start();  // je démarre la session

    $_SESSION['reservation'] = $reservation; // je stocke la réservation dans la session

    //requête qui prend en charge la réservation dans la base de données
    $pdo = connectToDB();  // je me connecte à la base de données

    $startDateFormatted = $reservation->startDate->format('Y-m-d H:i:s');  // je formate la date de début
    $endDateFormatted = $reservation->endDate->format('Y-m-d H:i:s');      // je formate la date de fin
    $bookedAtFormatted = $reservation->bookedAt->format('Y-m-d H:i:s');    // je formate la date de réservation

    $query = "INSERT INTO reservation   # je prépare la requête d'insertion et je précise les champs de la table de reservation
    (name, place, start_date, end_date, cleaning_option, night_price, total_price, booked_at, status) 
     VALUES 
     (
        '$reservation->name',
        '$reservation->place', 
        '$startDateFormatted', 
        '$endDateFormatted', 
        '$reservation->cleaning_option', 
        '$reservation->night_price', 
        '$reservation->total_price', 
        '$bookedAtFormatted', 
        '$reservation->status'
     )";
      //var_dump($query); // je vérifie la requête

      $pdo->$query($query); // j'exécute la requête
}


function findReservationForUser()   // je cherche la réservation de l'utilisateur dans la base de données
{
    session_start(); // je démarre la session

    if ((array_key_exists('reservation', $_SESSION))) { // je vérifie si la réservation existe dans la session
        return $_SESSION['reservation'];                // je retourne la réservation de l'utilisateur
    } else {
        return null;                                    // si pas de réservation, je retourne null
    }
}
