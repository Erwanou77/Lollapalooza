<?php $title = "Lollapalooza";

ob_start(); ?>

<h1>Cette page sera la page de Connexion lorsque l'on clique sur se connecter</h1>

<?php $page = ob_get_clean();

require('template.php'); ?>