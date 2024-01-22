<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';


if(isset($_POST['add_admin_submit'])){

    $pdo = get_pdo('sys','mysql','student','student');
    insert_row($pdo,'admins', 
        [
            "admin_name" => $_POST['admin_name'],
            "contact" => $_POST['admin_contact'],
            "email" => $_POST['admin_email']
        ]
    );
    echo load_template( 
        '../templates/layout.php',
        ['output' => '<H1>ADMIN ADDED!!</H1>']
    );   
} else{

    echo load_template( 
        '../templates/layout.php', 
        [
            'output' => load_template( '../templates/add_admin.html.php',  
            [] )

        ]);
    }
    ?>