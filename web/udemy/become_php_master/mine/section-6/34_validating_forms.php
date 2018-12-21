<?php

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if (strlen($username) < 5) {
    echo '<p>username not long enough.</p>';
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Validating Forms</title>

  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-align: center;
    }
    
    body {
      margin-top: 50px;
      max-width: 980px;
      margin-right: auto;
      margin-left: auto;
    }
    
    p {
      background-color: red;
      color: #fff;
    }
    
    input {
      margin: 10px auto;
      display: block;
      border-radius: 5px;
    }
    
    input[type=text],
    input[type=password] {
      padding: 5px;
    }
    
    input[type=submit] {
      padding: 10px 20px;
      background-color: red;
      color: #fff;
      border: none;      
    }
  
  </style>

</head>

<body>

  <form action="34_validating_forms.php" method="post">

    <input type="text" name="username" placeholder="enter name">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit">

  </form>


</body>

</html>
