<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
    require_once '../functions/functions.php';
                                                                                  
    #var_dump($_SESSION);

    $page = explode('?', $_SERVER['REQUEST_URI'])[0];

    switch ($page) {
      case '/add_admin.php':
        if(isset($_GET)){
          
          require '../controllers/add_admin.php';

        }elseif(isset($_POST)){
          
          require '../controllers/add_admin.php';

        }else{

          require '../controllers/add_admin.php';

        }
        break;

      case '/add_category.php':
        if(isset($_GET)){
          
          require '../controllers/add_category.php';

        }elseif(isset($_POST)){
          
          require '../controllers/add_category.php';

        }else{

          require '../controllers/add_category.php';

        }
        break;

      case '/add_product.php':
        if(isset($_GET)){
          
          require '../controllers/add_product.php';

        }elseif(isset($_POST)){
          
          require '../controllers/add_product.php';

        }else{

          require '../controllers/add_product.php';

        }
        break;

      case '/adminlogin.php':
        if(isset($_GET)){
          
          require '../controllers/adminlogin.php';

        }elseif(isset($_POST)){
          
          require '../controllers/adminlogin.php';

        }else{

          require '../controllers/adminlogin.php';

        }
        break;

      case '/answer.php':
        if(isset($_GET)){
          
          require '../controllers/answer.php';

        }elseif(isset($_POST)){
          
          require '../controllers/answer.php';

        }else{

          require '../controllers/answer.php';

        }
        break;

      case '/lama.php':
        if(isset($_GET)){
          
          require '../controllers/lama.php';

        }elseif(isset($_POST)){
          
          require '../controllers/lama.php';

        }else{

          require '../controllers/lama.php';

        }
        break;

      case '/login.php':
        if(isset($_GET)){
          
          require '../controllers/login.php';

        }elseif(isset($_POST)){
          
          require '../controllers/login.php';

        }else{

          require '../controllers/login.php';

        }
        break;

      case '/product.php':
        if(isset($_GET)){
        
          require '../controllers/product.php';

        }elseif(isset($_POST)){
          
          require '../controllers/product.php';

        }else{

          require '../controllers/product.php';

        }
        break;

      case '/products.php':
    
        if(isset($_GET)){
          
          require '../controllers/products.php';
        }elseif(isset($_POST)){
          
          require '../controllers/products.php';

        }else{

          require '../controllers/products.php';
        }
        
        break;

      case '/questions.php':
        if(isset($_GET)){
          
          require '../controllers/questions.php';

        }elseif(isset($_POST)){
          
          require '../controllers/questions.php';

        }else{

          require '../controllers/questions.php';
        }
        break;

      case '/signup.php':
        if(isset($_GET)){
          
          require '../controllers/signup.php';

        }elseif(isset($_POST)){
          
          require '../controllers/signup.php';

        }else{

          require '../controllers/signup.php';

        }
        break;

      default:
        echo load_template('../templates/layout.php',['output' => load_template('../templates/main.html.php',[])]);
        break;
    }
    
    
?>