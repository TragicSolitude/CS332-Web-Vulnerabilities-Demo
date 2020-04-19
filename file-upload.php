<?php require(__DIR__ . '/templates/head.php'); ?>

<?php if (!empty($_FILES['image'])): ?>
    <?php
        // Unrestricted file upload
        $dest_path = 'images/' . basename($_FILES['image']['name']);
        $success = move_uploaded_file($_FILES['image']['tmp_name'], $dest_path);
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

    <button type="submit" class="btn btn-primary">
        Submit
    </button>
    

</form>

<!-- TODO List images -->
<?php require(__DIR__ . '/templates/foot.php');