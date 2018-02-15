<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 15/02/2018
 * Time: 13:17
 */
session_start();

$_SESSION['reservation']['destination_PlanetName'] = $_POST['radio'];

header('Location: ./booking.php');