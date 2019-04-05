<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>FAQ</title>
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
                               <?php 
                                    if(!isset($_SESSION['id']))
                                    {
                                ?>
                                        <li><a href="connexion.php"><span><i class="fa fa-lock"></i></span>S'identifier</a></li>
                                        <li><a href="inscription.php"><span><i class="fa fa-lock"></i></span>S'inscrire</a></li>
                                    }
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                        <li><a href="profil.php"><span><i class="fa fa-lock"></i></span><?php echo $_SESSION['nom']?></a></li>
                                        <li><a href="function/logout.php"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Deconnexion</a></li>
                                <?php
                                    }
                                ?>
                                    <div class="modal fade" id="popUpWindow">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- header -->
                                            <!--<div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title">Se connecter</h3>
                                            </div>-->
                                        <!-- body -->
                                        <form name="myform"  action="" method="POST">
                                            <div class="modal-body">
                                                <!--<label for="email">Adresse e-mail :</label>
                                                <input id="email" name="email" class="form-control" type="text" /required>
                                                <label for="password" class="cols-sm-2 control-label">Mot de passe :</label>
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" name="password" id="password"  placeholder="Mot de passe" autocomplete="on" /required/>
                                                    </div>
                                                </div>
                                                <br>
                                                <input type="submit" value="Identifiez-vous" class="btn btn-orange  btn-block">-->
                                            </div>
                                        </form>
                                        
                                        <!-- footer -->
                                            <div class="modal-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <a href="index.php" class="navbar-brand"><span><i class="fa fa-ship"></i>MARIE</span>Team</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="button"><a href="index.php" class="btn btn-white" >Accueil<span></span></a>		
                        </li>
						
                        <li class="button"><a href="Trajet.php" class="btn btn-white" >Trajet<span></span></a>			
                        </li>
						
                        <li class="button"><a href="Horaires.php" class="btn btn-white">Horaires<span></span></a>		
                        </li>
                        
						<li class="button"><a href="Tarifs.php" class="btn btn-white" >Tarifs<span></span></a>		
                        </li>
						
						<li class="button"><a href="Reservation.php" class="btn btn-white" >Réservation<span></span></a>			
                        </li>
						
						<li class="dropdown active"><a href="FAQ.php" class="btn btn-white" >FAQ<span></span></a>
                            
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
						<a href="index.php" class="btn btn-black" ><span><i class="fa fa-home link-icon"></i></span>  Accueil<span></span></a>
						
                        <a href="Trajet.php" class="btn btn-black"  ><span><i class="fa fa-ship link-icon"></i></span>  Trajets<span></span></a>                      
                        
                        <a href="Horaires.php" class="btn btn-black" ><span><i class="fa fa-clock-o link-icon"></i></span>  Horaires<span></span></a>
                       
                        <a href="Tarifs.php" class="btn btn-black"><span><i class="fa fa-euro link-icon"></i></span>  Tarifs<span></span></a>
						
                        <a href="Reservation.php" class="btn btn-black" ><span><i class="fa fa-ticket link-icon"></i></span>  Réservation<span></span></a>
						
                        <a href="FAQ.php" class="btn btn-black active" ><span><i class="fa fa-question link-icon"></i></span>  FAQ<span></span></a>
						</li>
                    </ul>    

                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        
		<!--========================= Titre =====================-->
		<center>
        <font size = "10"> Foire aux Questions </font>
		</center>
			
		<!--=============== Texte FAQ ===============-->
		
		<!-- les questions de la FAQ -->
    <center>
   
  
    <!--Création d'une liste de question/réponse-->
	
    <div class="faq">
        <ul style="list-style-type: none">
            <li>
                <h3 id="question_1" name="question_1">
                    Délai de rétractation?
                </h3>
                La rétractation est valide jusqu'à deux semaines avant le départ du bateau.
            </li>
            <br>
            <li>
                <h3 id="question_2" name="question_2">
                   Remboursement?
                </h3>
                Le remboursement de votre billet se fait sous les 30 jours après votre demande.
            </li>
            <br>
            <li>
                <h3 id="question_3" name="question_3">
                    Probleme de connexion?
                </h3>
                Si vous n'arrivez pas à vous connecter à votre profil, veuillez faire part de votre problème à l'adresse suivante : support@marieteam.com
            </li>
            <br>
            <li>
                <h3 id="question_4" name="question_4">
                    Comment beneficier de reduction?
                </h3>
                Plus votre ancienneté est élevée, plus vous aurez le droit à différentes réductions.
            </li>
			<br>
			<li>
                <h3 id="question_5" name="question_5">
                   Où retrouver mon billet?
                </h3>
                Vous pourrez retrouver votre billet d'embarcation sur votre profil ou dans votre boîte mail.
            </li>
			<br>
			<li>
                <h3 id="question_6" name="question_6">
                   Y a t-il une limite au nombre de véhicules?
                </h3>
                Vous avez la possibilité de prendre le nombre de véhicule de votre choix mais d'une seule sorte.
            </li>
			<br>
			<li>
                <h3 id="question_7" name="question_7">
                   Les animaux sont-ils acceptés?
                </h3>
                Un espace est décerné aux animaux sur chaque bateau de notre compagnie, lors de votre montée sur le bateau, il vous suffira de confier votre animal à une personne responsable de cet espace.
            </li>
			<br>
			<li>
                <h3 id="question_8" name="question_8">
                Les bateaux sont-ils équipés d'accès pour personnes à mobilité réduite?
                </h3>
                Certains bateaux sont accesibles mais pour cela, plus d'informations sont disponible sur la page de la croisière concernée.
            </li>
			<br>
			<li>
                <h3 id="question_9" name="question_9">
                Les pertes/vol de baggages sont-ils couverts par la compagnie?
                </h3>
                Tout les cas ne sont pas pris en compte, seuls les vols prouvés peuvent être couverts par Marie-Team.
            </li>
        </ul>
		<br>
		<br>
		<br>
		<br>
    </div>
        
       

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
                            	<li><a href="index.php">Accueil</a></li>
                            	<li><a href="Trajet.php">Trajets</a></li>
                                <li><a href="Horaires.php">Horaires</a></li>
                                <li><a href="Tarifs.php">Tarifs</a></li>
                                <li><a href="Reservation.php">Réservation</a></li>
                                <li><a href="FAQ.php">FAQ</a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        	<h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                            	<li><a href="FAQ.php">FAQ</a></li>
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
