<?php

if (isset($_POST["submit"])) {
  echo "Here";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Checking Form Submission</title>

  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      margin-top: 50px;
    }
    
    input {
      margin: 10px auto;
      display: block;
      border-radius: 5px;
    }
    
    input[type=text],
    input[type=password] {
      padding: 5px;
      text-align: center;
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

  <form action="32_form_submission.php" method="post">

    <input type="text" placeholder="enter name">
    <input type="password" placeholder="password">
    <input type="submit" name="submit">

  </form>


</body>

</html>
