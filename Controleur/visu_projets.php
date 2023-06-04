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
<title>Mes projets</title>
<link href="../Vue/css/style_backoffice.css" type="text/css" rel="stylesheet">
</head>

<body>
      <b><?php echo $utilisateur ?></b><br/>
       <a href="../Vue/deconnexion.php">Se déconnecter</a> <hr>
<H1>Visualiser la liste des projets :</H1>
	
<button type="cancel" onclick="javascript:window.location='../Vue/menu_principal.php';">Retour au menu principal</button>
<br/>
<br/>
	<?php
	require('controleur.php');
    $data=get_projets();
    foreach ($data as $projet) { ?>
        <li>
            <?php if($projet['nom']=='Kedge'){
                echo "<iframe width='640' height='360' src=".$projet['lien']." title='YouTube video player'
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                allowfullscreen></iframe>";
            }
            else {?>
                <img src="<?=$projet['lien']?>" width="300px" height="300px"/>
                <?php if($projet['nom']!='Description'){ ?>
                    <h3><?=$projet['description']?></h3>
                <?php }; ?>
            <?php } ?>
        </li>
    <?php } ?>
</body>
</html>
