<?php
declare(strict_types=1);
session_start();
$userName = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
$userPassword = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
$_SESSION['authUser'] = $userName;
$_SESSION['password'] = $userPassword;

// echo $_SESSION['authUser'];
header('HTTP/1.1 200 OK');
header('location: ./index.php');
// header('Location: ' . $_SERVER['HTTP_REFERER']);
// header('Location: http://'.$_SERVER['HTTP_HOST'].'/web/');