<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
    require_once '../functions/functions.php';
                                                                                  
    #var_dump($_SESSION);

    $page = trim(trim($_SERVER['REQUEST_URI'], "/"), '.php') ;
    
    switch ($page) {
      case 'add_admin':
        require '../controllers/add_admin.php';
        break;

      case 'add_category':
        require '../controllers/add_category.php';
        break;

      case 'add_product':
        require '../controllers/add_product.php';
        break;

      case 'adminlogin':
        require '../controllers/adminlogin.php';
        break;

      case 'answer':
        require '../controllers/answer.php';
        break;

      case 'lama':
        require '../controllers/lama.php';
        break;

      case 'login':
        require '../controllers/login.php';
        break;

      case 'poduct':
        require '../controllers/product.php';
        break;

      case 'products':
        require '../controllers/products.php';
        break;

      case 'questions':
        require '../controllers/questions.php';
        break;

      case 'signup':
        require '../controllers/signup.php';
        break;

      default:
        echo load_template('../templates/layout.php',['output' => load_template('../templates/main.html.php',[])]);
        break;
    }
    
    var_dump($page);
?>