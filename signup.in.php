<?php

session_start();
header("Location: index.php");

if (isset($_POST['reg-button'])) {

  include_once 'conn.in.php';

  $vorname = $_POST['vorname'];
  $nachname = $_POST['nachname'];
  $benutzername = $_POST['benutzername'];
  $passwort = $_POST['passwort'];

  //Error handler

  if (empty($vorname) || empty($nachname) || empty($benutzername) || empty($passwort)) {
    header("Location: signup.php?signup=empty");
    exit();
  } else {
    $muster = "/^[a-zA-Z]*$/";
    if (!preg_match($muster, $vorname) || !preg_match($muster ,$nachname)) {
      header("Location: signup.php?signup=nameerror");
      exit();
    } else {
        $sql = "SELECT * FROM user WHERE user_id='$benutzername'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: signup.php?signup=usertaken");
          exit();
        } else {
          $hashPasswort = password_hash($passwort, PASSWORD_DEFAULT);

          $sql = "INSERT INTO user (vorname, nachname, user_id, password) VALUES ('$vorname', '$nachname', '$benutzername', '$hashPasswort');";

          mysqli_query($conn, $sql);

          header("Location: login.php");
        }
      }
    }

} else {
  header("Location: signup.php");
  exit();
}
