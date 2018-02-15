<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 15/02/2018
 * Time: 17:17
 */

session_start();
include('db.php');
$conn = db_connect("localhost", "si-13-02-18", "root", "theoloan");		// pass : theoloan

$requete = "SELECT 
  `Destination_id`, 
  `User_id`, 
  `lieu_id` 
FROM 
  `reservation`
WHERE
  `reservation_id` = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>T'es sur?Confirmation de suppression</title>
</head>
<body>

<?php
require "index.php";
?>
<form action="dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <label for="">T'es sur de vouloir supprimer <?=$row['reservation_id']?></label><br>
    <input type="submit" value="Confirmer">
</form>
</body>
</html>