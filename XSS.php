<?php require(__DIR__ . '/templates/head.php'); ?>

<?php
  header('X-XSS-Protection:0');
  $success = $username = $password = "";
  
  if ($_GET){   
    $username = $_GET["username"];
    $password = $_GET["password"];   
    
    if (!empty($_GET["username"])){
      $success = "Good to see you again ".$username;
    }
  }
  
  //<?php $_SERVER['PHP_SELF']; ?>



<h1 class="header">XSS Attack</h1>
<form action="" method="get">
  
  <label for="username">Username </label>
        <input type="text" id="username" name="username" value="<?= $username ?>">
        
  <label for="password">Password </label>
        <input type="text" id="password" name="password" value="<?= $password ?>">

  <button name="submit" type="submit" id="contactSubmit">Submit</button> 
  
  <div class="success"><?= $success ?></div>
</form>

<?php require(__DIR__ . '/templates/foot.php');



