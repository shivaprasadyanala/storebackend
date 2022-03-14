<?php

$product_name = $_POST['product-name'];
echo "product name:".$_POST['product-name']."<br>";
$companyname = $_POST['company-name'];
echo "company_name:".$_POST['company-name']."<br>";
$stock = $_POST['stock'];
echo "stock:".$_POST['stock']."<br>";
$type = $_POST['type'];
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

//creating table
$val = mysqli_query($conn,'select * from products');
if($val==false){
   $ct = "create table products (
    pid TIMESTAMP NOT NULL PRIMARY KEY,
    pname VARCHAR(50) NOT NULL,
    cname VARCHAR(50) NOT NULL,
    stock INT(10) NOT NULL,
    type VARCHAR(20) NOT NULL,
    price FLOAT(10) NOT NULL,
    descr VARCHAR(100),
    image VARCHAR(50) NOT NULL
   );";

   if(mysqli_query($conn,$ct)){
    echo "table created";
   }else{
    echo "error in table creation";
   }
}


// inserting data

$ins = "insert into products (pname,cname,stock,type,price,descr,image) values(
 '$product_name','$companyname','$stock','$type','$price','$desc','$filename'
 )";

//  if(mysqli_query($conn,$ins)){
//   echo "values inserted";
//  }else{
//   echo "error while inserting data";
//  }

if (mysqli_query($conn,$ins)){
  echo "values inserted";
  // header('Refresh: 5;url=viewproduct.php?product_id='.mysqli_insert_id($conn));
  header('Refresh: 1;url=viewproductsadmin.php');
  exit;
} else {
  echo "error while inserting data.";
}



// ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>products added succesfully</h2>
   <form action="viewproducts.php">
    <input class="btn btn-primary" type="submit" value="show products">
   </form>
</body>
</html>

