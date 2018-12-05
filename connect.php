<?php

// connect with the database
$link = mysqli_connect("localhost","root","","taskorganizer");

if (mysqli_connect_errno()) {
  print_r(mysqli_connect_error());
  exit();
}

?>
