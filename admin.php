<?php
session_start();
require_once('database/auth.php');


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/admins.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <title>Kessoku band</title>
</head>
<body>
    <nav class="hero">
        <div class="overlay">
            <div class="container">
                <div class="logo">
                  <a href="#"><img src="gambar/logo.png" alt="Logo"></a>
                </div>
                <ul class="nav-links">
                  <li><a href="#home">Beranda</a></li>
                  <li><a href="datauser.php">Data login</a></li>
                  <li><a href="datapengalaman.php">Data Prestasi</a></li>
                  <li><a href="datatamu.php">Cek Pesan</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </div>
        </div>
    </nav>
    <div id="home" class="hero-center">
        <h2>Selamat Datang Admin</h2>
        <a href="datapengalaman.php" class="btn">Buat Data?</a>
    </div>
      </body>
    </html>