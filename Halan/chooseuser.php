<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 15/02/2018
 * Time: 14:30
 */
session_start();
include('db.php');
$conn = db_connect("localhost", "si-13-02-18", "root", "theoloan");		// pass : concordia
$requete="INSERT into `reservation`(`id`,`Destination_id`,`User_id`,`lieu_id`) VALUES (:1,:destination_PlanetName,:user_Name,:lieu_id) ";

$_SESSION['reservation']['user_Name'] = $_POST['lastName'];
$_SESSION['reservation']['user_FirstName'] = $_POST['firstName'];
$_SESSION['reservation']['user_Birthday'] = $_POST['date'];
$_SESSION['reservation']['user_Mail'] = $_POST['email'];
$_SESSION['reservation']['user_Height'] = $_POST['height'];
$_SESSION['reservation']['user_Weight'] = $_POST['weight'];

header('Location: ./success.php');
//var_dump($_POST);