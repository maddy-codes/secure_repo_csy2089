<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../functions/functions.php';

?>
<form action="add_product.php" method="post" enctype="multipart/form-data">

        <H1>ADD A PRODUCT !!</H1>

        <label>Product Name</label> <input type="text" name="prod_name" />
        <label>Product Description</label> <textarea name="prod_description"></textarea>
        <label>Manufacturer</label> <input type="text" name="manufacturer" />
        <label>Price</label> <input type="text" name="price" />
        <label>Image</label> <input type="file" name="image" id="image"/>

        <label>Category</label> 
        
        <select name="category">
            
            <?php
                $pdo = get_pdo('sys','mysql','student','student');
                $categories = getall($pdo, 'categories');
                #var_dump($categories);
                foreach($categories as $category){   
            ?>

                <option value="<?=$category['catg_id']?>"> <?=$category['catg_name']?> </option>

            <?php
                };
            ?>
        </select>
        
        <input type="submit" name="add_prod_submit" value="submit" />
</form>
