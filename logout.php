<?php
  include "database.php";
  session_start();
  $_SESSION = array();
  //clear session from disk
  session_destroy();

  echo "<html><body>";
  echo "<h1>Successfully logged out</h1>";
  echo "</body></html>";
  exit;

?>