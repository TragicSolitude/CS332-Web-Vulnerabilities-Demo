<?php
    $dest_path = 'images/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image'], $dest_path);

    header('Location: /index.php?success=true');
    http_response_code(300);
?>