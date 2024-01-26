<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
    $_SESSION['logged'] = FALSE;
    }
    require_once '../functions/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="electronics.css"/>
  <title>Log In!</title>
</head> 
<body>
  <?php
  if  (isset($_POST['submit'])){
    $arguments = ["username"=>sha1($_POST['username']), 
    "password"=>sha1($_POST['username'].$_POST['password']),
    "is_admin"=>"N"];
    
    $pdo = get_pdo('sys','mysql','student','student');

    $response = authenticator($pdo,'sys.logins',sha1($_POST['username']),sha1($_POST['username'].$_POST['password']));
 
    if ($response == 1){
      $pdo = get_pdo('sys','mysql','student','student');
      $results = get_conditional($pdo,'customers','email',$_POST['username']);
      foreach($results as $result){
        $_SESSION['logged'] = TRUE;
        $_SESSION['cust_id'] = $result['cust_id'];
        $_SESSION['cust_name']  = $result['first_name'];
        $_SESSION['cust_email'] = $result['email'];
        unset($_POST['submit']);
        echo load_template('index.php',[]);
      }
      
    } else {
      $_SESSION['logged'] = FALSE;
      echo '<p> <H1> SORRY WRONG LOGINS :( </H1> </p>';
      unset($_POST['submit']);
    }

  }else {
?>
    <h2>LOGIN</h2>
    <form action="" method="post">
        <label>USERNAME</label> <input type="text" name="username" />
        <label>PASSWORD</label> <input type="text" name="password" />
        <label><a href="https://as1.v.je/signup.php">SIGNUP HERE!!</label>
        <label><a href="https://as1.v.je/adminlogin.php">ADMIN LOGIN HERE!!</label>
        <input type="submit" name="submit" value="submit" />
    </form>

  <?php } ?>
        
</body>
</html>
