<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require_once '../templates/functions.php';


    $pdo = get_pdo('sys','mysql','student','student');
    $results = get_conditional($pdo,'questions','cust_id',$_SESSION['cust_id']);
    
    foreach($results as $result){
        ?>
        <li>
        <a href='product.php?prod_id=<?=$result['prod_id']?>'>
            <h2>Question</h2>
            <?= $result['question'];?>
            <br>
            <h2>Answer</h2>
            <?= $result['answer'];?>
            <hr>
        </a>    
        </li> 

    <?php
    }
    #echo $_SESSION['cust_name'];
    #echo $_SESSION['cust_id '];
    ?>
</ul>
