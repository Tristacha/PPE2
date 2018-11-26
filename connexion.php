<?php
mysql_connect("localhost", "root", "");
mysql_select_db("nom_db");
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
// Je crypte $passe avec la fonction "sha1".
$password = sha1($password);
$nbre = mysql_query("SELECT COUNT(*) AS exist FROM Clients WHERE Mail='$email'");
$donnees = mysql_fetch_array($nbre);
if($donnees['exist'] != 0) // Si le pseudo existe.
{
	$quete = mysql_query("SELECT * FROM Clients WHERE Mail='$email'");
	$infos = mysql_fetch_array($quete);
	if($password == $infos['password'])
	{
	// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
	}
	else // Si le couple pseudo/ mot de passe n'est pas bon.
	{
		echo 'Vous n\'avez pas rentré les bons identifiants';
	}
}
?>
