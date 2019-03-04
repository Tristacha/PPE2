<?php 
session_start();
include('function/coBdD.php');

if(isset($_POST['code']))
{
    $_SESSION['choixL'] = 1;
    header('Location:Horaires.php?code='.$_SESSION['choixL']);
}
?>
<html lang="fr">
    <head>
        <title>Trajet</title>
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
                                        <li><a href="Profil.php"><span><i class="fa fa-lock"></i></span><?php echo $_SESSION['nom']?></a></li>
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
                <!-- end row -->
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
						
                        <li class="dropdown active"><a href="Trajet.php" class="btn btn-white" >Trajet<span></span></a>			
                        </li>
						
                        <li class="button"><a href="Horaires.php" class="btn btn-white">Horaires<span></span></a>		
                        </li>
                        
						<li class="button"><a href="Tarifs.php" class="btn btn-white" >Tarifs<span></span></a>		
                        </li>
						
						<li class="button"><a href="Reservation.php" class="btn btn-white" >Réservation<span></span></a>			
                        </li>
						
						<li class="button"><a href="FAQ.php" class="btn btn-white" >FAQ<span></span></a>
                            
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
						
                        <a href="Trajet.php" class="btn btn-black active"  ><span><i class="fa fa-ship link-icon"></i></span>  Trajets<span></span></a>                      
                        
                        <a href="Horaires.php" class="btn btn-black" ><span><i class="fa fa-clock-o link-icon"></i></span>  Horaires<span></span></a>
                       
                        <a href="Tarifs.php" class="btn btn-black"><span><i class="fa fa-euro link-icon"></i></span>  Tarifs<span></span></a>
						
                        <a href="Reservation.php" class="btn btn-black" ><span><i class="fa fa-ticket link-icon"></i></span>  Réservation<span></span></a>
						
                        <a href="FAQ.php" class="btn btn-black" ><span><i class="fa fa-question link-icon"></i></span>  FAQ<span></span></a>
						</li>
                    </ul>    

                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        
		<!--========================= Tableau =====================-->
		<br />
		
		

        <?php        
        $reponse = "SELECT s.nom_secteur,l.code,l.Distance,(SELECT nom_port FROM port WHERE id_port=l.id_port_dep) as 'Port Départ', (SELECT nom_port FROM port WHERE id_port=l.id_port_arr) as 'Port Arrivée' FROM liaison l,secteur s WHERE l.id_secteur=s.id_secteur ";
        $res = $db->query($reponse);
        ?>
       <center><h1 style="padding-top: 80px;">Liste des Trajets </h1></center>
        <div class="container-table100" style="background-color: transparent; ">
            <div class="wrap-table100" style="width: 1200px; ">
                    <div class="table" style="text-align: center;  " >

                        <div class="row header "style="background-color: orange;">
                            <div class="cell" style="width: 400px;">
                                Secteur
                            </div>
                            <div class="cell" style="width: 400px;">
                                Distance (Milles)
                            </div>
                            <div class="cell" style="width: 400px;">
                                Port Départ
                            </div>
                            <div class="cell" style="width: 400px;">
                                Port Arrivée
                            </div>
                        </div>
                    <?php 
                        while($donnees = $res->fetch_array())
                        {
                    ?> 
                        <div class="row" style="text-align: center;">
                            <div class="cell" style="width: 400px;" data-title="Nom du secteur">
                                <form action="" method="POST">
                                    <button value="<?php echo $donnees['code']?>" style="background-color: transparent; border-color: transparent;" name="code">
                                        <?php echo $donnees['nom_secteur'];?>
                                    </button>
                                </form>
                            </div>
                            <div class="cell" style="width: 400px;" data-title="Distance">
                                <form action="" method="POST">
                                    <button value="<?php echo $donnees['code']?>" style="background-color: transparent; border-color: transparent;" name="code">
                                        <?php echo $donnees['Distance'];?>
                                    </button>
                                </form>
                            </div>
                            <div class="cell" style="width: 400px;" data-title="Port de Départ">
                                <form action="" method="POST">
                                    <button value="<?php echo $donnees['code']?>" style="background-color: transparent; border-color: transparent;" name="code">
                                        <?php echo $donnees['Port Départ'];?>
                                    </button>
                                </form>
                            </div>
                            <div class="cell" style="width: 400px;" data-title="Port d'Arrivée">
                                <form action="" method="POST">
                                    <button value="<?php echo $donnees['code']?>" style="background-color: transparent; border-color: transparent;" name="code">
                                        <?php echo $donnees['Port Arrivée'];?>
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php
                        } //fin de la boucle, le tableau contient toute la BDD
                            //mysqli_close(); //deconnection de mysql
                        ?>
                    </div>
                    <center>
        <a href="Tarifs.php" class="btn btn-orange" style="width: 150px; height: 40px; border-radius: 2px; margin-top: 80px;">
            Page des Tarifs  
        </a>
    </center>
                </div>
            </div>
   
       

        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    
						
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

                        
                        
                    <!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2018 <a href="#">MarieTeam</a>. Tout droits réservés.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            	<li><a href="#">Termes et Condtions</a></li>
                                <li><a href="#">Politique Privée</a></li>
                            </ul>
                        </div><!-- end columns -->
                    <!-- end row -->
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