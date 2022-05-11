<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
    </p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<!-- preloader end  -->
<!-- header-area start -->
<header class="transparent-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-4 pt-10 pb-10">
                <ul class="left-content list-none d-flex align-items-center">
                    <li class="d-none d-sm-inline-block">
                        <a class="login-btn" href="contact.html"><i class="far fa-user"></i> My Account</a>
                    </li>
                    <li>
                        <div class="right-language">
                            <div class="dropdown">
                                <a class="language-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    English <i class="fal fa-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">USA</a></li>
                                    <li><a class="dropdown-item" href="#">German</a></li>
                                    <li><a class="dropdown-item" href="#">Chaina</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-8 text-end pt-10 pb-10">
                <div class="footer__social-two">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo-area">
                        <a class="front" href="index-2.html"><img src="{{ asset('img/logo/header-logo-3.png') }}"
                                alt="Header-logo"></a>
                        <a class="back" href="index-2.html"><img src="{{ asset('img/logo/header-logo-1.png') }}"
                                alt="Header-logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-6 text-end text-lg-start">
                    <div class="menu-style-3">
                        <nav id="topheader"
                            class="d-none d-lg-block navbar navbar-expand-lg justify-content-start py-0 pl-60 pl-lg-0">
                            <ul class="navbar-nav list-style-none">
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="index-2.html" id="navbarDropdown2"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="services.html"
                                                id="navbarDropdow2a" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Multipage <i
                                                    class="fal fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu2"
                                                aria-labelledby="navbarDropdown2a">
                                                <li>
                                                    <a class="dropdown-item" href="index-2.html">Home Style 1</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-3.html">Home Style 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-4.html">Home Style 3</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="services.html"
                                                id="navbarDropdow2a" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Onepages <i
                                                    class="fal fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu dropdown-menu2"
                                                aria-labelledby="navbarDropdown2a">
                                                <li>
                                                    <a class="dropdown-item" href="index_onepage.html">Onepage Style 1</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-2_onepage.html">Onepage Style 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-3_onepage.html">Onepage Style 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">Who We Are</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdow2"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="services-details.html">Services
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                        <li>
                                            <a class="dropdown-item" href="team.html">Team</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="team-details.html">Team Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="case-details.html">Case Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="price.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="history.html">Our History</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown5"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                                        <li>
                                            <a class="dropdown-item" href="news.html">News</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="news-details.html">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="right-content">
                            <div class="hamburger-menu d-md-inline-block d-lg-none">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('img/icon/eclips-1.png') }}" alt="Eclips">
                                </a>
                            </div>
                            <div class="d-none d-md-inline-block">
                                <a class="quote-border-btn" href="contant.html">Free Consultancy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.theme-main-menu -->
</header>
<!-- header-area end -->