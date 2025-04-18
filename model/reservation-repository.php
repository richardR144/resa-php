<?php

function persistReservation($reservation) {  // je persiste la réservation dans la base de données et je vérifie si la réservation existe déjà
    

    //requête qui prend en charge la réservation dans la base de données
    $pdo = connectToDB();  // je me connecte à la base de données

    $startDateFormatted = $reservation->startDate->format('d-m-y');  // je formate la date de début
    $endDateFormatted = $reservation->endDate->format('d-m-y');      // je formate la date de fin
    $bookedAtFormatted = $reservation->bookedAt->format('d-m-y');    // je formate la date de réservation
    $cleaningOption = $reservation->cleaningOption ? 1 : 0; // je transforme la valeur de l'option de nettoyage en 1 ou 0
    //var_dump($cleaningOption);die; // je vérifie la valeur de l'option de nettoyage
    //var_dump($startDateFormatted, $endDateFormatted, $bookedAtFormatted);die; // je vérifie les dates formatées
   //var_dump($reservation->cleaningOption);die; // je vérifie l'option de nettoyage
    $query = "INSERT INTO reservation   
    (name, place, start_date, end_date, cleaning_option, night_price, total_price, booked_at, status) 
     VALUES 
     (
        '$reservation->name',
        '$reservation->place', 
        '$startDateFormatted', 
        '$endDateFormatted', 
         $cleaningOption, 
        $reservation->nightPrice, 
        $reservation->totalPrice, 
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
    //var_dump($reservation);die; // je vérifie la réservation
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
