<?php
$connection = mysqli_connect("localhost","root","root","streetweb","8889");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>