<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Global Variables &amp; Scope</title>
</head>

<body>

  <?php
  
  $power = "Absolute"; // global
  
  function powerStripped() {
    global $power; // makes global
    $power = "Disolved"; // local
  }
  
  echo $power;
  echo "<br>";
  powerStripped();
  echo $power;
  
  ?>


</body>

</html>
