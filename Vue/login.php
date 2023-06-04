<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include("../Modele/connexion.php");
      $sel=$pdo->prepare("SELECT * FROM admin WHERE identifiant=? and mdp=? limit 1");
      $sel->execute(array($login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["fullname"]=$tab[0]['fullname'];
         $_SESSION["autoriser"]="oui";
         header("location:menu_principal.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <link href="../Vue/css/style_backoffice.css" rel="stylesheet" />
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
		 H1 {color:#302e4d;}
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
         a{
            font-size:12pt;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
      <h1>Authentification </h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input type="text" name="login" placeholder="Login" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br /> 
		 <input type="submit" name="valider" value="S'authentifier" /><br />
       <button type="button" onclick="javascript:window.location='index.php';">Retour au portfolio</button>	
      </form>
   </body>
</html> 