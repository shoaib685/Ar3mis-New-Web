<?php
include '../db.php';
$username = 'abcd';

$sql = "SELECT username FROM login WHERE username='$username'";

$query = mysqli_query($conn, $sql);

  if (mysqli_num_rows($query) != 0)
  {
      echo "Username already exists";
  }

  else
  {
    echo 'no useralready exist';
  }

?>