<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Annuler une réservation">
    <link rel="stylesheet" href="../asset/style.css">
	<title>Document</title>
</head>
<body>

	<header>

		<nav>
			<ul>

			</ul>
		</nav>

	</header>


<main>
	
	<h1>Annuler une réservation</h1>

	<?php require_once('../view/partial/_resume-reservation-view.php'); ?>

	<form method="POST">
		<button type="submit">Annuler la réservation</button>

		<p><?php echo $cancelMessage?></p>

	</form>

</main>

</body>
</html>