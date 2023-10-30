<?php
session_start();

$usersFile = 'users.json';

$users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

function saveUsers( $users, $file )
{
    file_put_contents( $file, json_encode( $users, JSON_PRETTY_PRINT ) );
}

// Registration Form Handling
if ( isset( $_POST['register'] ) ) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    //Set Cookie with hasing password
    $cookie_data = [
        'username' => $username,
        'email'  => $email,
        'password'  => md5($password),
    ];
    
    //Setting Multiple Data in Cookie as JSON
    setcookie( 'userinfo', json_encode( $cookie_data ), time() + 10 );


    //Validation
    if ( empty( $username ) || empty( $email ) || empty( $password ) ) {
        $errorMsg = "Please fill  all the fields.";
    } else {
        if ( isset( $users[$email] ) ) {
            $errorMsg = "Email already exists.";
        } else {
            $users[$email] = [
                'username' => $username,
                'password' => $password,
                'role'     => 'user',
            ];

            saveUsers( $users, $usersFile );
            header( 'Location: login.php' );
        }
    }

}



?>


<!DOCTYPE html>
<html>

    <head>
        <title>User Registration</title>
        <style>
            <?php include "assets/css/registration.css" ?>
        </style>
        <?php
            include 'bootstrap.php';
        ?>
    </head>

    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <h3 class="text-center mb-4">Sign Up</h3>
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <h3>User Registration</h3>
                            
                        </div>
                        <div class="card-body">
                            <?php
                                if ( isset( $errorMsg ) ) {
                                    echo "<p>$errorMsg</p>";
                                }
                            ?>
                            <form class="form" method="POST">
                                <input class="form-control" type="text" name="username" placeholder="Username"><br>
                                <input class="form-control" type="email" name="email" placeholder="Email"><br>
                                <input class="form-control" type="password" name="password" placeholder="Password"><br>
                                <input type="hidden" name="role" value="">
                                <input class="btn btn-primary" type="submit" name="register" value="Register">
                                <a href="login.php" class="btn btn-info text-white">
                                Already have an account?
                                </a>
                                <a class="btn btn-primary" href="login.php"> Back </a>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </body>

</html>