<?php
$bdd = 'ppemarie';
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = mysqli_connect ($hostname, $username, $password, $bdd);
//  Récupération de l'utilisateur et de son pass hashé
$req = $db->prepare('SELECT id_client, MotDePasse FROM clients WHERE mail = :Mail AND pass=:MotDePasse');
$req->execute(array('mail' => $mail,'pass' => $pass));

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['mail'] = $mail;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>
