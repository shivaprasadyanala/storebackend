<?php

include 'connection.php';
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{ 
   
     $f_name = $_POST['fname'];
     $l_name = $_POST['lname'];
     $email = $_POST['email'];
     $mobile = $_POST['pno'];
     $pass = $_POST['pass'];
     $stored = password_hash($pass,PASSWORD_DEFAULT);
     $address = $_POST['address'];
     $gender = $_POST['inlineRadioOptions'];
     $state = $_POST['state'];
     $city= $_POST['city'];
     $pin = $_POST['pin'];
     $test = "select * from register where email='$email'";
     $result = mysqli_query($conn,$test);
     $row = mysqli_num_rows( $result );
     echo $row;
     if($row==0){
      $sql = "INSERT INTO register(first_name,last_name,email,pass,phn_no,Addres,gender,stat,city,pincode) VALUES ('$f_name','$l_name','$email','$stored','$mobile','$address','$gender','$state','$city','$pin')";
       if (mysqli_query($conn, $sql) ) {
        echo "New record has been added successfully !";
        header('location: /login.php');
        exit();
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
      //   header('location:reg.php');
     }
     }else{
          header('location: /register.php?error=email');
      //   echo "email already exist";
     }
     
     
     mysqli_close($conn);
    }
?>