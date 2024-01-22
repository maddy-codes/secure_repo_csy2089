<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
    $_SESSION['logged'] = FALSE;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="electronics.css"/>
  <title>Admin Log In!</title>
</head> 
<body>
  <?php
  require_once '../templates/functions.php';
  if  (isset($_POST['submit'])){
    $arguments = ["username"=>sha1($_POST['username']), 
    "password"=>sha1($_POST['username'].$_POST['password']),
    "is_admin"=>"N"];
    
    $pdo = get_pdo('sys','mysql','student','student');

    $response = authenticator($pdo,'sys.logins',sha1($_POST['username']),sha1($_POST['username'].$_POST['password']));
    #################
    echo '<H1>I AM IN!!</H1>';
    echo sha1('j.arora@phm-accountants.co.uk');
    echo 'THE PASSWORD : ' . sha1('j.arora@phm-accountants.co.ukjatin123') . ' ------------';
    echo '\n';
    echo sha1($_POST['username'].$_POST['password']);
    echo $response;
    
    if ($response == 1){
      $pdo = get_pdo('sys','mysql','student','student');
      $results = get_conditional($pdo,'admins','email',$_POST['username']);
      #echo $results;
      foreach($results as $result){
        $_SESSION['logged'] = TRUE;
        $_SESSION['admin_id'] = $result['admin_id'];
        $_SESSION['admin_name']  = $result['admin_name'];
        $_SESSION['admin_email'] = $result['email'];
        #echo load_template('../templates/layout.php',['output' => 'index.php']);
        echo 'HELLO';
        echo load_template('index.php',[]);
        unset($_POST['submit']);

      } 
      
    } else {
      $_SESSION['logged'] = FALSE;
      echo '<p> <H1> SORRY WRONG LOGINS :( </H1> </p>';
      unset($_POST['submit']);
    }

  }else {
?>
    <h1>Admin Login</H1>
    <form action="adminlogin.php" method="post">
        <label>USERNAME</label> <input type="text" name="username" />
        <label>PASSWORD</label> <input type="text" name="password" />
        <input type="submit" name="submit" value="submit" />
    </form>';

  <?php } ?>
        
</body>
</html>
