<?php 
session_start();
if(isset($_POST['valider']))
{
	$_SESSION['nb'] =$_POST['nb'];
	$_SESSION['nomV']=  $_POST['vehicule'];
	//var_dump($_SESSION['nb']);
	//var_dump($_SESSION['nomV']);
	if($_POST['vehicule'] == "B1-Voiture long.inf.4m")
	{
		if($_SESSION['p'] == 1)
		{

			$prix = 86;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 2) {
			$prix = 95;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 3) {
			$prix = 91;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
	}
	elseif ($_POST['vehicule'] == "B2-Voiture long.inf.5m") {

		if($_SESSION['p'] == 1)
		{
			$prix = 129;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 2) {
			$prix = 142;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 3) {
			$prix = 136;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		
	}
	elseif ($_POST['vehicule'] == "C1-Fourgon") {

		if($_SESSION['p'] == 1)
		{
			$prix = 189;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 2) {
			$prix = 208;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 3) {
			$prix = 199;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		
		
	}
	elseif ($_POST['vehicule'] == "C2-Camping car") {
		
		if($_SESSION['p'] == 1)
		{
			$prix = 205;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 2) {
			$prix = 226;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 3) {
			$prix = 216;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		
	}
	else {
		
		if($_SESSION['p'] == 1)
		{
			$prix = 268;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 2) {
			$prix = 295;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		elseif ($_SESSION['p'] == 3) {
			$prix = 282;
			$_SESSION['prixV'] = $prix *$_POST['nb'];
		}
		
	}
	//var_dump($_SESSION['prixV']);
	header('location: ../recapitulatif.php');
}

?>

<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" id="cpswitch" href="css/util.css">
        <link rel="stylesheet" id="cpswitch" href="css/main.css">

    
        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <style type="text/css">
				        	
				        	/*//////////////////////////////////////////////////////////////////
				[ FONT ]*/

				@font-face {
				  font-family: Poppins-Regular;
				  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
				}

				@font-face {
				  font-family: Poppins-Medium;
				  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
				}

				@font-face {
				  font-family: Poppins-Bold;
				  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
				}









				/*---------------------------------------------*/
				button {
					outline: none !important;
					border: none;
					background: orange;
				}







				/*//////////////////////////////////////////////////////////////////
				[ Contact 2 ]*/
				.bg-contact2 {
				  width: 100%;  
				  background-repeat: no-repeat;
				  background-position: center center;
				  background-size: cover;
				}

				.container-contact2 {
				  width: 100%;  
				  min-height: 100vh;
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  flex-wrap: wrap;
				  justify-content: center;
				  align-items: center;
				  padding: 15px;
				 
				 
				  
				  
				  
				}

				.wrap-contact2 {
				  width: 790px;
				  background: #fff ;
				  border-radius: 10px;
				  overflow: hidden;
				  padding: 72px 55px 90px 55px;
				}


				/*------------------------------------------------------------------
				[  ]*/

				.contact2-form {
				  width: 100%;
				}

				.contact2-form-title {
				  display: block;
				  font-family: Poppins-Bold;
				  font-size: 39px;
				  color: #333333;
				  line-height: 1.2;
				  text-align: center;
				  padding-bottom: 90px;
				}



				/*------------------------------------------------------------------
				[  ]*/








				/*------------------------------------------------------------------
				[ Button ]*/
				.container-contact2-form-btn {
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  flex-wrap: wrap;
				  justify-content: center;
				  padding-top: 13px;
				}

				.wrap-contact2-form-btn {
				  display: block;
				  position: relative;
				  z-index: 1;
				  border-radius: 2px;
				  width: auto;
				  overflow: hidden;
				  margin: 0 auto;
				}



				.contact2-form-btn {
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  justify-content: center;
				  align-items: center;
				  padding: 0 20px;
				  min-width: 244px;
				  height: 50px;

				 

				  font-family: Poppins-Medium;
				  font-size: 16px;
				  color: #fff;
				  line-height: 1.2;
				  

				}

				/*-----------------------------------------------------------
				[ Responsive ]*/

				@media (max-width: 576px) {
				  .wrap-contact2 {
				    padding: 72px 15px 90px 15px;
				  }
				}



				/*------------------------------------------------------------------
				[ Alert validate ]*/

				.validate-input {
				  position: relative;
				}

				.alert-validate::before {
				  content: attr(data-validate);
				  position: absolute;
				  max-width: 70%;
				  background-color: white;
				  border: 1px solid #c80000;
				  border-radius: 2px;
				  padding: 4px 25px 4px 10px;
				  top: 50%;
				  -webkit-transform: translateY(-50%);
				  -moz-transform: translateY(-50%);
				  -ms-transform: translateY(-50%);
				  -o-transform: translateY(-50%);
				  transform: translateY(-50%);
				  right: 0px;
				  pointer-events: none;

				  font-family: Poppins-Regular;
				  color: #c80000;
				  font-size: 13px;
				  line-height: 1.4;
				  text-align: left;

				  visibility: hidden;
				  opacity: 0;

				  -webkit-transition: opacity 0.4s;
				  -o-transition: opacity 0.4s;
				  -moz-transition: opacity 0.4s;
				  transition: opacity 0.4s;
				}

				.alert-validate::after {
				  content: "\f12a";
				  font-family: FontAwesome;
				  display: block;
				  position: absolute;
				  color: #c80000;
				  font-size: 16px;
				  top: 50%;
				  -webkit-transform: translateY(-50%);
				  -moz-transform: translateY(-50%);
				  -ms-transform: translateY(-50%);
				  -o-transform: translateY(-50%);
				  transform: translateY(-50%);
				  right: 8px;
				}

				.alert-validate:hover:before {
				  visibility: visible;
				  opacity: 1;
				}

				@media (max-width: 992px) {
				  .alert-validate::before {
				    visibility: visible;
				    opacity: 1;
				  }
				}
        </style>
</head>
<div class="bg-contact2" style="background-color: #DCDCDC  ; ">
		<div class="container-contact2">
			<div class="wrap-contact2">
					<span class="contact2-form-title">
						Voulez vous ajouter un véhicule?
					</span>
				<center>
					
						<input class="lol" type="button" name="oui" id="o" style="background-color: #00FF00; width: 200px;  height: 50px; border-radius: 3px; margin-right: 70px; font-size: 24px;  border:none; " value="OUI" onclick="oui();">	
						
					
						<a href="../recapitulatif.php"><input class="" type="button" name="non" id="n" style="background-color: #FF0000; width: 200px;  height: 50px; border:none; border-radius: 3px; font-size: 24px;" value="NON"></a>
					<br /><br />

				<form class="contact2-form validate-form" action="" method="POST">
					<div id="choix" style="display: none; font-size: 18px;">
						<input type="radio" name="vehicule" value="B1-Voiture long.inf.4m">B1-Voiture long.inf.4m
						<input type="radio" name="vehicule" value="B2-Voiture long.inf.5m" >B2-Voiture long.inf.5m
						<input type="radio"  name="vehicule" value="C1-Fourgon">C1-Fourgon	
						<input type="radio"  name="vehicule" value="C2-Camping car">C2-Camping car	
						<input type="radio"  name="vehicule" value="C3-Camion">C3-Camion<br /><br />
						<input type="number" name="nb" id="nb"  value="0" min="0" placeholder="Nombre de véhicule" style="background-color: transparent; width: 250px;  height: 50px; border-color: black; border-radius: 3px; font-size: 24px;">
					</div>

					
				</center>	

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" name="valider">
								Valider
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>		
	<script type="text/javascript">
		function oui()
		{
			document.getElementById("choix").style.display ="block";
		}

		function nb()
		{
			document.write("Assez de l'ancien contenu, passons au nouveau !");
			//document.getElementById("nb").style.display ="block";
		}
	</script>
	
</html>