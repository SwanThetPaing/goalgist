<?php
session_start();
include 'conn.php';
include 'function.php';

if (isset($_POST['login'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];

    $errors = array(
        'username' => '',
        'password' => ''
    );

    if ($name == '') {
        $errors['username'] = 'This Field could not be empty';
    }

    if ($password == '') {
        $errors['password'] = 'This field could not be empty';
    }

    $hpass = md5($password);
    $query = "SELECT * FROM user";
    $go_query = mysqli_query($conn, $query);

    while ($out = mysqli_fetch_array($go_query)) {
        $db_user_name = $out['username'];
        $db_password = $out['password'];
        $db_user_role = $out['role'];

        if ($db_user_name == $name && $db_password == $hpass && $db_user_role == 'admin') {
            $_SESSION['admin'] = $name;
            header('location:admin/product.php');
        } elseif ($db_user_name == $name && $db_password == $hpass && $db_user_role == 'user') {
            $_SESSION['user'] = $name;
            header('location:index.php');
        } else {
            header('location:index.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>


<body>
<?php
include 'header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-warning w-100" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
 

