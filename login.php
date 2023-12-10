<?php
session_start();
require_once('database/database.php');
require_once('database/auth.php');

if (checkLogin()) {
    header('location:index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // hash sha1
    $hashedPassword = sha1($saltDb . $password);


    $query = "SELECT * FROM login WHERE username = '{$username}' AND password = '{$hashedPassword}'";
    $result = mysqli_query($connectDb, $query);
    $data = mysqli_fetch_array($result);


    if ($data) {
        $_SESSION['username'] = true;
        $_SESSION['password'] = $data;

        if ($data['level'] == 'user') {
            header('location:index.php?status=sukses');
            exit;
        } else {
            header('location:admin.php?status=sukses');
            exit;
        }
    } else {
        header('location:login.php?status=gagal');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
    <title>LOGIN</title>
</head>
<body>
    <form method="post" action="login.php">
        <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br><br>

        <input class="btn btn-danger" type="submit" value="JOIN">
    </form>
</body>
</html>