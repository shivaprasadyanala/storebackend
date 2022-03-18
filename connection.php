<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sevensports";
// $port = "8016";

$servername = "containers-us-west-11.railway.app";
$username = "root";
$password = "dWHYsWhWzxrfQ8ATfFbY";
$db = "railway";
$port = "8016";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$db,$port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>