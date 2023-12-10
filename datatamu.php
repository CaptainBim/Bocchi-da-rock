<?php
require_once('database/database.php');
require_once('database/auth.php');


$query = "SELECT * FROM bukutamu ORDER BY id ASC";
$result = mysqli_query($connectDb, $query);
?>
<!DOCTYPE html>
<html>
  <head>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <!--  CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
 
<!--  Javascript -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
   <link rel="stylesheet" href="style/data.css"> 
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">

   <title>Kessoku band</title>
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
                  <li><a href="#">Cek Pesan</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </div>
        </div>
    </nav>
  <div class="container mt-5 mb-5">

  </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>
                <th scope="col">Aksi</th>



              </tr>
            </thead>
            <tbody>
            <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?= $no; ?></th>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['email']; ?></td>
                                <td><?= $data['pesan']; ?></td>
                                <td>
                                    <a href="contact-delete.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++; endwhile; ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
    <hr>
  </div>
 
  
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

 
 
</body>
</html>