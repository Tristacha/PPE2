<?php 
session_start();
if(isset($_POST['valide']))
{
    $_SESSION['nom_liaison'] = $_POST['valide'];
    if(isset($_SESSION['id']))
    {
       header('Location:function/choix_vehicule.php');
    }
    else
    {
        echo '<script>alert("Vous devez être connecter pour pouvoir réserver un trajet!");</script>';
        header('Location:connexion.php');
    }
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
                            .section {
                    position: relative;
                    height: 100vh;
                }

                .section .section-center {
                    position: absolute;
                    top: 50%;
                    left: 0;
                    right: 0;
                    -webkit-transform: translateY(-50%);
                    transform: translateY(-50%);
                }

                #booking {
                    font-family: 'Imprima', sans-serif;
                    background-image: url('images/back_res.jpg');
                    background-size: cover;
                    background-position: center;
                }

                .booking-form .form-group {
                    position: relative;
                    height: 80px;
                    margin-bottom: 10px;
                    margin-right: -10px;
                    margin-left: -10px;

                }

                .booking-form .form-control {
                    font-family: 'Cantata One', serif;
                    background-color: transparent;
                    border-radius: 0px;
                    border: none;
                    height: 80px;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    font-size: 28px;
                    color: #333;
                    font-weight: 600;
                    background: rgba(255, 255, 255, 0.85);
                    padding-top: 30px;
                    -webkit-transition: 0.2s background;
                    transition: 0.2s background;
                }

                .booking-form .form-control:focus {
                    background: rgba(255, 255, 255, 1);
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }

                .booking-form .form-control::-webkit-input-placeholder {
                    color: rgba(51, 51, 51, 0.3);
                }

                .booking-form .form-control:-ms-input-placeholder {
                    color: rgba(51, 51, 51, 0.3);
                }

                .booking-form .form-control::placeholder {
                    color: rgba(51, 51, 51, 0.3);
                }

                .booking-form input[type="date"].form-control:invalid {
                    color: rgba(51, 51, 51, 0.3);
                }

                .booking-form select.form-control {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                }

                .booking-form select.form-control+.select-arrow {
                    position: absolute;
                    right: 0px;
                    bottom: 0px;
                    width: 24px;
                    text-align: center;
                    pointer-events: none;
                    background: rgba(255, 255, 255, 0.3);
                    height: 80px;
                    line-height: 80px;
                }

                .booking-form select.form-control+.select-arrow:after {
                    content: '\279C';
                    display: block;
                    -webkit-transform: rotate(90deg);
                    transform: rotate(90deg);
                    color: #333;
                    font-size: 14px;
                }

                .booking-form .form-label {
                    color: #8c5d28;
                    display: block;
                    font-weight: 700;
                    height: 30px;
                    line-height: 30px;
                    font-size: 14px;
                    letter-spacing: 0.6px;
                    position: absolute;
                    left: 10px;
                    top: 0px;
                }

                .booking-form .form-btn {
                    height: 80px;
                    margin-right: -10px;
                    margin-left: -10px;
                    margin-bottom: 10px;
                }

                .booking-form .submit-btn {
                    background: orange;
                    border: none;
                    font-weight: 800;
                    text-transform: uppercase;
                    letter-spacing: 0.6px;
                    height: 80px;
                    width: 40px;
                    border-radius: 3px;
                    font-size: 18px;
                    width: 100%;
                    color: #fff;
                }

                .booking-cta {
                    text-align: center;
                }

                .booking-cta {
                    margin-bottom: 30px;
                }

                .booking-cta h1 {
                    font-family: 'Cantata One', serif;
                    color: #fff;
                    margin: 0px;
                    font-size: 52px;
                    font-weight: 700;
                }
        </style>
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
                        <li class="dropdown active"><a href="index.php" class="btn btn-white" >Accueil<span></span></a>		
                        </li>
						
                        <li class="button"><a href="Trajet.php" class="btn btn-white" >Trajet<span></span></a>			
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
						<a href="index.php" class="btn btn-black active" ><span><i class="fa fa-home link-icon"></i></span>  Accueil<span></span></a>
						
                        <a href="Trajet.php" class="btn btn-black"  ><span><i class="fa fa-ship link-icon"></i></span>  Trajets<span></span></a>                      
                        
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
        
        
	<div id="booking" class="section">
        <div class="section-center">
            <div class="container" style="margin-top: 400px;">
                <div class="row" style="background-color: transparent; padding-top: 100px;">
                    <div class="booking-cta">
                        <h1 style="color: white; font-family: calibri;">Faite votre Réservation</h1>
                    </div>
                    <div class="booking-form">
                        <form action="" method="POST">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Port de départ</span>
                                    <select class="form-control" name="portD" style="font-family: calibri; border-radius: 3px;">
                                        <option value="0">Depart</option>
                                        <?php 
                                            include('function/coBdD.php');
                                            $sql = 'SELECT * FROM port';
                                            $req = $db->query($sql);
                                            while($res = $req->fetch_array())
                                            {
                                                echo '<option value="'.$res['id_port'].'">'.$res['nom_port'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Port de d'arrivé</span>
                                    <select class="form-control" name="portA" style="font-family: calibri; border-radius: 3px;">
                                        <option value="0">Port de Arrivé</option>
                                        <?php 
                                            include('function/coBdD.php');
                                            $sql = 'SELECT * FROM port';
                                            $req = $db->query($sql);
                                            while($res = $req->fetch_array())
                                            {
                                                echo '<option value="'.$res['id_port'].'">'.$res['nom_port'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">Date de départ</span>
                                    <input class="form-control" type="date" name="dateD" style="font-family: calibri; border-radius: 3px;" /required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">Adulte</span>
                                    <input class="form-control" type="number" value="0" min =0 name="adulte" placeholder="Adulte" style="font-family: calibri; border-radius: 3px;" >
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">Junior(8 à 18 ans)</span>
                                    <input class="form-control"  value="0" type="number" min =0 name="junior" placeholder="Junior" style="font-family: calibri; border-radius: 3px;">
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">Enfant (0 à 7 ans)</span>
                                    <input class="form-control" value="0" type="number" min =0 name="enfant" placeholder="Enfant" style="font-family: calibri; border-radius: 3px;">
                                    <span class="select-arrow"></span>
                                </div>
                            </div>                            
                            <div class="col-md-2">
                                <div class="form-btn">
                                    <button class="submit-btn" name="reservationF" style="font-family: calibri ; background-color: orange; color: black; border-radius: 3px;">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                            if(isset($_POST['reservationF']))
                            {
                                $portD = $_POST['portD'];
                                $portA = $_POST['portA'];
                                if($portD == 0 and $portA == 0)
                                {
                                    echo '<script>alert("Vous devez choisir un port de départ et d\'arrivé");</script>';
                                }
                                else
                                {
                                    if($portD == 0)
                                    {
                                        echo '<script>alert("Vous devez choisir un port de départ!");</script>';
                                    }

                                    if($portA == 0)
                                    {
                                        echo '<script>alert("Vous devez choisir un port d\'arrivé!");</script>';
                                    }
                                }
                                $adulte = $_POST['adulte'];
                                $junior = $_POST['junior'];
                                $enfant = $_POST['enfant'];

                                $_SESSION['adulte'] = $adulte;
                                $_SESSION['junior'] = $junior;
                                $_SESSION['enfant'] = $enfant;

                                $dateDe = $_POST['dateD'];
                                $dateD = date("d-m-Y", strtotime($dateDe));

                                $d = date("d", strtotime($dateD));
                                $m = date("m", strtotime($dateD));
                                $y = date("Y", strtotime($dateD));
                                $d = mktime(0, 0, 0, $m,$d,$y);

                                $date = date("d-m-Y");
                                $dd=date("d", strtotime($date));
                                $mm=date("m", strtotime($date));
                                $yy=date("Y", strtotime($date));
                                $date = mktime(0, 0, 0, $mm,$dd,$yy);
                               
                                if($portD != $portA)
                                {
                                    if($d>=$date)
                                    {
                                        include ('function /coBdD.php');
                                        
                                        $p1D= date(mktime(0, 0, 0, 01,01,2019));
                                        $p1F = date(mktime(0, 0, 0, 05,01,2019));

                                        $p2D=date(mktime(0, 0, 0, 05,02,2019));
                                        $p2F=date(mktime(0, 0, 0, 9,01,2019));

                                        $p3D=date(mktime(0, 0, 0, 9,02,2019));
                                        $p3F=date(mktime(0, 0, 0, 12,31,2019));

                                        if( $d>$p1D and $d<$p1F)
                                        {
                                            $_SESSION['p']= 1;
                                            $Padulte = 18;
                                            $Pjunior = 11.10;
                                            $Penfant = 5.60;
                                        }
                                        if( $d>$p2D and $d<$p2F)
                                        {
                                            $_SESSION['p']= 2;
                                            $Padulte = 20;
                                            $Pjunior = 13.10;
                                            $Penfant = 7;
                                        }
                                        if( $d>$p3D and $d<$p3F)
                                        {
                                            $_SESSION['p']= 3;
                                            $Padulte = 19;
                                            $Pjunior = 12.10;
                                            $Penfant = 6.40;
                                        }                  

                                        if($adulte >= 0 and  $junior>=0 and $enfant>=0)
                                        {
                                           $Prix = ($adulte * $Padulte)+($junior * $Pjunior)+($enfant*$Penfant);
                                           $_SESSION['prix'] = $Prix;
                                           
                                        ?>

                                           <center><h1 style=" color: white; margin-top: 200px; " >Croisère disponible</h1></center>
                                            <div class="container-table100" style="background-color: transparent; ">
                                                <div class="wrap-table100" style="width: 1200px; ">
                                                    <div class="table" style="text-align: center; margin-bottom: 500px;  " >

                                                        <div class="row header "style="background-color: orange;">
                                                            <div class="cell" style="width: 400px;">
                                                                Nom liaison
                                                            </div>
                                                            <div class="cell" style="width: 400px;">
                                                               Distance
                                                            </div>
                                                            <div class="cell" style="width: 400px;">
                                                               Heure
                                                            </div>
                                                            <div class="cell" style="width: 400px;">
                                                               Nom du Bateau
                                                            </div>
                                                            <div class="cell" style="width: 400px;">
                                                               Prix(EUROS)
                                                            </div>
                                                        </div>
                                        <?php 

                                           $sql = 'SELECT nom_liaison,Distance,date,heure,Nom_Bateau,nom_secteur FROM liaison l, traversee t, bateau B, secteur S Where l.code = t.code and l.id_port_dep="'.$portD.'"and l.id_port_arr="'.$portA.'" and t.date ="'.$dateDe.'" Group BY heure DESC';
                                           $req =$db->query($sql);
                                           //$res = $req->fetch_array();
                                           //var_dump($res);
                                            while($res = $req->fetch_array())
                                            {
                                                                                              
                                               
                                        ?>
                                            <div class="row" style="text-align: center;">
                                            <div class="cell"  style="width: 400px;" data-title="Nom liaison">
                                                <form action="" method="POST">
                                                    <button value="<?php echo $res['nom_liaison']?>" style="background-color: transparent; border-color: transparent;" name="valide">
                                                        <?php echo $res['nom_liaison'];?>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Distance">
                                                <form action="" method="POST">
                                                    <button value="<?php echo $res['nom_liaison']?>" style="background-color: transparent; border-color: transparent;" name="valide">
                                                        <?php echo $res['Distance'];?>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Heure">
                                                <form action="" method="POST">
                                                    <button value="<?php echo $res['nom_liaison']?>" style="background-color: transparent; border-color: transparent;" name="valide">
                                                        <?php echo $res['heure'];?>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Nom du Bateau">
                                                <form action="" method="POST">
                                                    <button value="<?php echo $res['nom_liaison']?>" style="background-color: transparent; border-color: transparent;" name="valide">
                                                        <?php echo $res['Nom_Bateau'];?>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="cell" style="width: 400px;" data-title="Prix">
                                                <form action="" method="POST">
                                                    <button value="<?php echo $res['nom_liaison']?>" style="background-color: transparent; border-color: transparent;" name="valide">
                                                        <?php echo $Prix;?>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                    ?>
                                                    </div><!-- end columns -->
                                                </div><!-- end row -->
                                            </div><!-- end container -->
                                    <?php
                                        }
                                        else
                                        {
                                            echo '<script>alert("Vous devez renseignez le nombre de personne pour la réservation!");</script>';
                                        }

                                    }
                                    else
                                    {
                                        echo '<script>alert("Vous devez choisir une date superieur ou égale la date d\'aujourd\'hui!");</script>';
                                    }
                                }
                                else
                                {
                                    echo '<script>alert("Vous devez choisir un port d\'arrivé différent de celui de départ!");</script>';
                                }                      
                                      
                            }
                        ?>    
                </div>
            </div>
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