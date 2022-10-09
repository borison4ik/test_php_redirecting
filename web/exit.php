<?php
declare(strict_types=1);
session_start();
session_unset();

// unset($_SESSION['authUser']);
// session_destroy();
header('location: ./index.php');