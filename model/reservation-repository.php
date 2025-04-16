<?php

function persistReservation($reservation) {
    session_start();

    $_SESSION['reservation'] = $reservation; // je stocke la réservation dans la session

}


function findReservationForUser() {
    session_start();

    if ((array_key_exists('reservation', $_SESSION))) {
        return $_SESSION['reservation']; // je récupère la réservation de l'utilisateur
    } else {
        return null; // si pas de réservation, je retourne null
    }
}