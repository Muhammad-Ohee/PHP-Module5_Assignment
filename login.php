<?php
session_start();

// if(isset($_SESSION['email'])){
//     header('Location: users.php');
// }


$usersFile = 'users.json';

$users = json_decode( file_get_contents( $usersFile ), true );

// Registration Form Handling
if ( isset( $_POST['login'] ) ) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    //Set Cookie
    $cookie_data = [
        'email'  => $email,
        'password'  => md5($password),
    ];
    
    //Setting Multiple Data in Cookie as JSON
    setcookie( 'userinfo', json_encode( $cookie_data ), time() + 10 );

    //Validation
    if ( empty( $email ) || empty( $password ) ) {
        $errorMsg = "Please fill  all the fields.";
    } elseif(array_key_exists($email, $users)){ //checking if email alreay exists
        $loginpassword = $users[$email]['password'];
        $role = $users[$email]['role'];

        if($password == $loginpassword){ //checking if email's password matches with form password
            if($role == 'admin'){ //checking if user is an admin
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $users[$email]['username'];
                $_SESSION['password'] = $loginpassword;
                $_SESSION['role'] = 'admin';
                header( 'Location: admin.php' );
            }
            else{ //checking if user is an user
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $users[$email]['username'];
                $_SESSION['password'] = $loginpassword;
                $_SESSION['role'] = 'user';
                header( 'Location: index.php' );
            }
        } else {
            $errorMsg = "Worng Email or Password.";
        }
    }

}

?>


<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <?php
            include 'bootstrap.php';
        ?>
    </head>

    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <h3 class="text-center mb-4">Log In</h3>
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <h3>User Login</h3>
                            <a href="registration.php" class="btn btn-info text-white">
                                Don't have an account?
                            </a>
                        </div>
                        <div class="card-body">
                            <?php
                                if ( isset( $errorMsg ) ) {
                                    echo "<p>$errorMsg</p>";
                                }
                            ?>
                            <form class="form" method="POST">
                                <input class="form-control" type="email" name="email" placeholder="Email"><br>
                                <input class="form-control" type="password" name="password" placeholder="Password"><br>
                                <input class="btn btn-primary" type="submit" name="login" value="Login">
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </body>

</html>