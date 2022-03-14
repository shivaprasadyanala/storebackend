<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "sevensports");
 include 'connection.php';
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE register(
    -- id TIMESTAMP PRIMARY KEY,
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL,
    pass VARCHAR(70) NOT NULL,
    phn_no INT(10) NOT NULL,
    Addres VARCHAR(100) NOT NULL,
    gender CHAR(6) NOT NULL,
    stat CHAR(20) NOT NULL,
    city CHAR(20) NOT NULL,
    pincode INT(6) NOT NULL
)";
if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>