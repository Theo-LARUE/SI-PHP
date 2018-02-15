<?php
if (!isset($_POST['id'])) {
    header('Location: index.php?error=nopostdataedit');
    exit;
}
require_once "connexion.php";
$requete = "UPDATE
  `User`
SET
  `id` = :id,
  `Name` = :name,
  `FirstName` = :firstname,
  `Mail` = :mail,
  `Birthday` = :birthday,
  `Civility` = :civility,
  `Height` = :height,
  `Weight` = :weight
WHERE
id = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':firstname', $_POST['firstname']);
$stmt->bindValue(':mail', $_POST['mail']);
$stmt->bindValue(':birthday', $_POST['birthday']);
$stmt->bindValue(':civility', $_POST['civility']);
$stmt->bindValue(':height', $_POST['height']);
$stmt->bindValue(':weight', $_POST['weight']);
$stmt->execute();
header('Location: edit.php?id='.$_POST['id']);
