<?php 
function affTrajet();
{
        include('coBdD.php');
        $reponse = mysqli_query($db,"SELECT s.nom_secteur,l.code,l.Distance,(SELECT nom_port FROM port WHERE id_port=l.id_port_dep) as 'Port Départ', (SELECT nom_port FROM port WHERE id_port=l.id_port_arr) as 'Port Arrivée' FROM liaison l,secteur s WHERE l.id_secteur=s.id_secteur ;");
        ?>
        <center>
        <table border="5" width="500">
                <tr> 
                    <th>Secteur</th>
                    <th>Code Liaison</th>
                    <th>Distance (Milles)</th>
                    <th>Port Départ</th>
                    <th>Port Arrivée</th>
                </tr>
            <?php 
            while($donnees = mysqli_fetch_array($reponse))
            {
            ?>
                <tr>
                    <td><?php echo $donnees['nom_secteur'];?></td>
                    <td><?php echo $donnees['code'];?></td>
                    <td><?php echo $donnees['Distance'];?></td>
                    <td><?php echo $donnees['Port Départ'];?></td>
                    <td><?php echo $donnees['Port Arrivée'];?></td>
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            //mysqli_close(); //deconnection de mysql
            ?>
        </table>
}
?>