<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require_once '../functions/functions.php';
    require '../templates/admin_login.html.php';
  #var_dump($_SESSION);
?>