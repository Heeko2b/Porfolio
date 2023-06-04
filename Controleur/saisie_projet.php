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
<title>Ajouter un projet</title>

<link href="../Vue/css/style_backoffice.css" type="text/css" rel="stylesheet">
</head>

<body>
     <b><?php echo $utilisateur ?></b><br/>
     <a href="../Vue/deconnexion.php">Se déconnecter</a> <hr>
<H1>Ajouter un article</H1>
		<form method="POST" action="ajout_projet.php">
		Nom : <input type="text" name="nom" size="50" maxlength="50"  autofocus="true"><br/><br/> 
		Chemin vers le projet : <input type="text" name="lien" size="50" maxlength="50" ><br/><br/> 
		Description : <input type="text" name="description" size="10" maxlength="50" ><br/> <br/>		
		<input type="submit" value="Ajouter" name="ajouter">
		</form>

		<button type="cancel" onclick="javascript:window.location='../Vue/menu_principal.php';">Retour au menu principal</button>	
</body>
</html>
