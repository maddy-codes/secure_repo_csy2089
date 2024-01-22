<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
    require_once '../templates/functions.php';

    if ( isset($_SESSION['logged'])){
        if ($_SESSION['logged'] == TRUE){
            #var_dump($_SESSION);
            echo load_template('../templates/layout.php',['output' => load_template('../templates/main.html.php',[])]);
        }
        else{
            echo load_template('login.php',[]);
        }
        
    } else {
        echo load_template('login.php',[]);
    }
    
?>