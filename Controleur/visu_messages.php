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
<title>Boite de réception</title>
<link href="../Vue/css/style_backoffice.css" type="text/css" rel="stylesheet">
</head>

<body>
      <b><?php echo $utilisateur ?></b><br/>
       <a href="../Vue/deconnexion.php">Se déconnecter</a> <hr>
<H1>Visualiser la liste des messages :</H1>
	
<button type="cancel" onclick="javascript:window.location='../Vue/menu_principal.php';">Retour au menu principal</button>
<br/>
<br/>
	<?php
	require('controleur.php');
	get_messages(); ?>
</body>
</html>
