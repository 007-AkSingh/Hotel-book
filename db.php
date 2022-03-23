<?php
$mysqli = new mysqli("remotemysql.com","o9E2yHQ2F6","UbldgHQyys","o9E2yHQ2F6");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
  echo "Yep! Database Connected.";
?>
