<?php
session_start();
require_once('database/auth.php');
require_once('database/database.php');

$_SESSION = array();

session_destroy();

header('location: login.php?login=sukses');
exit;
?>
