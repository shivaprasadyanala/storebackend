<?php
 
 session_start();
 $message = "";
require('connection.php');
 
 if(count($_POST)>0){
    //  echo "hi";
    $pass = $_POST['password'];
     $sql="select * from register where email= '".$_POST['username']."'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
     $flag = password_verify($pass,$row['pass']);
     if(is_array($row) && $flag){
         echo "ok";
         $_SESSION['id'] = $row['id'];
         $_SESSION['name'] = $row['email'];
         header('location:indexlogin.php');
     }else{
         echo "error:".mysqli_error($conn);
         header('location:loginfail.php');
     }
 }

?>
