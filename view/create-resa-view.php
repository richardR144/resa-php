

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
                <li>Inscription</li>
                <li>Contacts</li>
                <li>Connexion</li>
                <li><img src="logoSite" alt="logo"></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Créer une réservation</h1>

        <form method="POST">
            <label>Nom
                <input type="text" name="name">
            </label>

            <label>Email
                <input type="email" name="email">

            <label>Lieu
                <select name="place">
                    <option value="moorea">Mooréa</option>
                    <option value="zad-limoges">ZAD de limoges</option>
                    <option value="renault-clio">Renault Clio</option>
                    <option value="maison-campagne">Maison de campagne</option>
                </select>
            </label>

            <label>Date de début
                <input type="date" name="startDate">
            </label>

            <label>Date de fin
                <input type="date" name="endDate">
            </label>

            <label>Option de ménage ?
                <input type="checkbox" name="cleaningOption">
            </label>

            <button type="submit">Créer la réservation</button>
        </form>
        <?php 
            if (!is_null($error)) { ?>
                <p>La réservation n'a pas été effectuée ! <?php echo $error; ?></p>
        <?php 
    } ?>

    </main>
    <footer>

    </footer>
</body>

</html>