<?php

session_start();

if (isset($_POST['submit'])) {

  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_post['uid']);
  $pwd = mysqli_real_escape_string($conn, $_post['pwd']);
  //error handlers
  //empty check
  if(empty($uid) || empty($pwd)){
    header("Location: ../index.php?Login=empty");
    exit();
}else {
  $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email = '$uid'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck < 1) {
    header("Location: ../index.php?Login=e1");
    exit();
  }else {
    if ($row = mysqli_fetch_assoc($result)) {
      //de-hashing password
      $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
      if ($hashedPwdCheck == false) {
        header("Location: ../index.php?Login=e2");
        exit();
      }elseif ($hashedPwdCheck == true) {
        //Log in user
        $SESSION['u_id'] = $row['user_id'];
        $SESSION['u_first'] = $row['user_first'];
        $SESSION['u_last'] = $row['user_last'];
        $SESSION['u_email'] = $row['user_email'];
        $SESSION['u_uid'] = $row['user_uid'];
        header("Location: ../index.php?Login=success");
        exit();
      }
    }
  }
}
}else {
  header("Location: ../index.php?Login=error");
  exit();
}
