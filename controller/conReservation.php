<?php
require_once ("../model/reservations.php");
$reservation = new Reservations();
$reservation->insertReservation();
require_once ("../view/components/confirmReservation.php")
?>