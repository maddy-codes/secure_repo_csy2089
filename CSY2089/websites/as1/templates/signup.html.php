<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require '../templates/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="electronics.css" />
  <title>Sign Up!</title>
</head>
<body>
  <?php
  
  if  (isset($_POST['submit2'])){
    #Inserting customer details
    try {
      $pdo = get_pdo('sys','mysql','student','student');
      insert_row($pdo,"customers",["first_name" => $_POST['first_name'], "last_name" => $_POST['last_name'], "email" => $_POST['email'], "contact" => $_POST['contact']]);
    }
    //catch exception
    catch(Exception $e) {
      echo $e;
      echo 'ERROR SIGNING UP, USER ALREADY EXISTS';
    }

    #Getting Customer ID
    $results = get_conditional($pdo,'customers','email', $_POST['email']);

    $cust_id = 0;
    foreach($results as $result){
      $cust_id = (int)$result['cust_id'];
    }

    #Inserting login_details details
    $arguments = ["cust_id"=>$cust_id,
                "username"=>sha1($_POST['email']), 
                "password"=>sha1($_POST['email'].$_POST['password']),
                "is_admin"=>"N"];
  
    insert_row($pdo,'logins',$arguments);
    ?>
   <H1> <a href="https://as1.v.je/login.php">PLEASE CLICK HERE TO GO BACK TO LOGIN<-</a></H1>
    <?php

  }else {
    ?>
    <h2>SIGN UP</h2>
    <form action="" method="post">
        <label>FIRST NAME</label> <input type="text" name="first_name" />
        <label>LASTENAME</label> <input type="text" name="last_name" />
        <label>CONTACT</label> <input type="text" name="contact" />
        <label>EMAIL</label> <input type="text" name="email" />
        <label>PASSWORD</label> <input type="text" name="password" />
        <label><a href="https://as1.v.je/login.php">LOGIN HERE!!</label>
        <input type="submit" name="submit2" value="submit" />
    </form>

<?php
  }

  ?>
        
</body>
</html>
