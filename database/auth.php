<?php

function checkLogin() {
    if (isset($_SESSION['username'])) {
        $isLogin = $_SESSION['username'];        
        return $isLogin ? true : false;
    }

    return false;    
}

function onlyAdmin() {
    if (!checkLogin()) {
        header('location:index.php');
        exit;
    }
}

function getUserLogin($key) {
    if (isset($_SESSION['username'])) {
        $user = $_SESSION['password'];

        return isset($user[$key]) ? $user[$key] : null;
    }

    return null;
}
