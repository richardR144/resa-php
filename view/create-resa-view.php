<?php

require_once('../config/config.php');



// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $place = $_POST['place'];
    $startDate = new DateTime($_POST['startDate']);
    $endDate = new DateTime($_POST['endDate']);
    $cleaningOption = isset($_POST['cleaningOption']) ? true : false; // Vérifier si l'option de nettoyage est cochée


    //var_dump($name, $email, $place, $startDate, $endDate, $cleaningOption);

    // Créer une nouvelle réservation
    $reservation = new Reservation($name, $email, $place, $startDate, $endDate, $cleaningOption);



    require_once('../view/create-resa-view.php');
    // Afficher un message de confirmation
    $message = "Votre réservation a été créée avec succès !";
} else {
    $message = "Veuillez remplir le formulaire de réservation.";
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="resa-php-tp">
    <meta name="author" content="Evil">
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Créer une réservation</h1>

        <form method="POST">

            <label>Nom
                <input type="text" name="name">
            </label>

            <label>Lieu
                <select name="place">
                    <option value="chateau-versailles">Château de Versailles</option>
                    <option value="zad-limoges">ZAD de limoges</option>
                    <option value="renault-clio">Renault Clio</option>
                    <option value="maison-campagne">Maison de campagne</option>
                </select>
            </label>

            <label>Date de début
                <input type="date" name="start-date">
            </label>

            <label>Date de fin
                <input type="date" name="end-date">
            </label>

            <label>Option de ménage ?
                <input type="checkbox" name="cleaning-option">
            </label>

            <button type="submit">Créer la réservation</button>

        </form>


        <h2><?php echo $message; ?></h2>
    </main>
    <footer></footer>
</body>

</html>