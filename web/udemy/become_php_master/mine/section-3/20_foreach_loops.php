<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Foreach Loops</title>
</head>

<body>

  <?php
  
  $array = ["this sentence ", "is a arra", "y and p", "ut togther", " with a foreach loop."];
  print_r($array);
  echo "<br><br>";
  
  foreach($array as $value) {
    echo $value;
  }
  
  
  ?>

</body>

</html>
