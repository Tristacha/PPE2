<!doctype html>
<html>
<head>
<style>
	.bg-text {
			background-color: rgb(0,0,0); /* Fallback color */
			 background-color: rgba(0,0,0, 0); /* Black w/opacity/see-through */
			 color: blue;
			  font-weight: bold;
			  border: 2px solid black;
			  border-radius: 5px;
			  
			 position: absolute;
			 top: 60%;
			 left: 50%;
			 bottom: -50%;
			transform: translate(-50%, -50%);
			 z-index: 2;
			 width: 45%;
			 padding: 20px;  
						}
.recap{	
		font-family: Arial, Helvetica, sans-serif; 
		
	}
	
						
</style>
</head>
<body>
<div class="row col-md-12">
	<div class="container col-md-6">
	
	</div>	
</div>
<div class="bg-text">
    <div class="row col-md-12">
		<h3>Nom de la compagnie:</h3>
	</div>
	<h3>Nom de la liason:</h3>
	<h3>Horaire de la liaison:</h3>
	
	<h3>Numéro de commande: &nbsp;
		<?php echo rand();?>
	</h3>
	<h3>Votre Nom:&nbsp;
		<?php echo $_POST['prenom']; ?>
	</h3>
	<h3>Votre Adresse: &nbsp;
		<?php echo $_POST['adresse']; ?>
	</h3>
	<h3>Code Postale: &nbsp;
		<?php echo $_POST['postale']; ?>
	</h3>
	<h3>Ville:&nbsp; 
		<?php echo $_POST['ville']; ?>
	</h3>
	<h3>Le nombre personne:</h3>
	<h3>Adulte &nbsp; 
		<?php echo $_POST['adulte']; ?>
	</h3>
	<h3>Junior(8 à 18 ans): &nbsp;
		<?php echo $_POST['junior']; ?>
	</h3>
	<h3>Enfant (0 à 7 ans): &nbsp; 
		<?php echo $_POST['enfant']; ?>
	</h3>

	<h3>Montant de la réduction:&nbsp;
		<?php  $reduction = 50; echo $reduction ?>%
	</h3>
	<h3>Montant total à régler: &nbsp;	
		<?php  $montant =  0; 
			/*if($_POST['adulte'] == null || $_POST['junior'] == null || $_POST['enfant'] == null) echo 'Vous devez entrer le nombre de personne (Adulte, Junior, Enfant)';*/
			 $montant = ($_POST['adulte'] * 20)+($_POST['junior']*13.10)+($_POST['enfant']*7);
				if($reduction !=0) $montant = $montant * ($reduction/100);
				else $montant = $montant;
			echo $montant ;
		?> euros
	</h3>
	<h3>	
			<img src="images/paypal.png">
			<img src="images/carte.jpg">
		
	</h3>
</div>
	

</body>
</html> 