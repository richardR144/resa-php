<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Commentaire de la réservation">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Document</title>
</head>
<body>  

    <main>

        <h1>Laisser un commentaire sur votre séjour</h1> 
        <?php require_once('../view/partial/_resume-reservation-view.php')?> 

<form method="POST">
    <label>
    <input type="text" name="comment" placeholder="Votre commentaire" required>
    </label>
    <button type="submit">Commenter le sejour</button> 
</form>

</main>

</body>
</html>