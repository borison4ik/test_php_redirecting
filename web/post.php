<?php
declare(strict_types=1);
session_start();
$uloadFileName = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
$_SESSION['authUser'] = $uloadFileName;

// echo $_SESSION['authUser'];
header('HTTP/1.1 200 OK');
header('location: ./index.php');
// header('Location: ' . $_SERVER['HTTP_REFERER']);
// header('Location: http://'.$_SERVER['HTTP_HOST'].'/web/');