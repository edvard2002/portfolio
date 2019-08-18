<?php
 session_start();
  header("Location: login.php");

  echo "Выход из системы успешен";
  session_destroy();   // function that Destroys Session
?>
