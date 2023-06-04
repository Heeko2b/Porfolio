<?php

$pdo = require ('../modele/connexion.php');

function get_image($nom){
    global $pdo;
    $sql = "SELECT lien FROM projets WHERE nom='$nom'";
              $req = $pdo->query($sql);
              $data = $req->fetch(PDO::FETCH_ASSOC);
              echo "<img src=".$data['lien']." />";
}

function get_description($nom){
    global $pdo;
    $sql = "SELECT description FROM projets WHERE nom='$nom'";
              $req = $pdo->query($sql);
              $data = $req->fetch(PDO::FETCH_ASSOC);
              echo $data['description'];
}
function get_cv($nom){
    global $pdo;
    $sql = "SELECT lien FROM projets WHERE nom='$nom'";
              $req = $pdo->query($sql);
              $data = $req->fetch(PDO::FETCH_ASSOC);
              echo $data['lien'];
}
?>