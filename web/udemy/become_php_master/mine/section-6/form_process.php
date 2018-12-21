<?php

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if (strlen($username) < 5) {
    echo '<p>username not long enough.</p>';
  } else {
    echo '<p>Welcome</p>';
  }
}

?>
