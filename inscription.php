<?php
mysql_connect("localhost", "root", "");
mysql_select_db("nom_db");

if(!empty($_POST['nom']))
{
	$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
	$confirm = mysql_real_escape_string(htmlspecialchars($_POST['confirm']));
	if($password == $confirm)
	{
		$password = sha1($password);
		$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
		$prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
		$dob = mysql_real_escape_string(htmlspecialchars($_POST['dob']));
		$codepostal = mysql_real_escape_string(htmlspecialchars($_POST['codepostal']));
		$numero = mysql_real_escape_string(htmlspecialchars($_POST['numero']));
		mysql_query("INSERT INTO Clients VALUES('', '$nom', '$prenom', '$codepostal', '$email', '$dob', '$numero','$password')");
	}
	else
	{
		echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
	}
}
?>
