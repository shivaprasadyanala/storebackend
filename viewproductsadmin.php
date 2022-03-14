<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="products-style.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
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
    <img height="300" width="300" src="uploads/<?php echo $row['image'] ?>" alt="">
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