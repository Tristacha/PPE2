<?php
function create_user ($pass, $comf, $nom, $prenom, $email, $dob, $cp, $num)
{
	global $erreur;
	htmlentities($pass);
	htmlentities($comf);
	htmlentities($nom);
	htmlentities($prenom);
	htmlentities($email);
	htmlentities($dob);
	htmlentities($cp);
	htmlentities($num);

	
    
	// Connexion a la BDD
	include ('coBdD.php');
    $sql = 'SELECT * FROM clients where  Mail="'.$email.'"';
	$result = $db->query($sql);
	if(!$result)
	{
		echo "Error Select user not good";
	}
	else
	{
		$res = $result->fetch_array();
		if($res == false)
		{
			if($pass == $comf)
			{
				$pass = sha1($pass);
				$comf = sha1($comf);
				if($pass == $comf)
				{
					$sql2 ='INSERT INTO `clients`(`Nom`, `Prenom`, `Mail`,`Telephone`,`DateNaissance`,`Fidelisation`,`MotDePasse`, `CodePostal`) VALUES ("'.$nom.'", "'.$prenom.'", "'.$email.'","'.$num.'","'.$dob.'","0","'.$pass.'","'.$cp.'");';
					var_dump($sql2);
					$res2 =$db->query($sql2);
					if ($res2) {
    					
    					header('Location: connexion.php');
					} 
					else 
					{
					   echo "Error not insert new user!";
					}

				}
				else
				{
					
					echo "Les mots de passe ne corresponde pas!";

				}
			}
			else
			{
				echo "Les mots de passe ne corresponde pas!";
			}
		}
		else
		{
			echo "Cette adresse mail est déjà associé à un compte! ";
		}
	}

}
?>