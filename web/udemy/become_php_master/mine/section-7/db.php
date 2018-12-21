<?php


  $connectDB = mysqli_connect('localhost', 'root', 'root', 'php_master_db_intro');
  
  if (!$connectDB) {
    die("DB failed" . mysqli_error($connectDB));
  }

?>
