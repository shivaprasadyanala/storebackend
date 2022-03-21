<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
// echo $_SESSION['id'];
// header("Location:login.php");
header('location:../index.php');
?>