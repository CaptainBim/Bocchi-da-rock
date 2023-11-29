<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "bimo" && $password == "473") {
            echo "bisa";
            // header("Location: index.html");
            // exit();
        } else {
            echo "Login gagal. Cek username dan password anda.";
        }
    }
}
?>
