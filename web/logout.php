<?php
declare(strict_types=1);
session_start();
$passvord = '123456789';
$userPassword = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
$_SESSION['bedPassword'] = false;

if($userPassword === $passvord) {
  session_unset();
  header('location: ./index.php');
} else {
  $_SESSION['bedPassword'] = true;
  header('location: ./exit.php');
}