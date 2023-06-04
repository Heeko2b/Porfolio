<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:../Vue/login.php");
      exit();
   }
   
      $utilisateur="Utilisateur : ".$_SESSION["fullname"];
?>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Modifier projet</title>

<link href="../Vue/css/style_backoffice.css" type="text/css" rel="stylesheet">
</head>

<body>
     <b><?php echo $utilisateur ?></b><br/>
     <a href="../Vue/deconnexion.php">Se déconnecter</a> <hr>
<H1>Visualiser-Modifier un projet</H1>
<br/><br/>

<?php
	
	// récupération du code client à modifier et conversion en un nombre entier

$id = $_POST['id'];
require ('controleur.php');
target_projet($id);
?>
	<button type="cancel" onclick="javascript:window.location='../Vue/menu_principal.php';">Retour au menu principal</button>	
</body>
</html>