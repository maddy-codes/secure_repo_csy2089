<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
    require_once '../templates/functions.php';

    if ( isset($_SESSION['logged'])){
        #var_dump($_SESSION);
        
        echo load_template('../templates/layout.php',['output' => load_template('../templates/main.html.php',[])]);
    } else {
        require 'login.php';
    }
    
?>