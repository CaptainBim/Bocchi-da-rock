<?php
require_once('database/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = sha1($saltDb . $_POST['password']);
    $level = $_POST['level'];

    $query = "INSERT INTO login(username, password, level) VALUES('{$username}', '{$password}', '{$level}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);
    // var_dump("$username,$password,$level");
    //  exit;
    if ($result) {
        header('location:datauser.php?tambah=sukses');
    } else {
        header('location:datauser.php?tambah=gagal');
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/data.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- <link rel="stylesheet" href="admins.css"> -->
    <title>Tambah Account</title>
</head>
<body>
<nav class="hero">
        <div class="overlay">
            <div class="container-navbar">
                <div class="logo">
                  <a href="#"><img src="gambar/logo.png" alt="Logo"></a>
                </div>
                <ul class="nav-links">
                  <li><a href="admin.php">Beranda</a></li>
                  <li><a href="datauser.php">Data login</a></li>
                  <li><a href="datapengalaman.php">Data Prestasi</a></li>
                  <li><a href="datatamu.php">Cek Pesan</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </div>
        </div>
    </nav>
    
    <!-- sesuaikan margin. sebenarnya agak maksa juga kalo margin-top 100px tapi ga tau lagi gimana -->
    <div class="container" style="margin-top: 150px">
        <form action = '' method = "post" >

        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
        <label for="username" class="form-label">Masukkan Nama Kamu.</label>
        <input id="username" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
            <div class="mb-3">
                <label for="level">Level</label><br>
                <select id="level" name="level" required>
                    <option value="admin">Admin</option>
                    <option value="user">Member</option>
                </select>
            </div>
    
            <div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>