<?php

require_once('src/model.php');

function accueil()
{
    $menu['page'] = 'accueil';

    global $connexion; // Utilisation de la connexion PDO existante

    try {
        // Préparer et exécuter la requête
        $query = "SELECT * FROM projet";
        $stmt = $connexion->prepare($query);
        $stmt->execute();
        $projets = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Inclure le fichier de vue
        require('view/v-accueil.php');
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}



