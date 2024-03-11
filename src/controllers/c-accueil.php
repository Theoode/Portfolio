<?php

require_once('src/model.php');

function accueil()
{
    $menu['page'] = 'accueil';

    global $connexion; // Utilisation de la connexion PDO existante

    try {
        // Récupérer les projets
        $queryProjets = "SELECT * FROM projet";
        $stmtProjets = $connexion->prepare($queryProjets);
        $stmtProjets->execute();
        $projets = $stmtProjets->fetchAll(PDO::FETCH_ASSOC);

        // Récupérer la présentation
        $queryPres = "SELECT * FROM presentation";
        $stmtPres = $connexion->prepare($queryPres);
        $stmtPres->execute();
        $pres = $stmtPres->fetchAll(PDO::FETCH_ASSOC);

        // Inclure le fichier de vue
        require('view/v-accueil.php');
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

?>





