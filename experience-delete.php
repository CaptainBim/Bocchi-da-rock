<?php
require_once('database/database.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM experience WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:datapengalaman.php?delete=sukses');
    } else {
        header('location:datapengalaman.php?delete=gagal');
    }
}