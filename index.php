<?php

session_start();

if(!isset($_SESSION['email'])){
    header('Location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>

        <script src='//cdn.tailwindcss.com'></script>
    </head>

    <body>
        <section class="">
            <?php
                echo "Welcome, " . $_SESSION['username'];
                echo "</br>";
                echo "Welcome, " . $_SESSION['role'];
                echo "</br>";
                echo "Welcome, " . $_SESSION['email'];
                echo "</br>";
                echo "logout <a href='logout.php'>here</a>";
            ?>
        </section>
        

    </body>
</html>