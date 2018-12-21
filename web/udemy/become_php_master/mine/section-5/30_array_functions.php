<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Array Functions</title>
</head>

<body>

  <?php
  
  $list = [34, 45, 48, 5, 4, 85, 7, 540, 45.56];
  
  echo max($list);
  
  echo "<br>";
  
  echo min($list);
  
  echo "<br>";
  
  sort($list);  
  echo print_r($list);
  
  ?>

</body>

</html>
