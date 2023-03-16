<?php
ob_start();
?>

<?php $test ?>

<?php
$content = ob_get_clean();
require_once 'default-admin.php';
?>