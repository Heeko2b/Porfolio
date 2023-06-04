<html>
<head>
	<meta charset="utf-8">
  <title>Ajouter un projet</title>
</head>
<body>
<?php 

$pdo = require ('../modele/connexion.php');

// récupération des champs venant du formulaire
$nom=$_POST['nom'];
$lien=$_POST['lien'];
$description=$_POST['description'];

// Ecriture de la requête
$sqlQuery = 'INSERT INTO projets(nom,lien,description) VALUES(:nom,:lien,:description)';

// Préparation
$insertProjet = $pdo->prepare($sqlQuery);

// Exécution 
$insertProjet->execute([
  'nom' => $nom,
  'lien' => $lien,
  'description' => $description,
]);

header("Location:../Vue/menu_principal.php"); //appel de la page menu_principal.php  
?> 
</body>
</html>