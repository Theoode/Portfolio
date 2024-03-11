<?php
require_once ('src/controllers/c-accueil.php');

if(isset($_GET['url']) && $_GET['url']) {
    $url = rtrim($_GET['url'], '/');
    if ($url) {
        switch ($url) {

            case 'accueil';
                accueil();
                break;
            default :
                accueil();
                break;
        }
    } else accueil();
}else accueil();