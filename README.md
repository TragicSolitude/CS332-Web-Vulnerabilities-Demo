# CS332 Web Vulnerabilities Demo

## How to add a new demo page
1. Create a php file in the project root. This should use `skewer-case` and be
   related to the name of the vulnerability or the demonstration.

2. Import the `head` partials at the beginning of the file
   
       <?php require(__DIR__ . '/templates/head.php'); ?>
    
3. Import the `foot` partials at the end of the file

       <?php require(__DIR__ . '/templates/foot.php'); ?>
    
4. Add the page to the nav menu by adding an entry to the `$pages` map at the
   top of the `templates/nav.php` file.

5. Put your demo content between the `head` and `foot` partials.