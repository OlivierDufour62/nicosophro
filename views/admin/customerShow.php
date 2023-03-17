<?php
ob_start();
?>


<?php
$titre = 'Client';
$content = ob_get_clean();
require_once 'default-admin.php';
?>