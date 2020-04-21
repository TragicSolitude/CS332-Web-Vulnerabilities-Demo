<?php require(__DIR__ . '/templates/head.php'); ?>

<?php if (!empty($_FILES['image'])): ?>
    <?php
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $success = 0;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check file size
        if ($_FILES["image"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Upload file
        if ($uploadOk) {
            $success = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }
    ?>
    
    <?php if ($success): ?>
    <div class="alert alert-success" role="alert">
        File uploaded successfully
    </div>
    <?php else: ?>
    <div class="alert alert-danger" role="alert">
        Failed to upload file
    </div>
    <?php endif; ?>
<?php endif; ?>

<h1 class="display-4">File Upload</h1>
<form   class="content-container mt-5 mx-auto"
        method="post"
        enctype="multipart/form-data">
    <div class="form-group">
        <label for="image">Select File</label>
        <input type="file" class="form-control-file" name="image">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">
        Submit
    </button>
    

</form>

<!-- TODO List images -->
<?php require(__DIR__ . '/templates/foot.php');