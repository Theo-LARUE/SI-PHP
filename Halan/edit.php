<?php
require_once "connexion.php";

$sql = "SELECT * FROM User WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user</title>
</head>
<body>
<form action="doedit.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id']?>">
    <label for="id">ID</label> <input disabled type="text" name="name" value="<?= $row['id']?>"><br>
    <label for="nom">Name</label> <input type="text" name="name" value="<?= $row['Name']?>"><br>
    <label for="firstname">First Name</label> <input type="text" name="firstname" value="<?= $row['FirstName']?>"><br>
    <label for="mail">Mail</label> <input type="text" name="mail" value="<?= $row['Mail']?>"><br>
    <label for="birthday">Birthday</label> <input type="text" name="birthday" value="<?= $row['Birthday']?>"><br>
    <label for="civility">Civility</label> <input type="text" name="civility" value="<?= $row['Civility']?>"><br>
    <label for="height">Height</label> <input type="number" name="height" value="<?= $row['Height']?>"><br>
    <label for="weight">Weight</label> <input type="number" name="weight" value="<?= $row['Weight']?>"><br>
    <input type="submit" value="Edit">
</form>
</body>
</html>
