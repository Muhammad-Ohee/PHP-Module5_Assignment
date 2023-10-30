<?php

session_start();

$usersFile = 'users.json';

$users = json_decode( file_get_contents( 'users.json' ), true );

function saveUsers( $users, $file )
{
    file_put_contents( $file, json_encode( $users, JSON_PRETTY_PRINT ) );
}
           

if (isset($_POST['create_user'])) {
    $new_username = $_POST['username']; // Get the selected user's username
    $new_email = $_POST['email']; // Get the selected user's email
    $new_password = $_POST['password']; // Get the selected user's password
    

    if ( empty( $new_username ) || empty( $new_email ) || empty( $new_password ) ) {
        $errorMsg = "Please fill  all the fields.";
    } else {
        if ( isset( $users[$new_email] ) ) {
            $errorMsg = "Email already exists.";
        } else {
            $users[$new_email] = [
                'username' => $new_username,
                'password' => $new_password,
                'role'     => 'user',
            ];

            saveUsers( $users, $usersFile );
        }
    }
}


?>




<!DOCTYPE html>
<html>

<head>
    <title>User Registration and Login</title>
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
                        <h3>Create User</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if ( isset( $errorMsg ) ) {
                                echo "<p>$errorMsg</p>";
                            }
                        ?>
                        <form class="form" method="POST">
                            <label for="users" class="mb-2">Create a user:</label><br>

                            <input class="form-control" type="text" name="username" placeholder="Username"><br>
                            <input class="form-control" type="email" name="email" placeholder="Email"><br>
                            <input class="form-control" type="password" name="password" placeholder="Password"><br>

                                

                                
                            <input class="btn btn-primary" type="submit" name="create_user" value="Create">

                            <a class="btn btn-primary" href="admin.php"> Back </a>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>