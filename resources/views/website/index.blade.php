<html lang="en">

<!-- Mirrored from themewagon.github.io/medcare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:39:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('webasset/img/favicon.png') }}" type="image/png'">
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
    <link rel="stylesheet" href="{{ asset('webasset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('webasset/css/style2.css') }}">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <span class="dn_btn"> <i class="ti-location-pin"></i>Daffodil Smart City, Birulia, Savar,
                        Dhaka</span>
                    <span class="dn_btn"><i class="ti-time"></i>Everyday - 8:00AM - 11:59PM</span>
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
                    <a class="navbar-brand" href=""><img src="{{ asset('webasset/img/logo.png') }}"></a>
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
                            <li class="nav-item"><a class="nav-link" href="{{route("patient.profile")}}">Patients</a></li>
                            <li class="nav-item"><a class="nav-link" href="/doctors">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>

                            @if(Auth::check())
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard') }}" class="nav-link" style="background-color: #2E3094; color: white; padding: 0 10px;border-radius:15%;">Dashboard</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link" style="background-color: #2E3094; color: white; padding: 0 10px;border-radius:15%;">Login</a>
                            </li>
                            @endif


                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-8" style="
            color: white ;
            background-color: rgba(255, 255, 255, 0.0);

            border-radius: 20px;
            padding: 20px;
            text-shadow: 2px 2px 5px #000;
            ">
                    <h1 style="color: white;">DIU Medical Center</h1>
                    <p>
                        Daffodil International University (DIU) values the well-being of its students, teachers, and
                        employees.
                        Health is of utmost importance, and as such, DIU has a well-equipped Medical Centre available at
                        Daffodil Smart City.
                        The medical center operates 16 hours a day, from 8 am to 12 am, ensuring that emergency medical
                        care and first aid
                        are available to students and employees at all times.</p>
                    <a href="#" class="main_btn">Make an Appointment</a>
                    <!-- <a href="#" class="main_btn_light">View Department</a> -->
                </div>
            </div>
        </div>
    </section>

    <script>
        const slides = [{
                img: "{{ asset('webasset/img/diu-medi/chairman-doctor.jpg') }}"
                , text: "Opening of DIU Medical Center with the Chairman sir"
            }
            , {
                img: "{{ asset('webasset/img/diu-medi/doctor-patient.png') }}"
                , text: "A student receiving health checkup"
            }
            , {
                img: "{{ asset('webasset/img/diu-medi/sister.jpg') }}"
                , text: "Healthcare staff at DIU Medical Center"
            }
        ];

        let slideIndex = 0;
        const container = document.querySelector('.banner-area');
        // const caption = document.querySelector('.caption');

        function showSlide(index) {
            container.style.backgroundImage = `url(${slides[index].img})`;
            // caption.textContent = slides[index].text;
        }

        function nextSlide() {
            slideIndex = (slideIndex + 1) % slides.length;
            // if(slideIndex==slides.length) slideIndex=0
            showSlide(slideIndex);
        }

        showSlide(slideIndex);
        setInterval(nextSlide, 3000); // Change image every 3 seconds

    </script>

    <!--================End Home Banner Area =================-->


    <!--================ Feature section start =================-->
    <section class="feature-section" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-layers"></i>
                            </span>Primary Care</h3>
                        <p class="card-feature__subtitle">An so vulgar to on points wanted rapture ous resolving
                            continued
                            household </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-heart-broken"></i>
                            </span>Emergency Cases</h3>
                        <p class="card-feature__subtitle">An so vulgar to on points wanted rapture ous resolving
                            continued
                            household </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-headphone-alt"></i>
                            </span>Online Appointment</h3>
                        <p class="card-feature__subtitle">An so vulgar to on points wanted rapture ous resolving
                            continued
                            household </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Feature section end =================-->

    <!--================ Service section start =================-->

    <div class="service-area area-padding-top" style="display: none;">
        <div class="container">
            <div class="area-heading">
                <div class="col-md-5 col-xl-4">
                    <h3>Health Service</h3>
                </div>
                <div class="col-md-7 col-xl-8">

                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-brain"></i>
                        </span>
                        <h3 class="card-service__title">Neurology Service</h3>
                        <p class="card-service__subtitle">Land meat winged called subdue without a very light in all
                            years
                            sea appear Lesser bring fly first land set female best perform.</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-tooth"></i>
                        </span>
                        <h3 class="card-service__title">Dental Clinic</h3>
                        <p class="card-service__subtitle">Land meat winged called subdue without a very light in all
                            years
                            sea appear Lesser bring fly first land set female best perform</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-face"></i>
                        </span>
                        <h3 class="card-service__title">Plastic Surgery</h3>
                        <p class="card-service__subtitle">Land meat winged called subdue without a very light in all
                            years
                            sea appear Lesser bring fly first land set female best perform</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--================ Service section end =================-->


    <!--================About  Area =================-->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
                    <div class="about-content">
                        <h4>Features</h4>
                        <ul style="list-style-type:disc; margin-left: 10px;">
                            <li>First aid services</li>
                            <li>Prescription of medicines to students, teachers, and staff</li>
                            <li>Health support for local and international students studying and visiting DIU, including
                                nebulization, sugar tests, blood pressure tests, and oxygen therapy</li>
                            <li>Referral of serious patients to authorized hospitals as needed</li>
                            <li>Preparation of health cards upon request</li>
                            <li>Medical support during events such as sports tournaments, Foundation anniversary,
                                convocation, and others</li>
                            <li>Health check-ups</li>
                            <li>Ensuring an acceptable standard of public health and sanitation across the university campus
                            </li>
                            <li>Organization of vaccination programs for the prevention of communicable diseases</li>
                            <li>Arrangement of health camps, blood donation drives, and other healthcare-related campaigns
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->

    <!--================ Team section start =================-->
    <section class="team-area area-padding">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Medcare<br>
                        Experience Doctors</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>We have 2 Doctors, one Physiotherapist, and 3 medical assistants</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="{{ asset('webasset/img/team/1.jpg') }}" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr. Aysha Akhter</a></h3>
                            <p>Medical Officer</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href="#"><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="{{ asset('webasset/img/team/2.jpg') }}" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Sushanta Kumar Ghose</a></h3>
                            <p>Physiotherapist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href="#"><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="{{ asset('webasset/img/team/3.jpg') }}" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr. Md. Fazlay Rabbi Rakib</a></h3>
                            <p>Medical Officer</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href="#"><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Team section end =================-->


    <!--================ appointment Area Starts =================-->
    <section class="appointment-area" style="display: none;">
        <div class="container">

            <div class="appointment-inner">
                <div class="row">
                    <div class="col-sm-12 col-lg-5 offset-lg-1">
                        <h3>Have Some Questions?</h3>
                        <div class="accordion" id="accordionExample">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            God male gathering them it female which green cattle?
                                        </button>

                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Great day without sixth a lesser beginning. Their thing abundantly air moving
                                        saw
                                        fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man
                                        in
                                        deep in open upon.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Moving creepeth moved upon man grass two days?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Great day without sixth a lesser beginning. Their thing abundantly air moving
                                        saw
                                        fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man
                                        in
                                        deep in open upon.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            God male gathering them it female which green cattle?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Great day without sixth a lesser beginning. Their thing abundantly air moving
                                        saw
                                        fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man
                                        in
                                        deep in open upon.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Saw isn't likeness beginning yielding land days she?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Great day without sixth a lesser beginning. Their thing abundantly air moving
                                        saw
                                        fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man
                                        in
                                        deep in open upon.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Saw isn't likeness beginning yielding land days she?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Great day without sixth a lesser beginning. Their thing abundantly air moving
                                        saw
                                        fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man
                                        in
                                        deep in open upon.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="appointment-form">
                            <h3>Make an Appointment</h3>
                            <form action="#">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" required>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" cols="20" rows="7" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                                </div>
                                <a href="#" class="main_btn">Make an Appointment</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!--================ appointment Area End =================-->


    <!-- ================ testimonial section start ================= -->
    <section class="testimonial" style="display: none;">
        <div class="container">
            <div class="testi_slider owl-carousel owl-theme">
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="{{ asset('webasset/img/elements/tes1.jpg') }}" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That,
                                the
                                saw very years created for seed have without. Can't him fowl his can not ready for game”
                            </p>
                            <h4>- আনিসুল হক -</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="{{ asset('webasset/img/elements/tes1.jpg') }}" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That,
                                the
                                saw very years created for seed have without. Can't him fowl his can not ready for game”
                            </p>
                            <h4>- আনিসুল হক -</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="{{ asset('webasset/img/elements/tes1.jpg') }}" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That,
                                the
                                saw very years created for seed have without. Can't him fowl his can not ready for game”
                            </p>
                            <h4>- আনিসুল হক -</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ Hotline Area Starts ================= -->
    <section class="hotline-area text-center area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>01847140120</span>
                    <p class="pt-3">
                        Email: diumc@daffodilvarsity.edu.bd
                        <br>
                        Ambulance Hotline Number: 01847334999


                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Hotline Area End ================= -->


    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li><a href="https://daffodilvarsity.edu.bd/article/contact">Contact</a></li>
                        <li><a href="https://pd.daffodilvarsity.edu.bd/contact-us" target="_blank">Meet With Us</a></li>

                        <li><a href="https://daffodilvarsity.edu.bd/article/copyright-issue">Report Copyright Infringement</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/security-issues">Report on Security Issues</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/photos/pdf/Report-on-traffic-mgt.pdf" target="_blank">Recom. For Traffic Mgt</a></li>
                        <li><a href="https://newsletter.daffodilvarsity.edu.bd/" target="_blank">Newsletters</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/location">Location Map</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/article/corona">Covid-19 updates</a></li>
                        <li><a href="https://daffodil.family/about/family-logo" target="_blank">Logos (Daffodil Family)</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Branding</h4>
                    <ul>
                        <li><a href="http://bd.daffodil.family/" target="_blank">DIU Branding</a></li>
                        <li><a href="http://career.daffodilvarsity.edu.bd/?app=home" target="_blank">Career Opportunities</a></li>
                        <li><a href="https://blog.daffodilvarsity.edu.bd" target="_blank">Blog</a></li>
                        <li><a href="http://campuslife.daffodil.university/" target="_blank">Photo Gallery</a></li>
                        <li><a href="http://diupress.com/" target="_blank">DIU Press</a></li>
                        <li><a href="http://employability.daffodilvarsity.edu.bd" target="_blank">Employability 360</a></li>
                        <li><a href="https://it.daffodilvarsity.edu.bd" target="_blank">DIU IT</a></li>
                        <li><a href="http://artofliving.social/" target="_blank">Artofliving</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 single-footer-widget">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="https://skill.jobs/" target="_blank">skill.jobs</a></li>
                        <li><a href="https://internship.daffodilvarsity.edu.bd" target="_blank">Internship Portal</a></li>
                        <li><a href="https://convocation.daffodilvarsity.edu.bd" target="_blank">Convocation</a></li>
                        <li><a href="https://daffodilvarsity.edu.bd/flipbook/diu-annual-report" target="_blank">DIU Annual Report</a></li>
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
                        <form target="_blank" action="https://daffodilvarsity.edu.bd/save/subscriber" method="post" class="form-inline">
                            <input type="hidden" name="_token" value="16J7zJtxO5yF0cqry1r10AW46ryMvvrX40hi9MVf" autocomplete="off">
                            <input class="form-control" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="" type="email" />
                            <button class="click-btn btn btn-default">
                                <i class="ti-arrow-right"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                    <h4>Connect With Us</h4>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/daffodilvarsity.edu.bd" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/daffodilvarsity" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/daffodil.university/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/user/webmasterdiu" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/daffodil-international-university/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.pinterest.com/daffodilvarsity/" target="_blank"><i class="fab fa-pinterest"></i></a>
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
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('webasset/js/theme.js') }}"></script>
</body>

<!-- Mirrored from themewagon.github.io/medcare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:39:59 GMT -->

</html>
