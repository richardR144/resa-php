<?php

require_once('../config/config.php');
require_once('../model/Reservation.model.php');

$message = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// je récupère les données du formulaire envoyées par l'utilisateur
	$name = $_POST['name'];
    $email = $_POST['email'];
	$place = $_POST['place'];
	$startDate = new DateTime($_POST['startDate']); // je transforme la date envoyée par l'utilisateur en objet DateTime
	$endDate =  new DateTime($_POST['endDate']); // je transforme la date envoyée par l'utilisateur en objet DateTime
    // je vérifie si la date de début est supérieure à la date de fin


	// je regarde si cleaning option a été sélectionné et je transforme la valeur
	// de l'input en true ou false
	if ($_POST['cleaningOption'] === "on") {
		$cleaningOption = true;
	} else {
		$cleaningOption = false;
	}
	
	// je créé une réservation : une instance de classe, en lui envoyant les données attendues
	// je récupère l'id de l'utilisateur connecté (on ne l'a pas encore fait mais on va le faire dans la session)
	
	$reservation = new Reservation($name, $email, $place, $startDate, $endDate, $cleaningOption);

	// je créé un message incluant le prix de la réservation (calculé automatiquement par ma classe Reservation)
	//$message = "Votre réservation est confirmée, au prix de :" . $reservation->totalPrice;

}

//var_dump($reservation);
//var_dump($message);
//var_dump($name, $place, $startDate, $endDate, $cleaningOption);


require_once('../view/create-resa-view.php');