<!doctype html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/medcare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:39:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('webasset/img/favicon.png') }}" type="image/png">
    <title>DIU Medical Center</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('webasset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/vendors/animate-css/animate.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('webasset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/responsive.css') }}">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <span class="dn_btn"> <i class="ti-location-pin"></i>Medical Center Location</span>
                    <span class="dn_btn"><i class="ti-time"></i>Thursday-Friday - 8:00AM - 10:OOPM</span>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-skype"></i></a></li>
                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                    </ul>	
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="./"><img src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" width="150"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about-us">About</a></li>
                            <li class="nav-item"><a class="nav-link" href=" {{route("patient.profile")}}">Patients</a></li>
                            <li class="nav-item"><a class="nav-link" href="/doctors">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                            
                            <li class="nav-item">
                            <a href="/login" class="nav-link" style="background-color: #2E3094; color: white; padding: 0 10px;border-radius:15%;">Login</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <main class="main-container">
        <form class="login-form">
            <h1 style="text-align: center;">Register</h1>
            <label>Name:</label>
            <br>
            <input type="text" name="name" type="text" placeholder="John Smith">
            <br>
            <label>Email:</label>
            <br>
            <input type="text" name="email" type="email" placeholder="someone@diu.edu.bd">
            <br>
            <label>Password:</label>
            <br>
            <input type="text" name="password" type="password">
            <br>
            <label>Password Again:</label>
            <br>
            <input type="text" name="password1" type="password">
            <br>
            <div style="text-align: center;">
                <input type="submit" class="main_btn" value="Register" style="width: 80px; line-height: 30px; padding: 0;">
            </div>
            <a href="./login" style="text-align: center;"><h6>Already have an account? Login</h6></a>

        </form>

    </main>



    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class="form-inline">
                        <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
                        required="" type="email" />
                        <button class="click-btn btn btn-default">
                            <i class="ti-arrow-right"></i>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('webasset/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('webasset/js/popper.js') }}"></script>
<script src="{{ asset('webasset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('webasset/js/stellar.js') }}"></script>
<script src="{{ asset('webasset/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('webasset/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('webasset/js/waypoints.min.js') }}"></script>
<script src="{{ asset('webasset/js/mail-script.js') }}"></script>
<script src="{{ asset('webasset/js/contact.js') }}"></script>
<script src="{{ asset('webasset/js/jquery.form.js') }}"></script>
<script src="{{ asset('webasset/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('webasset/js/mail-script.js') }}"></script>
<script src="{{ asset('webasset/js/theme.js') }}"></script>
</body>

<!-- Mirrored from themewagon.github.io/medcare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:39:59 GMT -->
</html>