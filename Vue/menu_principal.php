<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   
      $utilisateur="Utilisateur : ".$_SESSION["fullname"];
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
	  <link href="css/style_backoffice.css" type="text/css" rel="stylesheet">
      </head>
   <body>
      <h2><?php echo $utilisateur ?></h2>
       <a href="deconnexion.php">Se déconnecter</a> 	  
	  
	  <div id="menu">
		<hr><H1>Backoffice du portfolio</H1><hr>

		<br/>
		<hr>
		<H2>Messagerie</H2>
			<a href="../Controleur/visu_messages.php">Visualiser tous les messages</a><br/>
			<form method="POST" action="../Controleur/modifier_message.php">
				Visualiser/Modifier le message n°
				<input type="text" name="id" size="5" value="1" maxlength="10" >
				<input type="submit" value="Ouvrir" name="ouvrir">	
			</form>
			<br/>	
			
		<hr>	
		<H2>Projets</H2>
			<a href="../Controleur/visu_projets.php">Visualiser tous les projets</a><br/>
			<a href="../Controleur/saisie_projet.php">Ajouter un projet</a><br/>
			<form method="POST" action="../Controleur/modifier_projet.php">
				Visualiser/Modifier le projet n°
				<input type="text" name="id" size="5" value="1" maxlength="10" >
				<input type="submit" value="Ouvrir" name="ouvrir">		
			</form>	
			<br/><hr>
		</div>

   </body>
</html> 