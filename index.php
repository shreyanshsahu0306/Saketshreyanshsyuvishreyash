<?php 
session_start();
if (isset($_SESSION['email'])) {
  # code...
  include 'logoutnav.php';
}
else{
  include 'loginnav.php';
}
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Weddingz</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->


    

    <!--stylesheet for navbar brand-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

    <!---FONT AWESOME-->
    <script src="https://kit.fontawesome.com/bb81b3fcd8.js" crossorigin="anonymous"></script>
</head>


<body>
    
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <div class="navbar-brand">
                        <a href="index.html">
                            <h1 style="color: aliceblue; font-weight:bold; font-family:  Ubuntu;  font-size: 3.5rem; ">
                                Weddingz</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="index-2.html">Vendors</a>
                                <ul>
                                    <li><a href="index-2.html" title="Home" class="animsition-link">DJ</a></li>
                                    <li><a href="vendors/transport.php" title="Home v.2"
                                            class="animsition-link">Transport</a>
                                    </li>
                                    <li><a href="index-2.html" title="Home v.2"
                                            class="animsition-link">Choreographers</a></li>
                                    <li><a href="vendors/planners.php" title="Home v.2" class="animsition-link">Wedding
                                            Planners</a></li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Make Up
                                            Artist</a></li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Mehendi
                                            Artist</a></li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Decorators</a>
                                    </li>
                                    <li><a href="index-2.html" title="Home v.2"
                                            class="animsition-link">Photographers</a></li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Tailoring</a>
                                    </li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Gifting</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Clothings</a>
                                <ul>
                                    <li><a href="vendor-listing-row-map.html" title="Home"
                                            class="animsition-link">Men</a></li>
                                    <li><a href="vendor-listing-sidebar.html" title="Home"
                                            class="animsition-link">Women</a></li>
                                    <li><a href="vendor-listing-no-sidebar.html" title="Home"
                                            class="animsition-link">Kids</a></li>

                                </ul>
                            </li>
                            <li><a href="vendor-details.html">Grocery</a>
                                <ul>
                                    <li><a href="vendor-details.html">Vegetables</a></li>
                                    <li><a href="vendor-details-tabbed.html">Fruits</a></li>
                                    <li><a href="vendor-profile.html">Dairy</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="login.php" class="btn btn-default btn-sm" style="font-family:open sans;">
                                <i class="fas fa-user-circle"></i> Login
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div id="slider" class="owl-carousel owl-theme slider">
        <div class="item">
            <div class="slider-pic"><img src="images/slider1.jpg" alt="Mirror Edge"></div>
        </div>
        <div class="item">
            <div class="slider-pic"><img src="images/slider2.jpg" alt="Wedding couple pic"></div>
        </div>
        <div class="item">
            <div class="slider-pic"><img src="images/slider3.jpg" alt="The Last of us"></div>
        </div>
    </div>
    <div class="find-section">
        <!-- Find search section-->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 finder-block">
                    <div class="finder-caption">
                        <h1>Plan Your Perfect Wedding</h1>
                        <p><strong>Various Wedding Vendors </strong>for your special date &amp; Find the perfect venue
                            &amp; save your date.</p>
                    </div>
                    <div class="finder-form-transparent">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <select class="form-control">
                                        <option>Select Vendor Category</option>
                                        <option value="Venue">Venue</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Cake">Cake</option>
                                        <option value="Dj">Dj</option>
                                        <option value="Florist">Florist</option>
                                        <option value="Videography">Videography</option>
                                        <option value="jewellery">Jewellery</option>
                                        <option value="Gifts">Gifts</option>
                                        <option value="Dresses">Dresses</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-control">
                                        <option>Select City</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Gandhinagar">Gandhinagar</option>
                                        <option value="Rajkot">Rajkot</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Vadodara">Vadodara</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Let's Go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Find search section-->
    </div>
    <!-- slider end-->
    <div class="section-space80">
        <!-- Feature Blog Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Plan your wedding one step at a time</h1>
                        <p>Simple wedding planning tools to help you stay on track. </p>
                    </div>
                </div>
            </div>




<!-----ameneties
            <div class="features">
                <div class="row">
                    

                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-camera-retro fa-3x"></i>
                        <h3>Easy to use</h3>


                    </div>


                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-users fa-3x"></i>
                        <h3>Vendors</h3>


                    </div>



                    <div class="feature-box col-lg-3">

                        <i class="icon far fa-calendar-alt fa-3x"></i>
                        <h3>Organized Events</h3>


                    </div>

                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-map-marker-alt fa-3x"></i>

                        <h3>Availability</h3>


                    </div>
                </div>
                <br><br>
                <div class="row">

                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-utensils fa-3x"></i>

                        <h3>Meals</h3>


                    </div>

                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-magic fa-3x"></i>

                        <h3>Bridal Make Up</h3>


                    </div>
                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-place-of-worship fa-3x"></i>

                        <h3>Venue</h3>


                    </div>

                    <div class="feature-box col-lg-3">

                        <i class="icon fas fa-wifi fa-3x"></i>

                        <h3>Connectivity</h3>


                    </div>

                    
                </div>
            </div> ---->
            <!-- /.feature center -->
            <!-----  <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 10px;"> <a href="#" class="btn btn-primary">Get Started</a> </div>
            </div> -------- get started button-->

<!----ameneties part 2-->

<div class="row">
    <div class="col-xs-6 new-card">
        <img src="images2/11.png" alt="" id = "ame" class="img-grid">
        <div class="top-left"><a href="#" class="amenity">Bridal Makeup</a>
            
        </div></img>
    </div>
    <div class="col-xs-6 new-card">
        <img src="images2/22.png" alt="" id = "ame" class="img-grid">
        <div class="top-left"><a href="#" class="amenity">Meals</a></div></img>
    </div>
</div>

<br>
<div class="row">
    <div class="col-xs-6 new-card">
        <img src="images2/33.png" alt="" id = "ame" class="img-grid">
        <div class="top-left"><a href="#" class="amenity">Venue</a></div></img>
    </div>
    <div class="col-xs-6 new-card">
        <img src="images2/44.png" alt="" id = "ame" class="img-grid">
        <div class="top-left"><a href="#" class="amenity">Connectivity</a></div></img>
    </div>
</div>

<br>
<div class="row">
    <div class="col-xs-6 new-card">
        <img src="images2/66.png" alt="" id = "ame" class="img-grid">
        <div class="top-left"><a href="#" class="amenity">Easy to Use</a></div></img>
    </div>
    <div class="col-xs-6 new-card">
        <img src="images2/55.png" alt="" id = "ame" class="img-grid">
        <div class="top-left"><a href="#" class="amenity">Vendors</a></div></img>
    </div>
</div>





        </div>
    </div>
    <!-- Feature Blog End -->
    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>More than 2,000 Wedding Destinations</h1>
                        <p> Donec sagittis blandit ex consequat pulvin ondimentum tortor eitae suscipit augupibus </p>
                    </div>
                </div>
            </div>


            <!--NEW GRID TESTING-->

           <div class="row">
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="images/radisson.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Hotel Radisson 4/5</a><span
                                    class="fa fa-star checked"></span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="images/ukp.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Usha Kiran Palace 5/5</a><span
                                    class="fa fa-star checked"></span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="images/pv.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Hotel Prince Viraj 3.5/5</a><span
                                    class="fa fa-star checked"></span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="images/options.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Options Lawn 4/5</a><span
                                    class="fa fa-star checked"></span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="images/hotel-gwalior-regency.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Gwalior Regency 4/5</a><span
                                    class="fa fa-star checked"></span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="images/n.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Narayanam 4.5/5</a><span
                                    class="fa fa-star checked"></span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
            </div>



            <!---NEW GRID TESTING-->

            <div class="row">
                <div class="col-md-12 text-center"><a href="venue-listing.html" class="btn btn-default btn-lg">Browse
                        All Listings</a></div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <!-- Real Weddings -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Gallery</h1>
                        <p>Some of the best moments captured by our Photographers.</p>
                    </div>
                </div>
            </div>


            <!--GALLERYYYYY ORIGINAL-
            <div class="row">
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        
                        <div class="real-wedding-img">
                            <a href="#"><img src="images/real-wedding-1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        
                        <div class="real-wedding-img">
                            <a href="#"><img src="images/real-wedding-2.jpg" alt="" class="img-responsive"></a>
                        </div>

                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                       
                        <div class="real-wedding-img">
                            <a href="#"><img src="images/real-wedding-3.jpg" alt="" class="img-responsive"></a>
                        </div>

                    </div>
                    
                </div>

                


            </div>---->

            <!----NEW GALLERYYYYYYYYYY-->
            
            <div class="row">
                <div class="shift">
                    <div class="col-md-4">
                        <div class=" flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="images/real-wedding-1.jpg" alt="Avatar" >
                              </div>
                              <div class="flip-card-back">
                                <h1>Captured By</h1>
                                <p>Shreyash Singh Sachan</p>
                                <p>5+ Years Experience</p>
                              </div>
                            </div>
                          </div>
                </div>
                </div>
                <div class="shift">
                    <div class=" col-md-4">
                        <div class=" flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="images/real-wedding-2.jpg" alt="Avatar" >
                              </div>
                              <div class="flip-card-back">
                                <h1>Captured By</h1>
                                <p>Shreyansh Sahu</p>
                                <p>5+ Years Experience</p>
                              </div>
                            </div>
                          </div>
                </div>
                </div>
                <div class="shift">
                    <div class="col-md-4">
                        <div class=" flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="images/real-wedding-3.jpg" alt="Avatar" >
                              </div>
                              <div class="flip-card-back">
                                <h1>Captured By</h1>
                                <p>Yuvraj Rajput</p>
                                <p>5+ Years Experience</p>
                              </div>
                            </div>
                          </div>
                </div>
                </div>
            </div>
            
            
            

            <br><br><br>
           


            

            <div class="row">
                <div class="col-md-12 text-center"><a href="gallery/index.html" class="btn btn-default btn-lg">View
                        Gallery</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- /.Real Weddings -->
    <!---- <section class="module parallax parallax-2">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 parallax-caption">
                    <h2>Are you trying our planning tools ?</h2>
                    <p>Donec sagittis blandit ex consequat pulvinm condimentum tortor lorem ipsum oleo sit ament eitae
                        suscipit augupibus. </p>
                    <a href="#" class="btn btn-primary">Start Planning Today</a>
                </div>
            </div>
        </div>
    </section>---->


    <div class="bg-video-wrap">
        <video width="1920" height="1080" src="videowedding.mp4" loop muted autoplay>
        </video>
        <div class="overlay">
        </div>
        <h1 class="videobg">PLAN A SUCCESSFUL WEDDING WITH US
        </h1>
    </div>







    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Three Reason To Choose us</h1>
                        <p>Donec sagittis blandit ex consequat pulvinm condimentum tortor eitae suscipit augupibus </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well-box feature-block text-center">
                        <div class="feature-icon"><i class="fas fa-dice-one fa-4x dice-icon"></i></i></div>
                        <div class="feature-info">
                            <h3>20 Years Experiance</h3>
                            <p>We are never short of suggestions or inspiring ideas.We will support you and advise you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well-box feature-block text-center">
                        <div class="feature-icon"><i class="fas fa-dice-two fa-4x dice-icon"></i></i>
                        </div>
                        <div class="feature-info">
                            <h3>100 real weddings</h3>
                            <p>Every wedding is unique and has a special story. Share all the details of your special
                                moments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well-box feature-block text-center">
                        <div class="feature-icon"><i class="fas fa-dice-three fa-4x dice-icon"></i></i></div>
                        <div class="feature-info">
                            <h3>1500 + Wedding Suppliers</h3>
                            <p> Sed semper sapien commodo iaculis nec quis lacus malesuada, icula tortor. ut
                                turpiliquepellentesque. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.Footer -->
    <footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">

        <div class="container">
            <div class="bottom-line">
                <div class=" d-flex justify-content-center">
                    <div class="column ">

                        <div>
                            <span style="color: rgba(255, 255, 255, 0.8);">
                                <h3>Register yourself and grow your Business.</h3>
                            </span>
                        </div>

                        <div class=" d-flex justify-content-center">
                            <p><a class="btn btn-danger" href="#">Add Property</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="width:100%;text-align:left;margin-left:0">
            <div class="row row-pb-md">
                <div class="col-md-4 fh5co-widget">
                    <h3>Download our app</h3>

                    <button type="button" class="btn btn-outline-light btn-lg download-button"><i
                            class="fab fa-apple"></i>
                        Download</button>

                    <button type="button" class="btn btn-outline-light btn-lg download-button"
                        style="margin-left: 2px;"><i class="fab fa-google-play"></i>
                        Download</button>
                </div>
                <div class="col-md-8">
                    <h3>Useful Links</h3>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <ul class="fh5co-footer-links">
                                <li><a href="about/index.html">About Us</a></li>
                                <li><a href="#">Teams/Careers</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="ContactFrom/index.html">Contact Us</a></li>

                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Official Blog</a></li>
                                <li><a href="#">Press Kit</a></li>
                                <li><a href="#">Our Circle</a></li>
                                <li><a href="#">Our Frames</a></li>

                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Guest Policies</a></li>
                                <li><a href="#">Privacy Policies</a></li>
                                <li><a href="#">Responsible Disclosures</a></li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>


            <hr style="width:100%;text-align:left;margin-left:0;">



            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p style="color: rgba(255, 255, 255, 0.8);">
                        <small class="block">&copy; 2021 | All Rights Reserved. X2 Infotech</small>

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /. Tiny Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <!-- slider -->
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <!-- sticky header -->
    <script type="text/javascript">
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function () {
            if ($(".header-v2").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });
    </script>
    <script src="https://kit.fontawesome.com/bb81b3fcd8.js" crossorigin="anonymous"></script>
</body>




</html>