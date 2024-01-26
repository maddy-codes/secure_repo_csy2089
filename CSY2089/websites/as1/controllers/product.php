<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../functions/functions.php';

$query = $_SERVER['QUERY_STRING'];
$prod_details = query_resolver($query);
#var_dump($prod_details);
echo load_template('../templates/layout.php',
    ['output' => load_template('../templates/product.html.php',$prod_details)
]);
?>