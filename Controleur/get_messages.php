<?php

$pdo = require ('../modele/connexion.php');

// On récupère tout le contenu de la table clients
function get_messages()
{
    global $pdo;
	$sqlQuery = 'SELECT * FROM formulaire';
	$listeclients = $pdo->prepare($sqlQuery);
	$listeclients->execute();
	$liste = $listeclients->fetchAll();

	// On affiche chaque client un à un
	foreach ($liste as $data)
    {
	    echo $data['id'].' '.$data['prenom'].' '.$data['nom'].'<br>'.$data['email'].'<br>'.$data['message'].'<br><br/>';
	}
}
?>