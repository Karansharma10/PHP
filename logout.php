<?php
include '../config/connect.php';
session_start();

  // for check user is loged in or not
  if(!isset($_COOKIE['Admin'])){
    header('location:./login.php');
  }
setcookie('Admin', false);
    header('location:./login.php');
?>
