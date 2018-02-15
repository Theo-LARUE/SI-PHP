<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php

	function db_connect($servername, $dbname, $username, $password)
	{
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);	// essaie de se connecter à la base de donnée
			return $conn;
		}
		catch(PDOException $e) 		// si il y a une erreur sur la connexion
		{
			$conn = new PDO("mysql:host=$servername;", $username, $password);	// se connecter au serveur mais pas à une base de donnée
			$conn->exec(file_get_contents("data.sql"));		// sinon la créer avec le fichier db.sql
			return $conn;
			die("AHHH ça marche pas !!!");
		}
	}
?>
</body>
</html>
