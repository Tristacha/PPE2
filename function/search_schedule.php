<?php
	include('function/coBdD.php');
	function search ($code)
	{	
		
		$sql = 'SELECT nom_liaison,Nom_Bateau, date, heure From liaison AS L , bateau AS B, Traversee AS T WHERE  T.code ="'.$code.'"';
        $req = $db->query($sql);
        return $req;
    }


	function display ()
	{
			
            $sql = 'SELECT nom_liaison,Nom_Bateau, date, heure From liaison AS L , bateau AS B, Traversee AS T WHERE B.id_bateau = T.id_bateau AND L.code = T.code ';
        	$req = $db->query($sql);
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