<?php
session_start();
// Connexion a la BDD
$bdd = 'ppe';
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = mysqli_connect ($hostname, $username, $password, $bdd);
if(!empty($_POST['txt_bateau']))
{
	$nombat = mysqli_real_escape_string($db, $_POST['txt_bateau']);
	htmlspecialchars($nombat);
	$longueur = mysqli_real_escape_string($db, $_POST['txt_longueur']);
	htmlspecialchars($longueur);
	$num_eq = mysqli_real_escape_string($db, $_POST['num_equipement']);
	htmlspecialchars($num_eq);
	$vitesse = mysqli_real_escape_string($db, $_POST['txt_vitesse']);
	htmlspecialchars($vitesse);
	$largeur = mysqli_real_escape_string($db, $_POST['txt_largeur']);
	htmlspecialchars($largeur);
	
	$sql ="INSERT INTO bateau VALUES('','$nombat',  '$longueur',  '$largeur', '$vitesse', '$num_eq')";
	$res = $db->query($sql);
	mysqli_close($db);
}
?>
	