<?php
   session_start();
   session_destroy();  //destruction de la session
   header("location:../Vue/index.php"); //retour à la page index.html
?> 