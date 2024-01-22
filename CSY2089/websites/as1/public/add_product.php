<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';

if(isset($_POST['add_prod_submit'])){

    $pdo = get_pdo('sys','mysql','student','student');
    insert_row($pdo,'products',
    [
        'prod_name' => $_POST['prod_name'],
        'prod_description' => $_POST['prod_description'],
        'manufacturer' => $_POST['manufacturer'],
        'price' => $_POST['price'],
        'image_name' => $_FILES['image']['name'],
        'catg_id' => $_POST['category'],
        //REFERENCE https://www.sitepoint.com/php-get-current-date/
        'date_added' => date('Y-m-d')
    ]);
    //REFERENCE https://stackoverflow.com/questions/58266377/uploading-images-into-a-specific-folder-php
    #echo $_SERVER['DOCUMENT_ROOT'];
    
    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. "/images/". $_FILES['image']['name']);
    #var_dump($_FILES['image']);

    echo load_template( 
        '../templates/layout.php',
        ['output' => '<H1>PRODUCT SUBMITTED!!</H1>']
    );

} else {
//References
//https://stackoverflow.com/questions/40343671/how-to-upload-picture-into-a-database-with-a-html-form-which-have-a-type-file
echo load_template( 
    '../templates/layout.php', 
    [
        'output' => load_template( '../templates/add_produt.html.php',  
        [] )

    ]);
}
?>