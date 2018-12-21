<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */
  function calc($number1, $number2) {
    return ($number1 * 4) * ($number2 / 2.3);
  }
    
    function printToScreen($name1, $name2) {
      echo $name1 . " will rull the galaxy over the " . $name2;
    }
  
  echo calc(45, 78);

    echo "<br>";
    
    $sith = "sith";
    $jedi = "jedi";
    
    printToScreen($sith, $jedi);
	
?>





  </article>
  <!--MAIN CONTENT-->


  <?php include "includes/footer.php" ?>
