<?php
declare(strict_types=1);
session_start();

if(isset($_SESSION['authUser'])){
  $authUser = $_SESSION['authUser'];
}