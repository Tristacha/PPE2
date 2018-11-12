<?php
session_start();
// Connexion a la BDD
$bdd = 'ppemarie';
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = mysqli_connect ($hostname, $username, $password, $bdd);
if(!empty($_POST['nom']))
{
	$password = mysqli_real_escape_string($db, $_POST['password']);
	htmlspecialchars($password);
	$confirm = mysqli_real_escape_string($db, $_POST['confirm']);
	htmlspecialchars($confirm);
	$nom = mysqli_real_escape_string($db, $_POST['nom']);
	htmlspecialchars($nom);
	$prenom = mysqli_real_escape_string($db, $_POST['prenom']);
	htmlspecialchars($prenom);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	htmlspecialchars($email);
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	htmlspecialchars($dob);
	$codepostal = mysqli_real_escape_string($db, $_POST['codepostal']);
	htmlspecialchars($codepostal);
	$numero = mysqli_real_escape_string($db, $_POST['numero']);
	htmlspecialchars($numero);

	if (strlen($password)>=6)
            {
               if ($password==$confirm)
                {
            		// On crypte le mot de passe
                	$password = sha1($password);
                	$sql ="INSERT INTO clients VALUES('', '$nom', '$prenom',  '$email','$numero', '$dob', '','$password', '$codepostal')";
					$res = $db->query($sql);
					mysqli_close($db);
					//mysqli_query($db, $querry);
				}
				else{
						echo  
								"<script>
									alert(\"Les mots de passe ne sont pas identiques\");
									history.back();
								</script>";
					}

			}
			else{

					echo 
						"<script>
							alert(\"Le mot de passe est trop court !\");
							history.back();
						</script>"; 
				}

}
?>