<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>Horaires</title>
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
                                        <li><a href="profil.php"><span><i class="fa fa-lock"></i></span><?php echo $_SESSION['nom']?></a></li>
                                        <li><a href="function/logout.php"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Deconnexion</a></li>
                                <?php
                                    }
                                ?>
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
						
                        <li class="button"><a href="trajet.php" class="btn btn-white" >Trajet<span></span></a>			
                        </li>
						
                        <li class="dropdown active"><a href="Horaires.php" class="btn btn-white">Horaires<span></span></a>		
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
						
                        <a href="trajet.php" class="btn btn-black"  ><span><i class="fa fa-ship link-icon"></i></span>  Trajets<span></span></a>                      
                        
                        <a href="Horaires.php" class="btn btn-black active" ><span><i class="fa fa-clock-o link-icon"></i></span>  Horaires<span></span></a>
                       
                        <a href="Tarifs.php" class="btn btn-black"><span><i class="fa fa-euro link-icon"></i></span>  Tarifs<span></span></a>
						
                        <a href="Reservation.php" class="btn btn-black" ><span><i class="fa fa-ticket link-icon"></i></span>  Réservation<span></span></a>
						
                        <a href="FAQ.php" class="btn btn-black" ><span><i class="fa fa-question link-icon"></i></span>  FAQ<span></span></a>
						</li>
                    </ul>    

                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        
		     
        <!--=============== HOTEL OFFERS ===============--><br /><br /><br /><br /><br />
        	
        		
        			<div class="col-sm-12">
                    	<div class="page-heading">
                        	<h2>Horaires des croisières</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading --><br /><br /><br />
                        <?php 
                            if(!isset($_GET['code']))
                                    {?>
                              <form method="post" style="padding-left: 250px; ">
                                <select name="cbBox">
                                    <option value="0">Toutes les périodes</option>
                                    <option value="1">01 Janvier - 01 Mai</option>
                                    <option value="2">02 Mai - 01 Septembre</option>
                                    <option value="3">02 Septembre - 31 Décembre</option>
                                </select>
                                <input type="submit" name="btnEnvoyer" value="Confirmer la période">
                            </form>
                        <?php }?>
                        <div class="container-table100" style="background-color: transparent; padding-bottom: 500px; ">
                            <div class="wrap-table100" style="width: 1200px; ">
                            <div class="table" style="text-align: center;  " >

                            <div class="row header "style="background-color: orange;">
                                <div class="cell" style="width: 400px;">
                                    Nom liaison
                                </div>
                                <div class="cell" style="width: 400px;">
                                   Date
                                </div>
                                <div class="cell" style="width: 400px;">
                                   Heure
                                </div>
                                <div class="cell" style="width: 400px;">
                                   Nom Bateau
                                </div>
                            </div>
                            <?php 
                                if(!isset($_GET['code']))
                                {
                                    include('function/coBdD.php');
                                    $selectPeriodes = 'SELECT * FROM periode';
                                    $lesPeriodes = $db->query($selectPeriodes);
                                    if(isset($_POST['cbBox'])) 
                                    {
                                        $selection = intval($_POST['cbBox']);
                                    }
                                    else 
                                    {
                                        $selection = 0;
                                    }
                                    $i = 1;
                                    if($selection != 0){
                                        while($unePeriode = $lesPeriodes->fetch_array()){
                                            if($i == $selection){
                                                $dateDeb = $unePeriode['dateDeb'];
                                                $dateFin = $unePeriode['dateFin'];
                                            }
                                            $i++;
                                        }
                                        $sql = 'SELECT nom_liaison,Nom_Bateau, date, heure From liaison AS L , bateau AS B, Traversee AS T WHERE B.id_bateau = T.id_bateau AND L.code = T.code AND date >= "'.$dateDeb.'" AND date <= "'.$dateFin.'"';
                                    }else{
                                        $sql = 'SELECT nom_liaison,Nom_Bateau, date, heure From liaison AS L , bateau AS B, Traversee AS T WHERE B.id_bateau = T.id_bateau AND L.code = T.code';
                                    }
                                    $req = $db->query($sql);
                                    while($res = $req->fetch_array())
                                    {   
                                    ?>
                                        <div class="row" style="text-align: center;">
                                            <div class="cell" style="width: 400px;" data-title="Nom du secteur">
                                                <?php echo $res['nom_liaison'];?>
                                                </div>
                                                <div class="cell" style="width: 400px;" data-title="Distance">
                                                    <?php echo $res['date'];?>
                                                </div>
                                                <div class="cell" style="width: 400px;" data-title="Port de Départ">
                                                     <?php echo $res['heure'];?>
                                                </div>
                                                <div class="cell" style="width: 400px;" data-title="Port d'Arrivée">
                                                    <?php echo $res['Nom_Bateau'];?>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                    
                                }else
                                {
                                    include('function/coBdD.php');
                                    $sql = 'SELECT nom_liaison,Nom_Bateau, date, heure From liaison AS L , bateau AS B, Traversee AS T WHERE L.code = "'.$_GET['code'].'" AND T.code ="'.$_GET['code'].'" AND B.id_bateau = T.id_bateau';
                                    $req = $db->query($sql);
                                    //var_dump($req);



                                    while ($res= $req->fetch_array())
                                    {
                                ?>
                                        <div class="row" style="text-align: center;">
                                            <div class="cell" style="width: 400px;" data-title="Nom du secteur">
                                                <?php echo $res['nom_liaison'];?>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Distance">
                                                <?php echo $res['date'];?>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Port de Départ">
                                                 <?php echo $res['heure'];?>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Port d'Arrivée">
                                                <?php echo $res['Nom_Bateau'];?>
                                            </div>
                                        </div>
                                <?php 
                                    }
                                
                                }
                                ?>     
                    </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        
        
       

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
                            	<li><a href="trajet.php">Trajets</a></li>
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
                                <li><a href="inscription.php">S'identifier</a></li>
                            </ul>
                        </div><!-- end columns -->
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