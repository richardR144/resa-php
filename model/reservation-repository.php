<?php

function persistReservation($reservation) {
    session_start();

    $_SESSION['reservation'] = $reservation; // je stocke la réservation dans la session

}


function findReservationForUser() {
    session_start();

    if (isset($_SESSION['reservation'])) {
        return $_SESSION['reservation'];
    } else {
        return null;
    }

}