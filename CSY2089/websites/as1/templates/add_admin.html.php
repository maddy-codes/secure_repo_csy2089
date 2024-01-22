<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../templates/functions.php';

?>

<form action="add_admin.php" method="post">

        <H1>ADD AN ADMIN !!</H1>
        
        <label>Admin Name</label> <input type="text" name="admin_name" />
        <label>Admin Contact</label> <input type="text" name="admin_contact" />
        <label>Admin email</label> <input type="text" name="admin_email" />
        <input type="submit" name="add_admin_submit" value="submit" />
</form>
