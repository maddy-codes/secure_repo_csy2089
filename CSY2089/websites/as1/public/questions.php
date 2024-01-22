<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require_once '../templates/functions.php';

  echo load_template('../templates/layout.php',['output' => load_template('questions.html.php',[])])
?>
