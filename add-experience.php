<?php
require_once('database/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO experience(date_start, date_end, title,description) VALUES('{$date_start}', '{$date_end}', '{$title}', '{$description}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);
    //  var_dump("$date_start,$date_end,$title,$description");
    //  exit;
    if ($result) {
        header('location:datapengalaman.php?tambah=sukses');
    } else {
        header('location:datapengalaman.php?tambah=gagal');
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
    
    <div class="container" style="margin-top: 150px">
        <form action = '' method = "post" >
            <div class="mb-3">
                <label for="nama">Tanggal Awal Acara</label><br>
                <input type="date" id="date_start" name="date_start" required>
            </div>
    
            <div class="mb-3">
                <label for="password">Tanggal Selesai Acara</label><br>
                <input type="date" id="date_end" name="date_end" required>
            </div>
    
            <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <label for="title" class="form-label">Masukkan Judul.</label>
        <input id="title" class="form-control" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <label for="description" class="form-label">Masukkan Deskripsi.</label>
        <input id="description" class="form-control" name="description">
    </div>
            <!-- <div>
                <label for="deskripsi">Deskripsi:</label>
                <input type="textarea" id="description" name="description" required>
            </div> -->

            <div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>