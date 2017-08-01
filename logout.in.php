<?php

if (isset($_POST['abmelden'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: login.php?logout=success");
  exit();
}
