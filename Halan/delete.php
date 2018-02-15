<?php
<<<<<<< HEAD
if(isset($_GET['table']) && isset($_GET['id']))	// verifie si les variables existent, si oui supprimer un element
{
  if($_GET['table'] == "destination")	// si la table c'est destination, il y a des foreign key dans reservation, il faut donc supprimer toute les reservations sur cette destination
    $conn->exec("DELETE FROM reservation WHERE Destination_Id=".$_GET['id']);
  if($_GET['table'] == "user")	// si on supprime un user, il faut préalablement supprimer ses réservations
    $conn->exec("DELETE FROM reservation WHERE User_id=".$_GET['id']);
  if($_GET['table'] == "role")	// si on supprime un role, il faut préalablement supprimer les utilisateur endossant ce role
    $conn->exec("DELETE FROM user WHERE Role_id=".$_GET['id']);

  // Si il y a une suppression, alors afficher le message "Article supprimé !" en rouge
  if($conn->exec("DELETE FROM ".$_GET['table']." WHERE id=".$_GET['id'])) {
    ?>
    <p style="color:red"> Article supprimé ! </p>
  }
=======
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 15/02/2018
 * Time: 13:02
 */
session_start();
include('db.php');
$conn = db_connect("localhost", "si-13-02-18", "root", "theoloan");		// pass : theoloan

if (isset($_GET['table']) && isset($_GET['id']))	// verifie si les variables existent, si oui supprimer un element
{
    if($_GET['table'] == "reservation")	// si la table c'est destination, il y a des foreign key dans reservation, il faut donc supprimer toute les reservations sur cette destination

        $req = "DELETE FROM 
        `reservation` 
        WHERE 
        reservation_Id = :id";
        $stmt = $conn->prepare($req);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
>>>>>>> c038891053ff87b7a6b4d75a1aae9aea4c569a65
}
