<?php
require_once('database/database.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM login WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:datauser.php?delete=sukses');
    } else {
        header('location:datauser.php?delete=gagal');
    }
}