<?php

session_start();

if (isset($_POST['login-button'])) {

  include_once 'conn.in.php';

  $benutzername = $_POST['benutzername'];
  $passwort = $_POST['passwort'];

  if (empty($benutzername) || empty($passwort)) {
    header("Location: login.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM user WHERE user_id='$benutzername'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if (!$resultCheck) {
      header("Location: login.php?login=error");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        $hashPasswordCheck = password_verify($passwort, $row['password']);

        if ($hashPasswordCheck == false) {
          header("Location: login.php?login=error");
          exit();
        } elseif ($hashPasswordCheck == true) {

          $_SESSION['u_id'] = $row['id'];
          $_SESSION['u_vorname'] = $row['vorname'];
          $_SESSION['u_nachname'] = $row['nachname'];
          $_SESSION['u_benutzername'] = $row['user_id'];

          header("Location: login.php?login=success");
          exit();
        }
      }
    }
  }
} else {
  header("Location: login.php?login=error");
  exit();
}
