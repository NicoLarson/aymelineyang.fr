<?php
ob_start();
?>
        <h1>SERVICES</h1>

<?php
$content = ob_get_clean();
require '../templates/base.php';
?>