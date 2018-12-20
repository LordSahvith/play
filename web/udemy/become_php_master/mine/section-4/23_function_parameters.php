<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Function Parameters</title>
</head>

<body>

  <?php
  
  $sith = 2;
  $areSithTwo = ($sith === 2) ? true : false;
  $jedi = 30;
  
  function whoWins($sithNumber, $jediNumber, $doSithNumberTwo) {
  
    if ($doSithNumberTwo) {
      outcome($sithNumber, $jediNumber);
    } else {
      outcome($sithNumber, $jediNumber);
    }
    
  }
  
  function outcome($sithNumber, $jediNumber) {
    while($jediNumber > 0) {
      echo "Jedi down. ";
      echo $jediNumber . " left. battle commences...";
          echo "<br>";
      $jediNumber--;
      
      switch($jediNumber) {
        case 20:
          $sithNumber--;
          echo "<br>";
          echo "sith down.";
          echo "<br>";
          echo "<br>";
          break;
        case 10:
          $sithNumber++;
          echo "<br>";
          echo "another rises.";
          echo "<br>";
          echo "<br>";
          break;
        case 5:
          $sithNumber--;
          echo "<br>";
          echo "sith down.";
          echo "<br>";
          echo "<br>";
          break;
        case 0:
          $sithNumber++;
          echo "<br>";
          echo "another rises. Sith will never die.";
          echo "<br>";
          break;          
      }
    }
    
    echo "Sith always win.";
  }
  
  whoWins($sith, $jedi, $areSithTwo);
  
  ?>

</body>

</html>
