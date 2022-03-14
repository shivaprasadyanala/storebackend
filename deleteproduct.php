<?php
 $pid = $_GET['pid'];
include 'connection.php';
echo $pid;
 $del = "DELETE FROM products where pid='$pid'";

 $res = mysqli_query($conn,$del);

 if($res ===TRUE){
   echo "delete succesful";
    header("Location: viewproductsadmin.php");
 }else{
  echo "error in deleting";
 }
echo "<form action='viewproducts.php'> <input class='btn btn-primary' type='submit' value='see product'> </form>";
?>