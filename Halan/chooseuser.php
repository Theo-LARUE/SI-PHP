<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 15/02/2018
 * Time: 14:30
 */

session_start();

$_SESSION['reservation']['user_Name'] = $_POST['lastName'];
$_SESSION['reservation']['user_FirstName'] = $_POST['firstName'];
$_SESSION['reservation']['user_Birthday'] = $_POST['date'];
$_SESSION['reservation']['user_Mail'] = $_POST['email'];
$_SESSION['reservation']['user_Height'] = $_POST['height'];
$_SESSION['reservation']['user_Weight'] = $_POST['weight'];

header('Location: ./success.php');