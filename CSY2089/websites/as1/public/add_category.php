<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';


if(isset($_POST['add_catg_submit'])){

    $pdo = get_pdo('sys','mysql','student','student');
    insert_row($pdo,'categories', ["catg_name" => $_POST['catg']]);
    echo load_template( 
        '../templates/layout.php',
        ['output' => '<H1>PRODUCT SUBMITTED!!</H1>']
    );   
} else{

echo load_template( 
    '../templates/layout.php', 
    [
        'output' => load_template( '../templates/add_category.html.php',  
        [] )

    ]);
}
?>