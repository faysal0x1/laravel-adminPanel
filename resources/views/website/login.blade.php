<!doctype html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/medcare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:39:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('webasset/img/favicon.png') }}" type="image/png">
    <title>DIU Medical Center</title>
    <script src="https://ashikur-rahman-shad.github.io/kawaii-ui/kawaii-ui/scripts/kawaii2.js" defer></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('webasset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/vendors/animate-css/animate.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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
                    <a class="navbar-brand logo_h" href="./"><img
                            src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" width="150"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about-us">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route("patient.profile")}}">Patients</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/doctors">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>

                            <li class="nav-item">
                                <a href="/login" class="nav-link"
                                    style="background-color: #2E3094; color: white; padding: 0 10px;border-radius:15%;">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <main class="main-container">
        <form class="login-form" action="{{ route('login') }}" method="POST">
            <h1 style="text-align: center;">Login</h1>
            <label>Email:</label>
            <br>
            <input type="text" name="email" type="email" required>
            <br>
            <label>Password:</label>
            <br>
            <input type="password" name="password" type="password" required>
            <br>
            <div style="text-align: center;">
                <input type="submit" class="main_btn" value="Login" style="width: 80px; line-height: 30px;">
            </div>
            <a href="./register" style="text-align: center;">
                <h6>Forget Password</h6>
            </a>
            <a href="./register" style="text-align: center;">
                <div>No Account? Register</div>
            </a>

        </form>

    </main>



    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li><a href="https://daffodilvarsity.edu.bd/article/contact">Contact</a></li>
                        <li><a href="https://pd.daffodilvarsity.edu.bd/contact-us" target="_blank">Meet With Us</a></li>

                        <li><a href="https://daffodilvarsity.edu.bd/article/copyright-issue">Report Copyright
                                Infringement</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/security-issues">Report on Security
                                Issues</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/photos/pdf/Report-on-traffic-mgt.pdf"
                                target="_blank">Recom. For Traffic Mgt</a></li>
                        <li><a href="https://newsletter.daffodilvarsity.edu.bd/" target="_blank">Newsletters</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/location">Location Map</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/corona">Covid-19 updates</a></li>
                        <li><a href="https://daffodil.family/about/family-logo" target="_blank">Logos (Daffodil
                                Family)</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Branding</h4>
                    <ul>
                        <li><a href="http://bd.daffodil.family/" target="_blank">DIU Branding</a></li>
                        <li><a href="http://career.daffodilvarsity.edu.bd/?app=home" target="_blank">Career
                                Opportunities</a></li>
                        <li><a href="https://blog.daffodilvarsity.edu.bd" target="_blank">Blog</a></li>
                        <li><a href="http://campuslife.daffodil.university/" target="_blank">Photo Gallery</a></li>
                        <li><a href="http://diupress.com/" target="_blank">DIU Press</a></li>
                        <li><a href="http://employability.daffodilvarsity.edu.bd" target="_blank">Employability 360</a>
                        </li>
                        <li><a href="https://it.daffodilvarsity.edu.bd" target="_blank">DIU IT</a></li>
                        <li><a href="http://artofliving.social/" target="_blank">Artofliving</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="https://skill.jobs/" target="_blank">skill.jobs</a></li>
                        <li><a href="https://internship.daffodilvarsity.edu.bd" target="_blank">Internship Portal</a>
                        </li>
                        <li><a href="https://convocation.daffodilvarsity.edu.bd" target="_blank">Convocation</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/flipbook/diu-annual-report" target="_blank">DIU
                                Annual Report</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/flipbook/brochure">Brochure</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/prospectus">Prospectus</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/forms">Forms</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/downloads">Brand Documents</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/apps">Apps</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Subscribe Us!</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://daffodilvarsity.edu.bd/save/subscriber" method="post"
                            class="form-inline">
                            <input type="hidden" name="_token" value="16J7zJtxO5yF0cqry1r10AW46ryMvvrX40hi9MVf"
                                autocomplete="off">
                            <input class="form-control" name="email" placeholder="Enter email address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                required="" type="email" />
                            <button class="click-btn btn btn-default">
                                <i class="ti-arrow-right"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                    type="text" />
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                    <h4>Connect With Us</h4>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/daffodilvarsity.edu.bd" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/daffodilvarsity" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/daffodil.university/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/user/webmasterdiu" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/daffodil-international-university/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://www.pinterest.com/daffodilvarsity/" target="_blank"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="tel: 01713493000"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://gmail.com/" target="_blank"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-12 footer-text m-0 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> Daffodil International University. All rights reserved.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
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
