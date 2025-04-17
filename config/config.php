<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//gérer les problèmes liés à la session avec le navigateur évite les warnings
session_start();  

function connectToDB() {
    try {
        $pdo = new PDO('mysql:host=localhost:3306;dbname=resa-php-tp', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        throw new Exception('Erreur de connexion à la base de données : ') . $e->getMessage();
        exit;
    }
}


