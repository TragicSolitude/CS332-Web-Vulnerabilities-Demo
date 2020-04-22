<?php
    // Map of url => page name
    $pages = [
        '/' => 'Home',
        '/file-upload.php' => 'File Upload',
        '/user-enumeration.php' => 'User Enumeration',
        '/XSS.php' => 'XSS Attack'
        // ... Any additional demos
    ];
?>

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
                <?php foreach ($pages as $url => $name): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $url ?>"><?= $name ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>