<?php
session_start();
require_once('database/auth.php');

onlyAdmin();

$_SESSION = array();

session_destroy();

header('location: login.php?login=sukses');
exit;
?>
