<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Associative Arrays</title>
</head>

<body>

  <?php
  
  $names = ["firstName" => "Lord", "lastName" => "Sahvith"];
  $fullName = $names["firstName"] . " " . $names["lastName"];
  
  echo $names["firstName"] . " " . $names["lastName"];
  echo "<br>";
  echo $fullName;
  
  ?>

</body>

</html>
