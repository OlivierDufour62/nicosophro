<?php
ob_start();
?>

    <h1>Bienvenue $name</h1>

<?php
$content = ob_get_clean();
require_once 'default-admin.php';
?>