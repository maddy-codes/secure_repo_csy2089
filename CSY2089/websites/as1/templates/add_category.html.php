<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';

?>

<form action="add_category.php" method="post">

        <H1>ADD A CATEGORY !!</H1>
        
        <label>Category Name</label> <input type="text" name="catg" />
        
        <input type="submit" name="add_catg_submit" value="submit" />
</form>
