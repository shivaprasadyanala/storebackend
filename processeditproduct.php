<?php
$pid = $_POST['pid'];
echo $pid;
$product_name = $_POST['product-name'];
echo "product name:".$_POST['product-name']."<br>";
$companyname = $_POST['company-name'];
echo "company_name:".$_POST['company-name']."<br>";
$stock = $_POST['stock'];
echo "stock:".$_POST['stock']."<br>";
$type = "small";
echo "type: ".$_POST['type']."<br>";
$price = $_POST['price'];
echo "price in rupees: ".$_POST['price']."<br>";
$desc = $_POST['desc'];
echo "desc: ".$_POST['desc']."<br>";
  $dir = 'uploads';
  if( is_dir($dir) === false )
{
    mkdir($dir);
}

$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];    
$folder = "uploads/".$filename;
move_uploaded_file($tempname, $folder);
echo $filename;



include 'connection.php';



$upd =    "UPDATE products
         SET pname = '".mysqli_real_escape_string($conn,$_POST['product-name'])."',
          cname = '".mysqli_real_escape_string($conn,$_POST['company-name'])."',
         stock = '".mysqli_real_escape_string($conn,$_POST['stock'])."',
          type = '".mysqli_real_escape_string($conn,$_POST['type'])."',
          price = '".mysqli_real_escape_string($conn,$_POST['price'])."',
          descr = '".mysqli_real_escape_string($conn,$_POST['desc'])."', 
          image = '".mysqli_real_escape_string($conn,$_FILES["image"]["name"])."'
         WHERE pid='".mysqli_real_escape_string($conn,$_POST['pid'])."'";
         
         if(mysqli_query($conn,$upd)){
           echo "update success";
           header('Refresh: 1;url=viewproductsadmin.php');
         }else{
           echo "error in update".mysqli_error($conn);
         }
// $ins = "insert into products (pname,cname,stock,type,price,descr,image) values(
//  '$product_name','$companyname','$stock','$type','$price','$desc','$filename'
//  )";

//  if(mysqli_query($conn,$ins)){
//   echo "values inserted";
//  }else{
//   echo "error while inserting data";
//  }

// if (mysqli_query($conn,$ins)){
//   echo "values inserted";
//   // header('Refresh: 5;url=viewproduct.php?product_id='.mysqli_insert_id($conn));
//   // header('Refresh: 1;url=viewproductsadmin.php');
//   exit;
// } else {
//   echo "error while inserting data.";
// }


?>