<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../functions/functions.php';
?>
<ul>
    <?php
    $pdo = get_pdo('sys','mysql','student','student');
    $results = get_conditional($pdo,'products','catg_id',$catg_id);
    foreach($results as $result){
    ?>
    <li><a href='product.php?prod_id=<?=$result['prod_id']?>
    ' >
        <img src= <?= 'images/'. $result['image_name']?>> <br>
            <h2> Name of Product is :- <?= $result['prod_name'];?> </h2>
            <h2> Description of Product is :- <?= $result['prod_description'];?></h2>
            <h2> Manufacturer of Product is :- <?= $result['manufacturer'];?> </h2>
            <h2> Price of Product is :- <?= '£ '. $result['price'];?></h2>
            <hr>
    </a>
    </li>
    <?php
    }
    ?>    
</ul>