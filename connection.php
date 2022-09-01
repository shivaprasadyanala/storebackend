<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sevensports";
// $port = "8016";

$servername = "containers-us-west-11.railway.app";
$username = "root";
$password = "b3xCYV0o6hvbQIbzJ5Hp";
$db = "railway";
$port = "8016";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>