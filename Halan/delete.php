<?php
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
}
