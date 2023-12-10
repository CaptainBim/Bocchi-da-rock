<?php
require_once('database/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM bukutamu WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:datatamu.php?delete=sukses');
    } else {
        header('location:datatamu.php?delete=gagal');
    }
}
else {
    alert("Mohon maaf gagal, coba ulang kembali");
}