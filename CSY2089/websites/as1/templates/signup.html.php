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
    $arguments = ["username"=>sha1($_POST['username']), 
                "password"=>sha1($_POST['username'].$_POST['password']),
                "is_admin"=>"N"];
  
    $pdo = get_pdo('sys','mysql','student','student');
    insert_row($pdo,'logins',$arguments);
    echo '<H1> <a href="https://as1.v.je/login.php">PLEASE CLICK HERE TO GO BACK TO LOGIN<-</a></H1>';

  }else {

    echo  '<h2>SIGN UP</h2>
    <form action="" method="post">
        <label>USERNAME</label> <input type="text" name="username" />
        <label>PASSWORD</label> <input type="text" name="password" />
        <label><a href="https://as1.v.je/login.php">LOGIN HERE!!</label>
        <input type="submit" name="submit2" value="submit" />
    </form>';

  }

  ?>
        
</body>
</html>
