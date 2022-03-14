<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sevensports");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{ 
     $f_name = $_POST['fname'];
     //echo "name:".$f_name;
     $l_name = $_POST['lname'];
     $email = $_POST['email'];
     $mobile = $_POST['pno'];
     $pass = $_POST['pass'];
     $address = $_POST['address'];
     $gender = $_POST['inlineRadioOptions'];
     $state = $_POST['state'];
     $city= $_POST['city'];
     $pin = $_POST['pin'];
     $sql = "INSERT INTO register(first_name,last_name,email,pass,phn_no,Addres,gender,stat,city,pincode) VALUES ('$f_name','$l_name','$email','$pass','$mobile','$address','$gender','$state','$city','$pin')";
     if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
        header('location:login.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
        header('location:reg.php');
     }
     mysqli_close($link);
    }
?>