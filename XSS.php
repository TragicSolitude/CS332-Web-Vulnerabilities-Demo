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

<?php if (!empty($success)): ?>
  <div class="alert alert-success" role="alert">
    <?= $success ?>
  </div>
<?php endif; ?>

<h1 class="display-4">XSS Attack</h1>
<form class="content-container mt-5 mx-auto" action="" method="get">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input
          type="text"
          id="username"
          name="username"
          class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password </label>
      <input
          type="text"
          id="password"
          name="password"
          class="form-control">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require(__DIR__ . '/templates/foot.php');



