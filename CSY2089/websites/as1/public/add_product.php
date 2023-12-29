<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';
//References
//https://stackoverflow.com/questions/40343671/how-to-upload-picture-into-a-database-with-a-html-form-which-have-a-type-file
load_template(
    '../templates/layout.php',
['outputs' => load_template(
    '../templates/add_product.html.php',
    []
)])
?>