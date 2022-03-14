<?php
if (isset($_POST["login"])) {
    $con = mysqli_connect("localhost", "root", "", "sevensports");
 echo"w";

    // Check connection
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
$mail=$_POST['username'];
$password=$_POST['password'];
echo"wow";
$sql="select * from register where email= '$mail' and pass='$password'";
    
if($sql!=null)
{
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
}
    $count=mysqli_num_rows($result);

if($count==1)
{
    echo"login successful";
     header("location:indexlogin.php");

}else{
    echo "incorrect credentials";
    header("location:loginfail.php");
}
}
?>