<?php
if (isset($_POST["login"])) {
//     $con = mysqli_connect("localhost", "root", "", "sevensports");
//  echo"w";
include 'connection.php';

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
$mail=$_POST['username'];
$password=$_POST['password'];
echo"wow";
$sql="select * from register where email= '$mail' and pass='$password'";
    
if($sql!=null)
{
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
}
    $count=mysqli_num_rows($result);

if($count==1)
{
    echo"login successful";
     header("location:indexlogin.php");

}else{
    echo "incorrect credentials".mysqli_query($conn);
    // header("location:loginfail.php");
}
}
?>