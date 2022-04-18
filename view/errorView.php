<?php $title = "Erreur";

ob_start(); ?>

<h1>OUPS !!!</h1>
<p><?= $error ?></p>

<?php $page = ob_get_clean();

require('template.php'); ?>