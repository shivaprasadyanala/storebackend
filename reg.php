
<?php
  include 'connection.php';
  // Check connection
  if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  if(isset($_POST['submit'])) {
    foreach ($_POST as $key => $val) {
      $_POST[$key] = mysqli_real_escape_string($conn, $val);
    }
   
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['pno'];
    $pass = $_POST['pass'];
    $stored = password_hash($pass,PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $gender = $_POST['inlineRadioOptions'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
        
    $test = mysqli_query($conn, "SELECT 1 FROM `register` WHERE `email`='".$email."'");
    if (mysqli_num_rows($test) === 0) {
      $sql = "INSERT INTO `register` (`first_name`, `last_name`, `email`, `pass`, `phn_no`, `addres`, `gender`, `stat`, `city`, `pincode`) VALUES ('".
             $f_name."','".$l_name."','".$email.".','".$stored."','".$mobile."','".$address."','".$gender."','".$state."','".$city."','".$pin."')";
      if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('location: login.php');
        exit;
      }
      echo "Error:<br/>".$sql."<br/>".mysqli_error($conn);
      // header('Location: /reg.php');
      exit;
    } else {
      // echo "email already exist";
      header('location: /register.php?error=email');
      exit;
    }

    mysqli_close($conn);
  }
?>