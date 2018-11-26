<?php
session_start();
// Connexion a la BDD
$bdd = 'ppe';
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = mysqli_connect ($hostname, $username, $password, $bdd);
if(!empty($_POST['nom']))
{
	$secteur = mysqli_real_escape_string($db, $_POST['txt_secteur']);
	htmlspecialchars($secteur);
	$liaison = mysqli_real_escape_string($db, $_POST['txt_liaison']);
	htmlspecialchars($liaison);
	$distance = mysqli_real_escape_string($db, $_POST['num_distance']);
	htmlspecialchars($distance);
	$depart = mysqli_real_escape_string($db, $_POST['txt_depart']);
	htmlspecialchars($depart);
	$arrivee = mysqli_real_escape_string($db, $_POST['txt_arrivee']);
	htmlspecialchars($arrivee);
	
	$sql ="INSERT INTO liaison VALUES('$txt_liaison',  '$num_distance',  '$txt_secteur', '$txt_depart', '$txt_arrivee')";
	$res = $db->query($sql);
	mysqli_close($db);
}
?>
	