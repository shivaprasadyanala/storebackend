<?php
// $username = $_POST['name'];
   session_start();
//    {
//      if($_SESSION['name']==""){  
//        echo "";
//     // header('Refresh:5,url=<h1>hi</h1>');
//     // header('location:indexlogin.php');
//     // exit();
//    }
//    }
if(isset($_SESSION['name']))
if($_SESSION['name']!=""){
    header('location:indexlogin.php');
}

   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/index.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" defer></script> -->
</head>

<body>
    <!-- navbar start -->
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
    <header>




        <!-- carousel -->


        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div id="t1">
                        <div class="text">
                            <h1>welcome to seven sports</h1>
                            <br>
                            <h5>Place where you find sports equipment</h5>


                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div id="t2">
                        <div class="text">
                            <h1>welcome to seven sports</h1>
                            <br>
                            <h5>Place where you find sports equipment</h5>


                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div id="t3">
                        <div class="text">
                            <h1>welcome to seven sports</h1>
                            <br>
                            <h5>Place where you find sports equipment</h5>


                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </header>


    <!-- start brand -->
    <section class="brand_logos">
        <h2 id="brand">our popular brands</h2>
        <div class="container">
            <div class="logo_imgs">
                <div class="row">

                    <div class="col-md-2">
                        <img src="./imgs/SF logo.jpeg" alt="SG LOGO" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/KOOKABURRA.png" alt="KOOKABURRA logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/adidaslogo.jpg" alt="ADIDAS logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/bdmlogo1.jpg" alt="BDM logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/ss ton logo.png" alt="SS TON logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/SS logo.jpeg" alt="SS logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/DSClogo.png" alt="DSC logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/PROTOS logo.png" alt="PROTOS logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/RNS logo.jpeg" alt="RNS logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/SF logo.jpeg" alt="SF logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/gmlogo.jpeg" alt="GM logo" width="100%" class="img-float logos">
                    </div>
                    <div class="col-md-2">
                        <img src="./imgs/cricket.jpg" alt="" width="100%" class="img-float logos">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end brands -->
    <!-- products -->


    <div>
        <h3 style="text-align: center; " class="mt-5 ">Top products</h3>
        <div class="container ">

            <div class="row justify-content-center ">
                <div class=" product col-12 col-md-3 col-lg-3 p-4 m-2 ">
                    <img src="https://www.bing.com/th?id=OPA.DEVnbbp4peNibQ474C474&o=5&pid=21.1&w=160&h=160&rs=1&qlt=100&dpr=1.25 " alt=" ">
                    <div class="mt-3 ">sg english willow</div>
                    <div>₹ 6,249.00</div>
                    <button class="btn mt-3 btn-primary btn-outline-success mybtn ">cart</button>
                </div>
                <div class=" product col-12 col-md-3 col-lg-3 p-4 m-2 ">
                    <img src="https://www.bing.com/th?id=OPA.%2f%2b4teqccgEXfbg474C474&o=5&pid=21.1&w=160&h=160&rs=1&qlt=100&dpr=1.25 " alt=" ">
                    <div class="mt-3 batname ">Kookubura ghost</div>
                    <div class="price ">₹ 7,249.00</div>
                    <button class="btn mt-3 btn-primary btn-outline-success mybtn ">cart</button>
                </div>
                <div class=" product col-12 col-md-3 col-lg-3 p-4 m-2 ">
                    <img src="https://www.bing.com/th?id=OPA.PgS0IqqQ7vN9xg474C474&o=5&pid=21.1&w=160&h=160&rs=1&qlt=100&dpr=1.25 " alt=" ">
                    <div class="mt-3 ">ton english willow</div>
                    <div>₹ 7,249.00</div>
                    <button class="btn mt-3 btn-primary btn-outline-success mybtn ">cart</button>
                </div>


            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="footer ">
            <div class="container ">
                <div class="row ">
                    <div class=" col-lg-6 col-md-6 col-md-6" id="mycol">
                        <div>
                            <div>
                                <p><i class="bi bi-geo-alt-fill"> </i>7/238,Bhavani sagar road,Near SRT Theatre
                                    <br>P.Puliyapatti-638458
                                </p>
                            </div>
                            <div class="d-flex flex-row ">
                                <a class="ms-2 " href=" "><i class="bi bi-facebook "></i></a>
                                <a class="ms-2 " href=" "><i class="bi bi-twitter "></i></a>
                                <a class="ms-2 " href=" "><i class="bi bi-instagram "></i></a>

                            </div>
                            <p class="mt-4 ">© 2022 seven sports</p>
                            <div>
                                <a href=" "> <i class="bi bi-telephone-fill"></i> +91 9894208074</a>
                                <a href=" "> +91 9003921447</a>
                                <br>
                                <a href="madhan.rajkumar1@gmail.com "> <i class="bi bi-envelope-fill "></i> madhan.rajkumar1@gmail.com
                                </a> <br><br>

                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-6 col-sm-6 col-md-6 " id="mycol">
                        <iframe class="img-fluid " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15738.696714399248!2d78.09085612646571!3d9.537010040711333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b012f9296bc2457%3A0x503048b879e29ac1!2sPalayampatti%2C%20Aruppukkottai%2C%20Tamil%20Nadu%20626112!5e0!3m2!1sen!2sin!4v1642583382272!5m2!1sen!2sin "
                            width="100%" height="450" style="border-radius: 5px;border: 2px solid gba(41, 153, 228, 0.8); " allowfullscreen=" " loading="lazy "></iframe>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
</body>

</html>