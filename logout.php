<?php

session_start();
//unset($_SESSION['username'] );
session_destroy();
$_SESSION['success'] = "You are now logged out";
header('Location: index.php');
exit;
?>