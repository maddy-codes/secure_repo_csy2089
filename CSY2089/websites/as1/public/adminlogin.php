<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require '../templates/functions.php';
  require '../templates/admin_login.html.php';
?>