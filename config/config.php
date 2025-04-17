<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 

function connectToDB() {  // Connexion à la base de données
    try {  // PDO est une extension de PHP qui permet d'accéder à une base de données
        $pdo = new PDO('mysql:host=localhost:3306;dbname=reservation', 'root', 'root');
        // On active le mode d'erreur d'exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;  // sinon on retourne l'objet PDO
    } catch (PDOException $e) {  // Si une erreur se produit lors de la connexion à la base de données, on l'attrape ici
        // On affiche un message d'erreur 
        throw new Exception('Impossible de se connecter à la base de donnée :' . $e->getMessage());
        // On arrête l'exécution du script
    
    }
}


