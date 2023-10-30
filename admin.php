<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location: login.php');
}

if($_SESSION['role'] == 'user'){
    header('Location: index.php');
}

$usersFile = 'users.json';

$users = json_decode( file_get_contents( 'users.json' ), true );

$keys = count($users);

if (isset($_POST['update_function'])) {
    $value = $_POST['select_function'];

    if ($value == 'create'){
        header('Location: create.php');
    } elseif($value == 'update'){
        header('Location: update.php');
    } else{
        header('Location: delete.php');
    }
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();

    header('Location: index.php');
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Pannel</title>
    <style>
        <?php include "assets/css/admin.css" ?>
    </style>
    <?php
        include 'bootstrap.php';
    ?>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <h3>Role Management Page</h3>
                    </div>
                    <div class="card-body">
                    <form class="form" method="POST">
                        <label for="admin" class="mb-2">Choose a option:</label>
                        <br>
                        <select id="crud" class="mb-4" name="select_function">
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                        <br>
                        <input class="btn btn-primary" type="submit" name="update_function" value="Go">
                        <a href="index.php" class="btn btn-info text-white">
                            Log in as Admin
                        </a>
                        <input class="btn btn-primary" type="submit" name="logout" value="Log Out">
                        
                    </form>

                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <h3>User Dashboard</h3>
                    </div>
                    <div class="card-body">
                    <form class="form" method="POST">
                        <table style="width:100%">
                            <tr>
                                <td><b>Username</b></td>
                                <td><b>Role</b></td>
                                <td><b>Email</b></td>
                            </tr>


                            <?php
                                foreach ($users as $email => $userData) {
                                    echo '<tr>';
                                    echo '<td>' . $userData['username'] . '</td>'; // Access 'username' within user data
                                    echo '<td>' . $userData['role'] . '</td>'; // Access 'role' within user data
                                    echo '<td>' . $email . '</td>'; // Use the email as the key
                                    echo '</tr>';
                                }
                            ?>
                            
                        </table>
                    </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
