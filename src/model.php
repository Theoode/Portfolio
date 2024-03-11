<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*if ($connexion){
        echo"conexion réussie";
    }*/
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    exit();
}


