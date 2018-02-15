<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 15/02/2018
 * Time: 13:46
 */

session_start();

$_SESSION['reservation']['date_id']['lieu_id'] = $_POST['radio'];

header('Location: ./information.php');