<?php
session_start();

require_once('database/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $query = "INSERT INTO bukutamu(nama, email, pesan) VALUES('{$nama}', '{$email}', '{$pesan}')";

    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:index.php?tambah=sukses');
    } else {
        header('location:index.php?tambah=gagal');
    }
} else {
    echo "Error";
}
?>
