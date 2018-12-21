<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php  

/*  Step1: Make a form that submits one value to POST super global


 */


if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if (strlen($username) < 5) {
    echo '<p>username not long enough.</p>';
  } else {
    echo '<p>Welcome</p>';
  }
}

  
  

	
?>

    <form action="6.php" method="post">

      <input type="text" name="username" placeholder="enter name">
      <input type="password" name="password" placeholder="password">
      <input type="submit" name="submit">

    </form>




  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php" ?>
