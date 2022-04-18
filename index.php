<?php require("controller/controller.php");

try {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'experienceVR') {
            experienceVR();
        } elseif ($_GET['page'] == 'contact') {
            contact();
        } else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
        }
    } else {
        home();
    }
} catch (Exception $e) {
    // die("Erreur : " . $e->getMessage());
    $error = $e->getMessage();
    require("view/errorView.php");
}
