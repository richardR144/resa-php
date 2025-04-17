<?php

require_once('../config/config.php');


// récupère l'url actuelle
$requestUri = $_SERVER['REQUEST_URI'];


// découpe l'url actuelle pour ne récupérer que la fin
// si l'url demandée est "http://localhost:8888/oop-piscine/public/test"
// $enduri contient "test"
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/resa-php-tp/public/', '', $uri);
$endUri = trim($endUri, '/');


// en fonction de la valeur de $endUri on charge le bon contrôleur
if ($endUri === "") {
    require_once('../controller/home-controller.php');
} else if ($endUri === "nouvelle-reservation") {
	require_once('../controller/create-reservation-controller.php');
} else if ($endUri === "annuler-reservation") {
	require_once('../controller/cancel-reservation-controller.php');
} else if ($endUri === "payer-reservation") {
	require_once('../controller/pay-reservation-controller.php');
} else if ($endUri === "commenter-reservation") {
	require_once('../controller/comment-reservation-controller.php');
} else {
    // Si l'URL ne correspond à aucun contrôleur, afficher une page 404
    http_response_code(404);
    echo 'Page non trouvée';
} 


