<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Paiement de la réservation">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Document</title>
</head>
<body>
    <main>

        <h1>Paiement de votre séjour</h1> 

            <?php require_once('../view/partiel/_resum-reservation.view.php')?> 


        <form method="post">
            <button type="submit">Payer le sejour</button> 

            <p><?php echo $payMessage?></p>
        </form>

            


    </main>
</body>
</html>