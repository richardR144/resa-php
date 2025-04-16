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

<main>

<h1>Commentaire sur votre séjour</h1> 

    <?php require_once('../view/comment-reservation-view.php')?> 


<form method="post">
    <input type="text" name="comment" placeholder="Votre commentaire" required>
    <button type="submit">Commenter le sejour</button> 

    <p><?php echo $commentMessage?></p>
</form>

    


</main>

</body>
</html>