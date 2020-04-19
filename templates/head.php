<?php
    // Taking a page out of WordPress' playbook here. This file should be at the
    // beginning of any pages and is used to customize all of the boilerplate
    // HTML that goes before the page content.
?>

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
    <?php require(__DIR__ . '/nav.php'); ?>
    <div class="container py-sm-3">
    <!-- BEGIN CONTENT -->