<?
	session_start();
	// Connexion a la BDD
	$bdd = 'ppemarie';
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$db = mysqli_connect ($hostname, $username, $password, $bdd);

	if($bd = mysqli_connect('localhost', 'root', '', 'ppemarie'))

	{

   	 // Si la connexion a réussi, rien ne se passe.

	}

	else // Mais si elle rate…

	{

    echo 'Erreur'; // On affiche un message d'erreur.

	}
?>