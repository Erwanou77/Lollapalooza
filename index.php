<?php
/*

    Comment fonctionne le MVC ?
    Tout simplement ici nous sommes dans le routeur c'est lui qui génère toute nos routes afin d'afficher la bonne page.
    Il permet de réorienté les utilisateurs.
    Le routeur va appeler le controleur qui ce controleur va lui faire la liaison entre le modele et la vue.

*/

require("controller/controller.php");

try {
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'experience-realite-virtuel':
                experienceVR();
                break;
            case 'contact':
                contact();
                break;
            case 'connexion':
                login();
                break;
            case 'inscription':
                register();
                break;
            case 'billet':
                ticketing();
                break;
            case 'info-pratique':
                practicalInfo();
                break;
            case 'partenaires':
                partner();
                break;
            default:
                throw new Exception("Cette page n'existe pas ou a été supprimée.");
                break;
        }
    } else {
        home();
    }
} catch (Exception $e) {
    // die("Erreur : " . $e->getMessage());
    $error = $e->getMessage();
    require("view/errorView.php");
}
