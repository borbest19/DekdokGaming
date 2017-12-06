<?php

if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn,$_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //error handlers
  //check empty fields
  if (empty($first) ||  empty($last) ||  empty($email)  ||  empty($uid) || empty($pwd)) {
    header("Location: ../register.php?register=empty");
    exit();
  }else {//check valid Name
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header("Location: ../register.php?register=invalid");
      exit();
    }else {//check valid email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?register=email");
        exit();
      }else {//uid check
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../register.php?register=usertaken");
          exit();
        }else {//password check
          //hashing password
          $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
          //insert user to database
          $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedpwd');";
          mysqli_query($conn, $sql);
          header("Location: ../register.php?register=success");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../register.php?register=nope");
  exit();
}
