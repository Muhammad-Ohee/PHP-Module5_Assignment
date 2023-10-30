<?php

session_start();


$users = json_decode( file_get_contents( 'users.json' ), true );            

if (isset($_POST['delete'])) {
    $selected_user_email = $_POST['selected_user']; // Get the selected user's email

    if (array_key_exists($selected_user_email, $users)) {
        unset($users[$selected_user_email]);
        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
    }
}

if (isset($_POST['delete_role'])) {
    $selected_user_email = $_POST['selected_user']; // Get the selected user's email

    if (array_key_exists($selected_user_email, $users)) {
        $users[$selected_user_email]['role'] = '';
        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
    }
}


?>




<!DOCTYPE html>
<html>

<head>
    <title>User Delete</title>
    <style>
        <?php include "assets/css/delete.css" ?>
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
                        <h3>Delete Member</h3>
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
                        <input class="btn btn-primary" type="submit" name="delete" value="Delete">
                        <input class="btn btn-primary" type="submit" name="delete_role" value="Delete Role">

                        <a class="btn btn-primary" href="admin.php"> Back </a>
                    </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>