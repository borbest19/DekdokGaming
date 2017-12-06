<?php
  if (isset($_POST['submit'])) {
    sestion_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php")
    exit();
  }
?>
