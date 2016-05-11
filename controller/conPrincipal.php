<?php
require_once ("../model/reservations.php");
$reservations = new Reservations();
$data = $reservations->selectReservation();
require_once ("../view/principal.php");
?>