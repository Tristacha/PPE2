<!doctype html>
<html lang="en">
    <head>
        <title>Gestionnaire Bateau</title>
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
    
        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
    </head>
    
    
    <body id="main-homepage">
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>Gaston Berger, Lille</li>
                                <li><span><i class="fa fa-phone"></i></span>01 23 45 67 89</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="Inscription.html"><span><i class="fa fa-lock"></i></span>S'identifier</a></li>
                                <li>
                                	<form>
                                    	<ul class="list-inline">
                                        	<li>
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
													    <option value="">€</option>
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
											</li>
                                            
                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">FR</option>
                                                        <option value="">UR</option>
                                                        <option value="">EN</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
										</ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->				
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
		
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <div class="header-search hidden-lg">
                    	<a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="index.html" class="navbar-brand"><span><i class="fa fa-ship"></i>MARIE</span>Team</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="button"><a href="index.html" class="btn btn-white" >Accueil<span></span></a>		
                        </li>
						
                        <li class="button"><a href="Trajet.html" class="btn btn-white" >Trajet<span></span></a>			
                        </li>
						
                        <li class="button"><a href="Horaires.html" class="btn btn-white">Horaires<span></span></a>		
                        </li>
                        
						<li class="button"><a href="Tarifs.html" class="btn btn-white" >Tarifs<span></span></a>		
                        </li>
						
						<li class="button"><a href="Reservation.html" class="btn btn-white" >Réservation<span></span></a>			
                        </li>
						
						<li class="button"><a href="FAQ.html" class="btn btn-white" >FAQ<span></span></a>
                            
                        </li> 
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->        
        
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-ship"></i></span>MarieTeam</h2>

                <div id="main-menu">
                	<div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li> 
						<a href="index.html" class="btn btn-black" ><span><i class="fa fa-home link-icon"></i></span>  Accueil<span></span></a>
						
                        <a href="Trajet.html" class="btn btn-black active"  ><span><i class="fa fa-ship link-icon"></i></span>  Trajets<span></span></a>                      
                        
                        <a href="Horaires.html" class="btn btn-black" ><span><i class="fa fa-clock-o link-icon"></i></span>  Horaires<span></span></a>
                       
                        <a href="Tarifs.html" class="btn btn-black"><span><i class="fa fa-euro link-icon"></i></span>  Tarifs<span></span></a>
						
                        <a href="Reservation.html" class="btn btn-black" ><span><i class="fa fa-ticket link-icon"></i></span>  Réservation<span></span></a>
						
                        <a href="FAQ.html" class="btn btn-black" ><span><i class="fa fa-question link-icon"></i></span>  FAQ<span></span></a>
						</li>
                    </ul>    

                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        
		<!--========================= FLEX SLIDER =====================-->
						<br />
						<center><h1>Ajouter un Bateau</h1></center>
						<br />
						<center><h4>Remplissez le formulaire afin de rajouter un bateau à la liste:</h4></center>
						<br />
						<br />
						<br />
						<form action="GestionnaireB.php" method="post">
						<center>
						Nom du Bateau:<input type="text" name="txt_bateau" size="20" required/>
						Longueur du Bateau:<input type="text" name="txt_longueur" size="20" required/>
						Nombre d'équipement du Bateau:<input type="number" name="num_equipement" require/><br><br><br>
						Vitesse:<input type="text" name="txt_vitesse" size="20" required/>
						Largeur du Bateau:<input type="text" name="txt_largeur" size="20" required/>
						Image du Bateau:<br><br><br><br><br><br>
						<input type="submit" value="Valider" class="btn btn-orange"/>
						<input type="reset" value="Annuler" class="btn btn-orange" />
						<br><br><br>
						</center>
						</form>
						
						<?php

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
	
						
       

        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
						
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-5 footer-widget ftr-contact">
                            <h3 class="footer-heading">Contactez-Nous</h3>
                            <ul class="list-unstyled">
                            	<li><span><i class="fa fa-map-marker"></i></span>Gaston Berger, Lille</li>
                            	<li><span><i class="fa fa-phone"></i></span>01 23 45 67 89</li>
                                <li><span><i class="fa fa-envelope"></i></span>Marie@Team.com</li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-4 footer-widget ftr-links">
                            <h3 class="footer-heading">Site</h3>
                            <ul class="list-unstyled">
                            	<li><a href="index.html">Accueil</a></li>
                            	<li><a href="Trajet.html">Trajets</a></li>
                                <li><a href="Horaires.html">Horaires</a></li>
                                <li><a href="Tarifs.html">Tarifs</a></li>
                                <li><a href="Reservation.html">Réservation</a></li>
                                <li><a href="FAQ.html">FAQ</a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        	<h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                            	<li><a href="FAQ.html">FAQ</a></li>
                                <li><a href="Inscription.html">S'identifier</a></li>
                            </ul>
                        </div><!-- end columns -->

                        
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2018 <a href="#">MarieTeam</a>. Tout droits réservés.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            	<li><a href="#">Termes et Condtions</a></li>
                                <li><a href="#">Politique Privée</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-flex.js"></script>
        <script src="js/custom-owl.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-video.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>