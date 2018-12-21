<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>String Functions</title>
</head>

<body>


  <?php
  
  $string = "Only Sith deal in absolute.";
  $string2 = "<h2>Only Sith deal in absolute.</h2>";
  
  echo strlen($string);
  
  echo "<br>";
  
  echo strtoupper($string);
  
  echo "<br>";
  
  echo strtolower($string);
  
  echo $string2;
  
  echo "<br>";
  
  echo strip_tags($string2);
  
  echo "<br>";
  
  echo $string2;
  
  echo "<br>";
  
  echo strrev($string2);
  
  echo "<br>";
  
  echo strrev(strip_tags($string2));
  
  ?>


</body>

</html>
