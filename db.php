<?php
$mysqli = new mysqli("remotemysql.com","0IE4WTlfrT","GkM9WMhnIA","0IE4WTlfrT");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Connected";
}
?>
