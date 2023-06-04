<?php

require_once('../Modele/connexion.php');

//Importation des données du formulaire dans un tableau
$values = [
':nom'=>$_POST["nom"],
':email'=>$_POST["email"],
':sujet'=>$_POST["sujet"],
':message'=>$_POST["message"]
];

try {
        //requete SQL pour insérer les données dans la BDD
        $sql = "INSERT INTO formulaire(nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)";

        $statement = $pdo->prepare($sql);

        $statement->execute($values);
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

header("Location:../Vue/index.php");
?>