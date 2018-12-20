<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>While Loop</title>
</head>

<body>

  <?php
  
  $sith = 5;
  $jedi = 18;
  
  while($sith < $jedi) {
    echo $sith . " sith remain.<br>";
    echo $jedi . " jedi remain.<br>";
    echo "battling...<br><br>";
    $sith--;
    $jedi -= 6;
  }
    echo $sith . " sith remain.<br>";
    echo $jedi . " jedi remain.<br>";
    echo "battle concluded.<br><br>";
  
  echo "Two there should be. No more. No less."
  
  ?>

</body>

</html>
