<?php
	
$pdo = require ('../modele/connexion.php');
	
// On récupère tout le contenu de la table clients
function target_message($id)
{
    global $pdo;
	$sqlQuery = "SELECT * FROM formulaire WHERE id='$id'";
	$listeclients = $pdo->prepare($sqlQuery);
	$listeclients->execute();
	$liste = $listeclients->fetchAll();

	
	//gestion d'un code inconnu
	if ($liste==null) {echo 'Ce message n\'existe pas ! <br/><br/>';}
							

	// On affiche le formulaire de modification prérempli avec les données du client
	foreach ($liste as $data) {
	
		echo '<form method="POST" action="valider_modification_message.php">';
		echo 'Nom : <input type="text" name="nom" size="50" autofocus="true" value="'.$data['nom'].'" maxlength="50" ><br/><br/>';
		echo 'Prénom : <input type="text" name="prenom" size="50" value="'.$data['prenom'].'" maxlength="50" ><br/><br/> ';
		echo 'Email : <input type="text" name="email" size="50" value="'.$data['email'].'" maxlength="50" ><br/> <br/>';
		echo 'Message : <textarea name="message" rows="5" cols="40">'.$data['message'].'</textarea><br/> <br/>';
		echo '<input type="submit" value="Modifier" name="modifier">';
		echo '</form>';
	}
}
?>