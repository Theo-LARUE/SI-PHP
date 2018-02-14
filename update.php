// la base de l'update, surement incomplet

<?php
$role= "role";
$user= "user";
$destination= "destination";
$reservation= "reservation";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $role, $user, $destination, $reservation);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE fmail SET role='?', user='?', destination='?', reservation='?' WHERE id='?'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

// update de yann
$sql = "UPDATE
`ingredient`
SET
'nom' = :nom,
'type' = :type
WHERE
'role' = :role;
'user' = :user;
'destination' = :destiantion;
'reservation' = :reservation;

;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':type', $_POST['type']);
$stmt->execute();
?>
