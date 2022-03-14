<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sevensports";
$port = "8016";
//3306 by default

// $conn = mysqli_connect("sql109.epizy.com", "epiz_31265295", "******", "epiz_31265295_sevensports");

// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>