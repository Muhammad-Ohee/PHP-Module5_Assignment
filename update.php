<?php

session_start();

echo "Welcome, " . $_SESSION['username'];
echo "</br>";
echo "Welcome, " . $_SESSION['role'];
echo "</br>";
echo "Welcome, " . $_SESSION['email'];
echo "</br>";
echo "logout <a href='logout.php'>here</a>";
            

?>