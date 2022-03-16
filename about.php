<?php
// $username = $_POST['name'];
   session_start();

   if($_SESSION['name']==""){
    //    echo "hi";
    
    header('location:index.php');
    // exit();
   }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <!-- This is a nav bar -->

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

                    <?php 
                    // session_start();
                      if($_SESSION['name']==""){
                         
                         echo "<li class='nav-item m-3'><a class='nav-link' id='login' href='login.php'>login</a></li>"; 
                      }
                    
                      else{
                           echo "welcome user";
                          echo "<li class='nav-item m-3'><a class='nav-link' id='login' href='logout.php'>logout</a></li>";
                      }  
                     
                    
                      ?>


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



    <!-- This is Shop name  -->

    <section class="about_name">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fl">
                        <h2 class="name">SEVEN SPORTS CRICKET SHOP </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- paragraphs here  -->

    <section class="main">
        <div class="container padd">
            <div class="row">
                <div class="col-md-8">
                    <div class="about_text">
                        <p>Hello and Welcome. Thanks for taking the time to get to know us.
                        </p>
                        <p>
                            The quintessential cricketing advice <b>“Keep it Simple”</b> is the core belief at Cricketer Shop. We have been online since Since . Cricketer Shop has remained the leading online cricket shop and first choice of cricketers
                            the world over. Thanks a lot for your support. During these years, we have delivered cricket equipment to 80 different countries in the world. We derive a lot of pleasure seeing cricket in almost every corner of this small
                            world!

                        </p>
                        <p>
                            While we are thrilled with the above, what gives us most satisfaction is that in spite of this growth, we are able to preserve a "little corner cricket shop" level of service and interaction. We need your support and feedback to keep this culture. If
                            you feel not served well, please do let us know and we'll pull ourselves! It's a site for the cricketers. Everything from site design to business model to delivery mechanism is made to deliver to you in fewest steps wicket
                            to wicket bowling!
                        </p>

                        <p>
                            Focus - Only Cricket…Nothing Else. Cricket is a game of focus - 540 times in a day. We just focus on cricket. Within cricket too we realize that there are many varieties. Personally we respect and enjoy all forms but for business, we focus only on the
                            real cricket- the variety played with a wooden bat and a leather ball. This is the reason, you won't find any carom boards or badminton racquets with us! Every Shot in the Book - Complete Cricket Shop...Full Range. Having gone
                            narrow in our focus, we've tried to bring the entire range of cricket equipment under one roof. You will find the top cricket brands here and also the full gamut of equipment from cricket shoes to bat care kits. We carry the
                            full range of Sizes for Boys and Men. Also, we have left handed equipment for our elegant shot makers!

                        </p>

                        <p>
                            Lifelike Display - Ultra Slo Mo...See Every Detail. More than any other sport we know, Cricket places grace and beauty in the heart of the game. It's probably the only sport where a shot can earn full score…and yet that shot be described as “ugly.” Beauty
                            in cricket is not just aesthetics for the sake of it. Grace, Class and Beauty in cricket are utilitarian! It's our endeavour to bring the beautiful products to life through our in-house product photography. We hate those poor
                            grainy photos, lifted from the internet that one sees on most sites. We are sure, you hate those too. Almost all photos on the site are shot by us. A few photos have been used with explicit permission of brands and a couple
                            of lovely photos gifted to us by cricket photographers.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about_img">
                        <img src="./imgs/image1.jpeg" class="img-float" width="100%" alt="image...">
                        <img src="./imgs/cricket.jpeg" class="img-float" width="100%" alt="image...">
                    </div>


                </div>
            </div>
        </div>
    </section>



    <!-- Brands Scrolling -->

    <section class="about_brands">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fl">
                        <marquee behavior="" direction="" scrollamount="13">
                            <h3 class="brands_avail">BRANDS AVAILABLE WITH US ARE...</h3>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Brand images -->

    <section class="brand_logos">
        <div class="container">
            <div class="logo_imgs">
                <div class="row">

                    <div class="col-md-2">
                        <img src="./imgs/SG logo.jpeg" alt="SG LOGO" width="100%" class="img-float logos">
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



    <!-- Address and Location  -->

    <!-- <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget contact_wd">

                        <br>
                        <h4 class="footer_title">SEVEN SPORTS CRICKET SHOP </h4>
                        <img src="imgs/7sports.jpeg" class="img-float" alt="Shop Logo..." width="100px" height="30px">
                        <a href="https://www.google.com/maps/place/SRT+Theater,+Avinashi-Puliampatty-Bhavanisagar+Rd,+Puliampatti,+Tamil+Nadu+638459/@11.3570901,77.1655302,18z/data=!4m9!1m2!2m1!1s7%2F238,Bhavani+Sagar+Road,Near+SRT+Theatre,Puliampatti-638459!3m5!1s0x3ba8e1bdc1204811:0xb81eeece6bfaeddc!8m2!3d11.3570114!4d77.1646032!15sCjw3LzIzOCxCaGF2YW5pIFNhZ2FyIFJvYWQsTmVhciBTUlQgVGhlYXRyZSxQdWxpYW1wYXR0aS02Mzg0NTmSAQ1tb3ZpZV90aGVhdGVy">
                            <i class="fa fa-map-marker"></i>
                            <p class="cla">7/238,Bhavani Sagar Road,Near SRT Theatre,P.Puliyampatti-638459.
                            </p>
                        </a>
                        <a href=""> <i class="cla fa-mobile"></i> +91 9894208074</a>

                        <a href=""> <i class="cla fa-mobile"></i> +91 9003921447</a>

                        <a href="madhan.rajkumar1@gmail.com"> <i class="fa fa-envelope"></i> madhan.rajkumar1@gmail.com
                        </a> <br><br>
                    </div>
    <div class="single-footer-widget contact_wd">
        <h6 class="footer_title">Follow us</h6>
    </div>
    <div class="footer-bottom d-flex justify-content-between align-items-center">

        <div class="footer-social">
            <a href="https://www.facebook.com/profile.php?id=100074202422548">Facebook</a>
            <a href="https://www.instagram.com/sagpsagp/">Instagram</a>
            <a href="https://twitter.com/home">Twitter</a>
        </div>
    </div>
    </div>

    <div class="col-lg-8 col-md-6 col-sm-6">
        <div class="single-footer-widget">
            <h6 class="footer_title">LOCATION MAP</h6>
            <div id="mc_embed_signup">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1955.8467023589476!2d77.1655302!3d11.3570901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8e1bdc1204811%3A0xb81eeece6bfaeddc!2sSRT%20Theater%2C%20Avinashi-Puliampatty-Bhavanisagar%20Rd%2C%20Puliampatti%2C%20Tamil%20Nadu%20638459!5e0!3m2!1sen!2sin!4v1642255830627!5m2!1sen!2sin"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <div class="row footer-bottom d-flex justify-content-between align-items-center">
        <p class="col-lg-12 col-md-12 footer-text text-center m-0">
           
        </p>
    </div>
    </div>
    </footer> -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>