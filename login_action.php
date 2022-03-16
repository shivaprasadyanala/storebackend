
 <?php
 
 session_start();
 $message = "";
 if(count($_POST)>0){
     require('connection.php');
     $sql="select * from register where email= '".$_POST['username']."' and pass='".$_POST['password']."'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
     if(is_array($row)){
         $_SESSION['id'] = $row['id'];
         $_SESSION['name'] = $row['email'];
     }else{
         header("location:loginfail.php");
     }
 }
 if(isset($_SESSION["id"])) {
    header("Location:indexlogin.php");
}

?>