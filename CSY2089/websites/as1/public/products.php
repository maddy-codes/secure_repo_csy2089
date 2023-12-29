<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';

//source for nect 2 lines of code : - https://www.tutorialspoint.com/how-to-get-parameters-from-a-url-string-in-php#:~:text=%3C%3F-,php%20%24url%20%3D%20'http%3A%2F%2Fwww.example.com,%5B'name'%5D%3B%20%3F%3E

$query = $_SERVER['QUERY_STRING'];

$lol = query_resolver($query);
var_dump($lol); 
echo load_template('../templates/layout.php',['output' => load_template('../templates/products.html.php',$lol)]);
?>