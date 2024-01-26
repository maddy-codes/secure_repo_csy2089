<h1>Welcome to Ed's Electronics</h1>

    <p>We stock a large variety of electrical goods including phones, tvs, computers and games. Everything comes with at least a one year guarantee and free next day delivery.</p>

<hr>

<?php 
require_once '../functions/functions.php';
$pdo=get_pdo('sys','mysql','student','student');
?>

<ul>
    <h1> These are our top 10 Items  </h1><hr> 
    <?php 
        $results = get_top_latest($pdo,'products','date_added','DESC',10);

        foreach ($results as $result){
    ?>        
       
        <li>  
        <img src= <?= 'images/'. $result['image_name']?>> <br>
            <h2> Name of Product is :- <?= $result['prod_name'];?> </h2>
            <h2> Description of Product is :- <?= $result['prod_description'];?></h2>
            <h2> Manufacturer of Product is :- <?= $result['manufacturer'];?></h2>
            <h2> Price of Product is :- <?= '£ '. $result['price'];?></h2>
            
            <hr>
        </li>
            
    
    <?php } ?>
    