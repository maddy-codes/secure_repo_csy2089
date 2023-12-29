<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
    require_once '../templates/functions.php';
    require '../templates/login.html.php';
?>