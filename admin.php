<?php
session_start();

if($_SESSION['role'] == 'user'){
    header('Location: users.php');
}

if($_SESSION['role'] == 'admin'){
    header('Location: update.php');
}


?>