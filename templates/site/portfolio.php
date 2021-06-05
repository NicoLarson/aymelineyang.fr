<?php
ob_start();
?>
<h1>PORTFOLIO</h1>

<?php
$content = ob_get_clean();
require '../templates/base.php';
?>