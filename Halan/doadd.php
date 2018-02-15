<?php

if (!isset($_POST['name']) || !isset($_POST['first_name']) ) {
    header('Location: index.php?nopostdata');
    exit;
}
require_once "connexion.php";
$requete = "INSERT INTO
`user`
(`Name`, `FirstName`, `Mail`, `Birthday`, `Civility`, `Height`, `Weight`, `Role_id`)
VALUES
(:name, :firstname, :mail, :birthday, :civility, :height, :weight, 2)
;";
var_dump($_POST['height']);
$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':firstname', $_POST['firstname']);
$stmt->bindValue(':mail', $_POST['mail']);
$stmt->bindValue(':birthday', $_POST['birthday']);
$stmt->bindValue(':civility', $_POST['civility']);
$stmt->bindValue(':height', floatval($_POST['height']));
$stmt->bindValue(':weight', floatval($_POST['weight']));
$stmt->execute();
//header('Location: details.php?id='.$conn->lastInsertId());
