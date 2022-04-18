<?php $title = "Lollapalooza";

ob_start(); ?>

<h1>Test indexView</h1>

<?php $page = ob_get_clean();

require('template.php'); ?>