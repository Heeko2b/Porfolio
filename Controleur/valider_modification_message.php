<html>
<head>
	<meta charset="utf-8">
  <title>Modifier message</title>
</head>

<body >

<?php 

$pdo = require ('../modele/connexion.php');

// récupération des champs venant du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$message=$_POST['message'];



// Ecriture de la requête
$sqlQuery = "UPDATE formulaire SET nom=:nom,prenom=:prenom,email=:email,message=:message WHERE id='$id'";

// Préparation
$insertclient = $pdo->prepare($sqlQuery);

// Exécution ! 
$insertclient->execute([
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'message' => $message,
]);

	header("Location:../Vue/menu_principal.php"); //appel de la page menu_principal.php
    
?> 



</body>
</html>