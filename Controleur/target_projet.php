<?php
	
$pdo = require ('../modele/connexion.php');
	
// On récupère tout le contenu de la table clients
function target_projet($id)
{
    global $pdo;
	$sqlQuery = "SELECT * FROM projets WHERE id='$id'";
	$listeclients = $pdo->prepare($sqlQuery);
	$listeclients->execute();
	$liste = $listeclients->fetchAll();

	
	//gestion d'un code inconnu
	if ($liste==null) {echo 'Ce projet n\'existe pas ! <br/><br/>';}
							

	// On affiche le formulaire de modification prérempli avec les données du client
	foreach ($liste as $data) {
	
		echo '<form method="POST" action="valider_modification_message.php">';
		echo 'Nom : <input type="text" name="nom" size="50" autofocus="true" value="'.$data['nom'].'" maxlength="50" ><br/><br/>';
		echo 'Lien : <input type="text" name="prenom" size="50" value="'.$data['lien'].'" maxlength="50" ><br/><br/> ';
		echo 'Aperçu : <img src="'.$data['lien'].'" width="25%" ><br/><br/> ';
		echo 'Description : <input type="text" name="email" size="50" value="'.$data['description'].'" maxlength="50" ><br/> <br/>';
		echo '<input type="submit" value="Modifier" name="modifier">';
		echo '</form>';
	}
}
?>