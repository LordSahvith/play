<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Defining Functions</title>
</head>

<body>

  <?php
  
  function duel() {
    $sith = 4;
    $jedi = 5;
    
    if ($sith < $jedi) {
      outcome();
    }
  }
  
  function outcome() {
    echo "Sith win.";
  }
  
  duel();
  
  
  ?>

</body>

</html>
