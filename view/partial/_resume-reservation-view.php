<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<main>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Récap de la réservation">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resume Reservation</h1>

        <?php if (!is_null($reservationForUser)) { ?>
            <div>
                <p>Récap de la réservation :</p>
                <p>Nom : <?php echo $reservationForUser->name; ?></p>
                <p>Lieu : <?php echo $reservationForUser->place; ?></p>
                <p>Dates : <?php echo $reservationForUser->startDate->format('d-m-y'); ?> / <?php echo $reservationForUser->endDate->format('d-m-y'); ?></p>
                <p>Prix total : <?php echo $reservationForUser->totalPrice; ?></p>
                <p>Option de ménage ? : <?php echo $reservationForUser->cleaningOption ? "oui" : "non"; ?></p>
                <p>Statut : <?php echo $reservationForUser->status; ?></p>
                <?php 
                if (!is_null($reservationForUser->comment)) { ?>
                    <p>Commentaire : <?php echo $reservationForUser->comment; ?></p>
            
        <?php } ?>
        </div>
        <?php } ?>
           
    </main>
</body>
</html>