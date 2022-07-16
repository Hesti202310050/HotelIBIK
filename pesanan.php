<?php
include"koneksi.php";
session_start();
if ($_SESSION['user'] == "")
{
  header('location:index.php');
}
$profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$_SESSION[user]'");
$row = mysqli_fetch_array($profil);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Ibik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/image/IBIK_1.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="venue.php">Venue</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="assets/image/IBIK_1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="sign_in">
                                <div class="signin_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <div class="bradcam_area breadcam_bg1">
    <h3>Our Venue</h3>
    </div>

        <br>
        <br>    
        <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h4>Luxury Rooms</h4>
                    </div>
                </div>
            </div>
            <div class="venue_area">
             <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_venue">
                        <div class="about_thumb">
                            <img src="./assets/image/venue/room double.jpg" alt="">
                        </div>
                        <h3 align="center">Superior Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Air Conditioner</li>
                            <li>TV Cable</li>
                            <li>WiFi</li>
                            <li>Mini Bar</li>

                        </ul>
                        <div class="col-xl-6">
                        <a href="#" class="book_now">Book Now</a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_venue">
                        <div class="about_thumb">
                            <img src="./assets/image/4-1.jpg" alt="">
                        </div>
                        <h3 align="center">Deluxe Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Air Conditioner</li>
                            <li>TV Cable</li>
                            <li>WiFi</li>
                            <li>Mini Bar</li>
                        </ul>
                        <div class="col-xl-6">
                            <a href="#" class="book_now">Book Now</a>
                            </div>
                            <br>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_venue">
                        <div class="about_thumb">
                            <img src="./assets/image/venue/family.jpg" alt="">
                        </div>
                        <h3 align="center">Family Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Air Conditioner</li>
                            <li>TV Cable</li>
                            <li>WiFi</li>
                            <li>Mini Bar</li>
                        </ul>
                        <div class="col-xl-6">
                            <a href="#" class="book_now">Book Now</a>
                            </div>
                            <br>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_venue">
                        <div class="about_thumb">
                            <img src="./assets/image/venue/suite room.jpg" alt="">
                        </div>
                        <h3 align="center">Suite Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Air Conditioner</li>
                            <li>TV Cable</li>
                            <li>WiFi</li>
                            <li>Mini Bar</li>
                        </ul>
                        <div class="col-xl-6">
                            <a href="#" class="book_now">Book Now</a>
                            </div>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <section>
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-100">
                <br>
                <h4>Meeting Rooms</h4>
            </div>
        </div>
    </div>
    <div class="venue_area">
     <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_venue">
                    <div class="about_thumb">
                        <img src="./assets/image/venue4.jpg" alt="">
                    </div>
                    <h3 align="center">Meeting Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Fully equipped with Screen</li>
                            <li>LCD Projector</li> 
                            <li>Notepad</li>
                            <li>Audio</li>
                            <li>Internet Access</li>
                        </ul>
                        <div class="col-xl-6">
                            <a href="#" class="book_now">Book Now</a>
                            </div>
                            <br>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_venue">
                    <div class="about_thumb">
                        <img src="./assets/image/venue4.jpg" alt="">
                    </div>
                    <h3 align="center">Meeting Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Fully equipped with Screen</li>
                            <li>LCD Projector</li> 
                            <li>Notepad</li>
                            <li>Audio</li>
                            <li>Internet Access</li>
                        </ul>
                        <div class="col-xl-6">
                            <a href="#" class="book_now">Book Now</a>
                            </div>
                            <br>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_venue">
                    <div class="about_thumb">
                        <img src="./assets/image/venue4.jpg" alt="">
                    </div>
                    <h3 align="center">Meeting Room</h3>
                        <h4>Facility</h4>
                        <ul>
                            <li>Fully equipped with Screen</li>
                            <li>LCD Projector</li> 
                            <li>Notepad</li>
                            <li>Audio</li>
                            <li>Internet Access</li>
                        </ul>
                        <div class="col-xl-6">
                            <a href="#" class="book_now">Book Now</a>
                            </div>
                            <br>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-xl-12">
        <div class="section_title text-center mb-100">
            <br>
            <h4>BallRooms</h4>
        </div>
    </div>
</div>
<div class="venue_area">
 <div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="single_venue">
                <div class="about_thumb">
                    <img src="./assets/image/venue6.jpg" alt="">
                </div>
                <h3 align="center">BallRoom</h3>
                    <h4>Facility</h4>
                    <ul>
                        <li>Spacious and Comfortable</li>
                            <li>300 person</li>
                            <li>Luxury design</li>
                    </ul>
                    <div class="col-xl-6">
                        <a href="#" class="book_now">Book Now</a>
                        </div>
                        <br>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="single_venue">
                <div class="about_thumb">
                    <img src="./assets/image/venue6.jpg" alt="">
                </div>
                <h3 align="center">BallRoom</h3>
                    <h4>Facility</h4>
                    <ul>
                        <li>Spacious and Comfortable</li>
                            <li>300 person</li>
                            <li>Luxury design</li>
                    </ul>
                    <div class="col-xl-6">
                        <a href="#" class="book_now">Book Now</a>
                        </div>
                        <br>
            </div>
        </div>

    </div>
</div>


    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Location
                            </h3>
                            <p class="footer_text"> Jl. Rangga Gading No.01, Gudang, Kecamatan Bogor Tengah <br>
                                Kota Bogor, Jawa Barat 16123</p>
                            <a href="https://g.page/ibikesatuan?share" class="btn-details">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservation
                            </h3>
                            <p class="footer_text">0812-6789-9900 <br>
                                kelompok2@gmail.com</p>
                        </div>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>

        <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Login Form</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div><p align="left">Username</p></div>
                                        <div class="form-group">
                                            <input class="form-control valid" name="username" id="username" 
                                            type="text" onfocus="this.placeholder = ''" onblur="this.
                                            placeholder = 'Enter your username'">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div><p align="left">Password</p></div>
                                        <div class="form-group">
                                            <input class="form-control valid" name="password" id="password" 
                                            type="password" onfocus="this.placeholder = ''" onblur="this.
                                            placeholder = 'Enter your password'" >
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/scrollIt.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/gijgo.min.js"></script>

  
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>