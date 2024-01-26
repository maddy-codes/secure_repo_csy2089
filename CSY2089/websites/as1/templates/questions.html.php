<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require_once '../functions/functions.php';


    $pdo = get_pdo('sys','mysql','student','student');

    if(isset($_SESSION['cust_id'])){
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
    } else if(isset($_SESSION['admin_id'])){
        $query = $_SERVER['QUERY_STRING'];
        $variables = query_resolver($query);
        if (isset($variables['global'])){
            if($variables['global']=True){ 
        $results = getall($pdo,'questions');
    
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
        } elseif($variables['global']="NO"){ 
            $results = get_conditional($pdo,'questions','admin_id',$_SESSION['admin_id']);
        
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
            }      
        } else if($variables['filtered']==True){
            $results = get_conditional($pdo,'questions','is_answered','N');
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
      }
    }
    ?>
</ul>
