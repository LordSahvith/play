<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
  
  $sith = true;
  $jedi = 2;
  
  if ($sith) {
    echo "sith are better.";
  } else if ($jedi < 3) {
    echo "jedi are outnumbered.";
  } else {
    echo "sith win with php.";
  }
  
  echo "<br>";
  
  
  for ($bounty = 0; $bounty <= 10; $bounty++) {
    echo $bounty . " bounty partially paid.<br>";
  }  
  
  echo "bounty paid.<br>";
  
    $batman = "batman";
  
  switch($batman) {
    case "batman":
      echo "batman duh.";
      break;
    case "catwoman":
        echo "catwoman.";
      break;
    case "superaman":
      echo "who?";
      break;
    default:
      echo "5 cases.";
  }

	
?>






  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php" ?>
