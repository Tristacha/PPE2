<?php 
session_start();
if(isset($_POST['paiement']))
{
	include('function/coBdD.php');
	$sql='SELECT  l.code, num_tra FROM liaison AS l, traversee AS t WHERE  l.code = t.code and nom_liaison="'.$_SESSION['nom_liaison'].'"';
	$req = $db->query($sql);
	$res = $req ->fetch_array();
	

	$today = date("Y-m-d");
	
	$sql2='INSERT INTO `reservation`(`CodePostal_Re`, `num_tra`, `date_res`, `id_client`, `id_liaison`, `adresse_facturation`) VALUES ("'.$_SESSION['cp'].'",'.$res['num_tra'].',"'.$today.'",'.$_SESSION['id'].','.$res['code'].',"'.$_SESSION['facturation'].'")';
	$req2 = $db->query($sql2);

	$select='SELECT num FROM reservation Where id_client="'.$_SESSION['id'].'"';
	$r = $db->query($select);
	$line = $r->fetch_array();
	
	$sql3='INSERT INTO enregistrer VALUES ("1","'.$line['num'].'","'.$_SESSION['prixTotal'].'")';
	$req3 = $db->query($sql3);
	
	header('location: index.php');

}
?>


<html lang="en">
<head>
	<title>Contact V7</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="css/paiement.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="POST">
				<span class="contact100-form-title">
					Paiement
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" id="titulaire" type="text" name="titulaire" placeholder="Nom du titulaire" /required>
					<label class="label-input100" for="titulaire">
						<span class="lnr lnr-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "numero de la carte obligatoire">
					<input class="input100" id="carte" type="number" name="carte" placeholder="numero de la carte" /required>
					<label class="label-input100" for="carte">
						<span ><img src="https://img.icons8.com/ios/50/000000/bank-card-front-side.png"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Pictogramme de validation">
					<input class="input100" id="phone" type="number" min="100" max="999"name="picto" placeholder="cvv"/required>
					<label class="label-input100" for="cvv">
						<span> <img src="https://img.icons8.com/ios/50/000000/card-verification-value-filled.png"></span>
					</label>
				</div>

				

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="paiement">
							Valider le paiement 
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main2.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<a href="https://icons8.com/icon/22127/carte-bancaire-face-avant">Carte bancaire face avant  icon by Icons8</a>
</body>
</html>
