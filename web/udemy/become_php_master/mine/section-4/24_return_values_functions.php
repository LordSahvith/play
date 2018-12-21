<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Returning Values From Functions</title>
</head>

<body>

  <?php
  
  function whoWins($person1, $person2) {
    return $person1 . " are superior to " . $person2;
  }
  
  $whoWins = whoWins("sith", "jedi");
  
  echo $whoWins;
  
  ?>

</body>

</html>
