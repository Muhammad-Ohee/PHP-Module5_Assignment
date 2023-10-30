<?php
session_start();


if($_SESSION['role'] == 'user'){
    header('Location: index.php');
}


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

                        <input class="btn btn-primary" type="submit" name="logout" value="Log Out">
                        
                    </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
