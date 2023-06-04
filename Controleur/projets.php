<?php

$pdo = require ('../modele/connexion.php');

function get_projet($id)
{
    global $pdo;
    $sql = "SELECT * FROM projets WHERE id='$id'";
    $req = $pdo->query($sql);
    $data = $req->fetch(PDO::FETCH_ASSOC);
    echo "<img src=".$data['lien']." alt=".$data['nom']."/>";
}

function get_projets()
{
    global $pdo;
    $sql = "SELECT * FROM projets";
    $req = $pdo->query($sql);
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function get_titre($id){
    global $pdo;
    $sql = "SELECT description FROM projets WHERE id='$id'";
    $req = $pdo->query($sql);
    $data = $req->fetch(PDO::FETCH_ASSOC);
    echo"<p style='color:white;'>".$data['description']."</p>";
}

function get_media($nom){
    global $pdo;
    $sql = "SELECT lien FROM projets WHERE nom='$nom'";
    $req = $pdo->query($sql);
    $data = $req->fetch(PDO::FETCH_ASSOC);
    echo "<iframe width='640' height='360' src=".$data['lien']." title='YouTube video player'
    allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
    allowfullscreen></iframe>";
}

?>