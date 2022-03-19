<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

                    <li class="nav-item m-3"><a class="nav-link" id="login" href="login.php">login</a></li>


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
    <section class="h-100 bg-dark">
        <form class="d-flex" action="reg.php" method="POST">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="d-flex justify-content-center row g-0">
                            <!-- <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div> -->
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase text-center">Registration form</h3>
                                
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="fname" name="fname" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="laname" name="lname" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- <div class="col-md-6 mb-4"> -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                        
                                    </div>
                                    <?php 
                                       if(isset($_GET['error'])) 
                                         if($_GET['error'] == 'email') echo "<p style='color:red'>email already exist</p>";
                                  

                                        ?>
                                    <!-- </div> -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Password</label>
                                    </div>
                                    
                                    <div class="form-outline mb-4">
                                        <input type="number" id="phno" name="pno" title="Phone number must contain 10 digits, Invalid Phone number" pattern="[1-9]{1}[0-9]{9}" required class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Phone Number</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="address"  name="address" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Address</label>
                                    </div>


                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="female" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="other" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <select class="select" name="state">
                                                <option value="state">Select your State</option>
                                                <option value="tn">tn</option>
                                                <option value="ap">ap</option>
                                                <option value="ts">ts</option>
                                            </select>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <select class="select" name="city">
                                                <option value="city">Select your City</option>
                                                <option value="hyd">hyd</option>
                                                <option value="ban">ban</option>
                                                <option value="chen">chen</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-outline mb-4">
                                        <input type="number" id="pin" name="pin" min="100000" max="1000000" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example90">Pincode</label>
                                    </div>


                                   <div class="d-flex justify-content-center pt-3">
                                        <!-- <button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                                        <!-- <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button> -->
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit Form">
                                    </div>
                                

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
  
</body>
<!-- <script src="regist.js"></script> -->

</html>