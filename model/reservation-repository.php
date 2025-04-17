<?php

function persistReservation($reservation) {  // je persiste la réservation dans la base de données et je vérifie si la réservation existe déjà
    session_start();  // je démarre la session

    //requête qui prend en charge la réservation dans la base de données
    $pdo = connectToDB();  // je me connecte à la base de données

    $startDateFormatted = $reservation->startDate->format('Y-m-d H:i:s');  // je formate la date de début
    $endDateFormatted = $reservation->endDate->format('Y-m-d H:i:s');      // je formate la date de fin
    $bookedAtFormatted = $reservation->bookedAt->format('Y-m-d H:i:s');    // je formate la date de réservation

    $query = "INSERT INTO reservation   
    (name, place, start_date, end_date, cleaning_option, night_price, total_price, booked_at, status) 
     VALUES 
     (
        '$reservation->name',
        '$reservation->place', 
        '$startDateFormatted', 
        '$endDateFormatted', 
        '$reservation->cleaningOption', 
        '$reservation->nightPrice', 
        '$reservation->totalPrice', 
        '$bookedAtFormatted', 
        '$reservation->status'
     )";
      //var_dump($query);die; // je vérifie la requête
      //var_dump($reservation);die; // je vérifie la réservation
      

      $pdo->query($query); // j'exécute la requête
}


function findReservationForUser()   // je cherche la réservation de l'utilisateur dans la base de données
{
   $pdo = connectToDB();  // je me connecte à la base de données
   
   $query = "SELECT * FROM reservation
             WHERE name = 'evil'                     
             ORDER BY id DESC                        
             LIMIT 1";                               
   //var_dump($query); // je vérifie la requête
    $result = $pdo->query($query, PDO::FETCH_ASSOC);  // je prépare la requête et je précise le mode de récupération des résultats
    //var_dump($result); // je vérifie le résultat
    $reservation = $result->fetch(); // je récupère le résultat
    //var_dump($reservation); // je vérifie la réservation 
    return $reservation;    // je retourne la réservation  

}

 //trouver ttes les résa de david robert ou evil (ex)

/**
* Permettrait de récupérer toutes les réservations 
* function findAllReservations() {
*
*	// Trouver toutes les réservation dont le nom est David Robert
*	// Récupérer la dernère par date de création
*	$pdo = connectToDB();
*
*	$query = "SELECT * FROM `reservation` ORDER BY id DESC";
*
*	$result = $pdo->query($query, PDO::FETCH_ASSOC);
*
*	$reservations = $result->fetchAll();
*
*	return $reservations;
*}
**/
