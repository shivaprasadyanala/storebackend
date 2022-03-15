<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="../products-style.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="top-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="../imgs/logo-removebg-preview.png" width="150px" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-xl-auto mb-2 mb-lg-0" id="navbar">
                        <li class="nav-item ms-3">
                            <a class="nav-link active" aria-current="page" href="indexadmin.php">HOME</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle" href="viewproductsadmin.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTS</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="viewproductsadmin.php">BATS</a></li>
                                <li><a class="dropdown-item" href="viewproductsadmin.php">BALL</a></li>
                                <li> <a class="dropdown-item" href="viewproductsadmin.php">HELMENT</a> </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                         <li class="nav-item ms-3">
                            <a class="nav-link" href="products.php">ADD PRODUCTS</a>
                        </li>

                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary btn-outline-success" type="submit">Search</button>
                    </form>

                    <li class="nav-item m-3"><a class="nav-link" id="login" href="login.php">login</a></li>


                </div>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">

                        <img src="../imgs/shopping-cart-empty-side-view.png" width="32px" style="color: #000;" alt="">

                        <span class="add-cart-quantity">4</span>

                    </a>
                </li>
                <!-- <p>hi</p> -->
            </div>
        </nav>
    </div>
   <?php include 'connection.php';
   
   $val = 'select * from products';
    
   echo '<div class="main">';
    echo "<div class='top-section'>";
    echo "<h2 class='header'>List of products</h2>";
    echo "<form action='products.php'> <input class='btn btn-primary' type='submit' value='add product'> </form>";
   echo"</div>";
    echo '<div class="products">';
   $result = mysqli_query($conn,$val);
 // echo "<form action='deleteproduct.php' method='post'>";
   while($row = mysqli_fetch_assoc($result)){ 
    // echo '<div class="product">';
    // echo'<img height="300" width="300" src="uploads/'.$row['image'].'">';
   
   ?>
   <div class="product">
    <img height="300" width="300" src="../uploads/<?php echo $row['image'] ?>" alt="">
     <br>
     
      <!-- <input  id="pid" type="text" name="pid" value="<?php $row['pid'] ?> " disabled> -->
      <h3> <?php echo $row['pname']; ?> </h3>
      <h5> <?php echo $row['cname']; ?> </h5>
      <p> <?php echo $row['stock'] ?> </p>
      <p> <?php echo $row['type'] ?> </p>
      <p> <?php echo $row['price'] ?> </p>
      <p> <?php echo $row['descr'] ?> </p> 
    <div class="top-section">
<!-- <input class="btn btn-danger" type='submit' value='remove product'-->
 <!-- <a href='padamfail.php?FailID=$id' onClick=\"return 
confirm('are you sure you want to delete??');\"><center>Delete</center></a> -->

<?php 

?>
 <a class='btn btn-danger remove' href="deleteproduct.php?pid=<?=$row['pid'];?>" 
    onclick="return confirm('Are you surely want to delete?');">delete</a>
  
 <a class='btn btn-secondary' href="editproduct.php?pid=<?=$row['pid'];?>">edit</a>

 <!-- </form> -->
</div>
    </div>
<?php
  
   }
   ?>
 </div>
</div>
   
  
</body>

<!-- <script type="text/javascript">
    $(".remove").click(function(){
        // var pid = $(this).parents("tr").attr("id");
        var pid = $(this).attr("val");
        console.log(pid);
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/deleteproduct.php',
               type: 'GET',
               data: {pid: pid},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+pid).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script> -->
</html>