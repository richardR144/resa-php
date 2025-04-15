<?php

require_once('../config/config.php');
require_once('../model/Reservation.model.php');

$message = " ";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// je récupère les données du formulaire envoyées par l'utilisateur
	$name = $_POST['name'];
	$place = $_POST['place'];
	// je créé des DateTime pour les dates (car le formulaire envoie des chaines de caractères et j'ai besoin de vraies dates)
	$startDate = new DateTime($_POST['start-date']);
	$endDate =  new DateTime($_POST['end-date']);


	// je regarde si cleaning option a été sélectionné et je transforme la valeur
	// de l'input en true ou false
	if ($_POST['cleaning-option'] === "on") {
		$cleaningOption = true;
	} else {
		$cleaningOption = false;
	}
	
	// je créé une réservation : une instance de classe, en lui envoyant les données attendues
	// je récupère l'id de l'utilisateur connecté (on ne l'a pas encore fait mais on va le faire dans la session)
	$userId = $_POST['user-id']; // je vais le récupérer dans la session de l'utilisateur connecté
	$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption, $userId);

	// je créé un message incluant le prix de la réservation (calculé automatiquement par ma classe Reservation)
	$message = "Votre réservation est confirmée, au prix de :" . $reservation->totalPrice;

}

//var_dump($reservation);
//var_dump($message);
//var_dump($name, $place, $startDate, $endDate, $cleaningOption);
//var_dump($userId);





require_once('../view/create-resa-view.php');