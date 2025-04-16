<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<main>, initial-scale=1.0">
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
                <p>Annulation : <?php echo $reservationForUser->cancellation ? "oui" : "non"; ?></p>
            </div>
        <?php } ?>

        
    </main>
</body>
</html>