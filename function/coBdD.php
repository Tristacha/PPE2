<?php
	
	$bdd = 'BdDFinal';
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$db = mysqli_connect ($hostname, $username, $password, $bdd);

	if($db)
	{

   	 // Si la connexion a réussi, rien ne se passe.

	}

	else // Mais si elle rate…

	{

    	echo '<script>alert("Erreur impossible de se connecter a la BdD");</script>'; // On affiche un message d'erreur.

	}
?>