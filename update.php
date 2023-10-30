<?php

session_start();

$users = json_decode( file_get_contents( 'users.json' ), true );           

if (isset($_POST['update_role'])) {
    $selected_user_email = $_POST['selected_user']; // Get the selected user's email
    $new_role = $_POST['new_role']; // Get the new role from the select


    if (isset($users[$selected_user_email])) {
        $users[$selected_user_email]['role'] = $new_role;
        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
    }
}


?>




<!DOCTYPE html>
<html>

<head>
    <title>User Update</title>
    <style>
        <?php include "assets/css/update.css" ?>
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
                        <h3>Update Role</h3>
                    </div>
                    <div class="card-body">
                    <form class="form" method="POST">
                        <label for="users" class="mb-2">Choose a user:</label>
                        <br>
                        <select id="users" class="mb-4" name="selected_user">
                            <?php
                            foreach ($users as $email => $userInfo) {
                                echo '<option value="' . $email . '">' . $email . '</option>';
                            }
                            ?>
                        </select>

                        <br>
                        <label for="users" class="mb-2">Choose a role:</label>
                        <br>
                        <select id="roles" class="mb-4" name="new_role"> <!-- Add name attribute for the select -->
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>

                        <br>
                        <input class="btn btn-primary" type="submit" name="update_role" value="Update">

                        <a class="btn btn-primary" href="admin.php"> Back </a>
                    </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>