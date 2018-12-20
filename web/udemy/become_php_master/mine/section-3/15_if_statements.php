<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>If Statements</title>
</head>

<body>

  <?php
  
  $isHere = false;
  $name = "Sahvith";
  $isThere = false;
  
  // check to see if isHere is true/false
  if ($isHere) {
    echo $name . " is here.";
  } elseif ($isThere) {
    echo $name . " is not there.";
  } else {
    echo $name . " is no where.";
  }
  
  ?>

</body>

</html>
