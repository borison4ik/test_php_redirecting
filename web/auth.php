<?php
declare(strict_types=1);
session_start();

$authUser = $_SESSION['authUser'] ?? NULL;
$authUserPassword = $_SESSION['password'] ?? NULL;