<?php 
session_start();
include('function/coBdD.php');
if(isset($_POST['save']))
{

    $mdp = sha1($_POST['password']);
    $sql='UPDATE clients SET  MotDePasse="'.$mdp.'" , Telephone="'.$_POST['mobile'].'",  Nom="'.$_POST['name'].'", Prenom="'.$_POST['prenom'].'", Mail="'.$_POST['mail'].'", DateNaissance="'.$_POST['nee'].'" WHERE id_client ="'.$_SESSION['id'].'"';
    $req = $db ->query($sql);
    var_dump($req);
}
?>
<html lang="en">
    <head>
        <title>Mon profil</title>
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

        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


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
        
        
        
<?php if($_SESSION['id'] !=1)
      {
?>   
        <br /><br />
	<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1><?php echo strtoupper($_SESSION['nom']);?></h1></div><br /><br /><br /><br />
        
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
      
               
          <div class="panel panel-default">
            <div class="panel-heading">Nombre de point de fidelisation</div>
            <div class="panel-body"><?php echo $_SESSION['fid'];?></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Nombres de réservations:</strong></span> <?php 
            $sql='SELECT count(id_client) FROM  reservation WHERE id_client="'.$_SESSION['id'].'"';
            $res = $db->query($sql);
            $req = $res->fetch_array();
            echo $req['count(id_client)'];
            //echo $req['cout(id_client)'];
            ?>
            </li>


            <li class="list-group-item text-right"><span class="pull-left"><strong>Prochain départ:</strong></span> <?php 
            $sql='SELECT date FROM traversee AS t, reservation AS r WHERE r.num_tra=t.num_tra  and t.date >= current_date GROUP BY date DESC';
            $res = $db->query($sql);
            $req = $res->fetch_array();
            $date = date("d-m-Y", strtotime($req['date']));
            echo $date; ?>
            </li>
          </ul> 
               
          
          
        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs"> 
                <li><h2 style="color:orange;"><strong>Informatin personnel</strong></h2></li>
              </ul>
                <div class="tab-pane" id="settings">
                  <hr>
                  <form class="form" action="" method="post" id="registrationForm" >
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name" ><h4 style="font-family: calibri;">Nom</h4></label>
                              <input type="text" class="form-control" name="name" id="first_name" value="<?php echo $_SESSION['nom'];?>" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4 style="font-family: calibri;">Prenom</h4></label>
                              <input type="text" class="form-control" value="<?php echo $_SESSION['prenom'];?>" name="prenom" id="last_name"  title="Prenom">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4 style="font-family: calibri;">Numéro Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $_SESSION['tel'];?>" placeholder="numero de mobile" title="enter your mobile number if any.">
                          </div>
                      </div>

                      <div class="col-xs-6">
                              <label for="phone"><h4 style="font-family: calibri;">Date de naissance</h4></label>
                              <?php $dateN = date('d-m-Y',strtotime($_SESSION['dateN']));?>
                              <input type="text" class="form-control" name="nee" id="phone" value="<?php echo $dateN; ?>" title="enter your phone number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4 style="font-family: calibri;">Email</h4></label>
                              <input type="email" class="form-control" name="mail" id="email" value="<?php echo $_SESSION['mail'];?>" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                         <div class="col-xs-6">
                              <label for="password"><h4 style="font-family: calibri;">Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" value ="<?php echo $_SESSION['pass'];?>"placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button style="font-family: calibri;" class="btn btn-lg btn-success pull-right"  name="save" type="submit"><i class="glyphicon glyphicon-ok-sign"></i > Save</button>
                                <button  style="font-family: calibri;" class="btn btn-lg  pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Reset</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    <br /><br /><br /><br />
<?php 
    }
    else
    {
?>

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="" href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <h2>MarieTeam</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="index.html"><i class="fas fa-tachometer-alt"></i>Administration</a>
                        </li>
                         <li class="active has-sub">
                            <a href="GestionnaireBateau.php">Gestion des Bateaux</a>
                        </li>
                         <li class="active has-sub">
                            <a href="GestionnaireTrajet.php">Gestion des Trajets</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                             <div class="account-wrap">
                                    <div class="">
                                       <a href="index.php">Accueil ||</a>
                                        <a  href="function/logout.php">Déconnexion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>membres en ligne</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>Revenu</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>Cette semaine</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>Chiffre d'affaire</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Rapport récent</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>Septembre-Janvier</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>Fevevrier-Aout</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">Septembre-Janvier</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">Fevevrier-Aout</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Période de réservation  %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Septembre-Janvier</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Fevevrier-Aout</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Utilisateur</h3>
                                    <div class="filters m-b-45">

                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>Point Fidelisation</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                        <?php 
                                            $sql = 'SELECT id_client, fidelisation, Nom, Mail FROM clients';
                                            $req= $db->query($sql);
                                            while($res = $req->fetch_array())
                                            {
                                        ?>
                                            <td></td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6><?php echo $res['Nom'];?></h6>
                                                            <span>
                                                                <a><?php echo $res['Mail'];?> </a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php if($res['id_client'] == 1)
                                                        {
                                                        ?>
                                                        <span class="role admin"> <?php echo 'admin';?></span>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                        <span class="role user"> <?php echo 'client';?></span>
                                                        <?php 
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <span class=""><?php echo $res['fidelisation'];?></span>
                                                    </td>                                                    
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Meilleurs pays</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turkey</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Germany</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Italy</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 MarieTeam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php 
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

        <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main3.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>