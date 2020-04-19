<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link   rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Demo</a>
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">File Upload</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-sm-3">
        <h1 class="display-4">File Upload</h1>
        <form class="content-container mt-5 mx-auto" action="file-upload.php">
            <div class="form-group">
                <label for="image">Select File</label>
                <input type="file" class="form-control-file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
            
            <?php if($_QUERY['success'] === 'true'): ?>
            <div class="alert alert-success" role="alert">
                File uploaded successfully
            </div>
            <?php elseif($_QUERY['success'] === 'false'): ?>
            <div class="alert alert-danger" role="alert">
                Failed to upload file
            </div>
            <?php endif; ?>
        </form>
    </div>


    <!-- TODO List images -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>
</html>