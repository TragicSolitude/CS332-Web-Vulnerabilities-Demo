<?php require(__DIR__ . '/templates/head.php'); ?>

<?php 
    $valid_users = [
        'user@email.com',
        'user2@email.com'
    ];

    if($_POST['email']){
        sleep(1); // Go out to the database...
        if(in_array($_POST['email'], $valid_users)){
            sleep(1); // Sending email...
        }
    }

?>

<h1 class="display-4">User Enumeration</h1>
<form class="content-container mt-5 mx-auto" method="post">
    <h3>Password Reset</h3>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input class="form-control" id="email" name="email" />
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">
        Submit
    </button>
</form>

<?php require(__DIR__ . '/templates/foot.php');