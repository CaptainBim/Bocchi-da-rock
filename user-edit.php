<?php
require_once('database/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "UPDATE login SET username = '{$username}' ";
    if($_POST['password']!= '') {
        $hashedPassword = sha1($saltDb . $password);
        $query .= ", password = '{$hashedPassword}' ";
    }
    $query .= "WHERE id='{$id}'";

    $result = mysqli_query($connectDb, $query);

    mysqli_close($connectDb);
    
    if ($result) {
        header('location:datauser.php?update=sukses');
    } else {
        header('location:datauser.php?update=gagal');
    }
}

// $data = mysqli_fetch_array($result);

$id = $_GET["id"];
$query = "SELECT * FROM login WHERE id='{$id}'";
$result = mysqli_query($connectDb, $query);
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/data.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Edit Account</title>
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
    
    <div class="container3">
            <div class="row">
                <div class="col">
                    <h3>Edit <span class="text-primary">User</span></h3>
                    <a href="datauser.php" class="btn btn-outline-primary">kembali</a>
                    
                    <form
                        autocomplete="off"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                      >
                      <input type="hidden" name="id" value="<?= $data['id']; ?>" />
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="username"
                              name="username"
                              placeholder="Username"
                              value="<?= $data['username']; ?>"
                              required
                            />
                            <div class="form-label2">Please input your username</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="password"
                              name="password"
                              placeholder="Password"
                              required
                            />
                            <div class="form-label2">Please input your password</div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                          Edit
                        </button>
                      </form>
                </div>
            </div>
        </div>  
</body>
</html>