<?php
 
 session_start();
 $message = "";
require('connection.php');
 
 if(count($_POST)>0){
    $pass = $_POST['password'];
    if($_POST['username']=='admin@gmail.com'){


     $sql="select * from register where email= '".$_POST['username']."'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
     $flag = password_verify($pass,$row['pass']);
     var_dump($row['pass']);
    //  var_dump($_POST)
     if(is_array($row) && $flag){
         echo "ok";
         $_SESSION['id'] = $row['id'];
         $_SESSION['name'] = $row['email'];
         header('location:./admin/indexadmin.php');
     }else{
         echo "error:".mysqli_error($conn);
         header('location:loginfail.php');
     }
         
    }else{

     $sql="select * from register where email= '".$_POST['username']."'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
     $flag = password_verify($pass,$row['pass']);
     var_dump($row['pass']);
    //  var_dump($_POST)
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
   
 }

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js" defer></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="top-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="./imgs/logo-removebg-preview.png" width="150px" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-xl-auto mb-2 mb-lg-0" id="navbar">
                        <li class="nav-item ms-3">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle" href="viewproductsuser.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTS</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="viewproductsuser.php">BATS</a></li>
                                <li><a class="dropdown-item" href="viewproductsuser.php">BALL</a></li>
                                <li> <a class="dropdown-item" href="viewproductsuser.php">HELMENT</a> </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary btn-outline-success" type="submit">Search</button>
                    </form>

                    <!-- <li class="nav-item m-3"><a class="nav-link" id="login">login</a></li> -->


                </div>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">

                        <img src="./imgs/shopping-cart-empty-side-view.png" width="32px" style="color: #000;" alt="">

                        <span class="add-cart-quantity">4</span>

                    </a>
                </li>
                <!-- <p>hi</p> -->
            </div>
        </nav>
    </div>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image"> -->
                    <img src="./imgs/draw2.webp" alt="" width="500" height="350">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="POST" id="frmLogin"
                    onSubmit="validate();">
                        <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                                      <i class="fab fa-facebook-f"></i>
                                             </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-twitter"></i>
       </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-linkedin-in"></i>
       </button>
                        </div> -->

                        <!-- <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div> -->

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="username" id="user_name" class="form-control form-control-lg" placeholder="Enter a valid email address" required/>
                            <label class="form-label" for="username">Email address</label><span id="user_info"
							class="error-info"></span>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter password" required/>
                            <label class="form-label" for="password">Password</label><span id="password_info"
							class="error-info"></span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" name="login" class="btn btn-primary btn-lg" value="Login" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./register.php" class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
     
        </div>
    </section>

</body>
<script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>

</html>