<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Switch Statements</title>
</head>

<body>

  <?php
  
  $hero = "Darth Revan";
  
  switch($hero) {
    case "Spiderman":
      echo "It's Spiderman";
      break;
    case "Batman":
      echo "It's Batman";
      break;
    case "Darth Bane":
      echo "It's Darth Bane";
      break;
    case "Darth Revan":
      echo "It's Darth Revan";
      break;
    default:
      echo "It's nobody";
      break;
  }
  
  ?>

</body>

</html>
