<?php
ob_start();
?>

<main>
    <h1>ART WORK</h1>
</main>
<?php
$content = ob_get_clean();
require '../templates/base.php';
?>