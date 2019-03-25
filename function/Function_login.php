<?php 
function login($nom, $mail, $pass)
{
	include('coBdD.php');
	$sql='SELECT * FROM clients WHERE Nom ="'.$nom.'" and   Mail="'.$mail.'" and MotDePasse="'.$pass.'"';
	$res = $db->query($sql);
	if(!$res)
	{
		echo "Erreur in Function login Select is not good";
	}
	else
	{

		$connect = $res->fetch_array();
		if($connect == true)
		{
			$_SESSION['id'] = $connect['id_client'];
			$_SESSION['nom'] = $connect['Nom'];
			$_SESSION['prenom'] = $connect['Prenom'];
			$_SESSION['mail'] = $connect['Mail'];
			$_SESSION['tel'] = $connect['Telephone'];
			$_SESSION['dateN'] = $connect['DateNaissance'];
			$_SESSION['fid'] = $connect['Fidelisation'];
			$_SESSION['cp'] = $connect['CodePostal'];
			$_SESSION['pass'] = $connect['MotDePasse'];
			
		}
		else
    	{
    		echo '<script> alert("the password or username is not good")</script>';
        	/*var_dump($connect);
        	var_dump($mail);
        	var_dump($pass);*/
    	}

		

	}
	

}
?>