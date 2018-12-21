<?php include "db.php"; ?>
<?php
  $query = "SELECT * FROM users";
  
  $result = mysqli_query($connectDB, $query);
  
  if (!$result) {
    die("Query failed." . mysqli_error($result));
  }
  

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login App</title>

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

  <form action="46_update_db.php" method="post">

    <input type="text" name="username" placeholder="enter name">
    <input type="password" name="password" placeholder="password">
    <select name="" id="">
      <option value="">ID</option>
    </select>
    <input type="submit" name="submit" value="UPDATE">

  </form>


</body>

</html>
