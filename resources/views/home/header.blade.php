<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>medical@example.com</a>
                <span class="dn_btn"> <i class="ti-location-pin"></i>Find our Location</span>
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
                <a class="navbar-brand logo_h" href="index-2.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index-2.html">Home</a></li> 
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
                        <li class="nav-item"><a class="nav-link" href="department.html">Department</a></li> 
                        <li class="nav-item"><a class="nav-link" href="doctors.html">Doctors</a></li>    
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="element.html">element</a></li>
                            </ul>
                        </li> 
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                      
                        <li class="user_option">

                            @if (Route::has('login'))
                                @auth
              
                               
                                    <form method="POST" action="{{ route('logout') }}" class="form-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm ml-2">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ url('/login') }}" class="btn btn-outline-primary btn-sm ml-2">
                                        <i class="fa fa-user" aria-hidden="true"></i> Login
                                    </a>
                                    <a href="{{ url('/register') }}" class="btn btn-outline-success btn-sm ml-2">
                                        <i class="fa fa-vcard" aria-hidden="true"></i> Register
                                    </a>
                                @endauth
                            @endif
                      
                            
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>