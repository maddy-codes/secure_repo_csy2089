<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
    require_once '../functions/functions.php';
    require '../templates/login.html.php';
?>