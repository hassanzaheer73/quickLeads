@extends('layouts.apps.transparent') 
@section('content')
<main>
    <!--slider-area start-->
    <div id="slider-one" class="main-slider-area">
        <div class="slider-bg-three">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="slider__content3 text-center">
                            <h5 class="fw-normal text-white mb-15">We provide the most responsive and
                                functional
                                IT design</h5>
                            <h1 class="main-title-three mb-50">Digital Solutions</h1>
                            <div class="btn-list d-sm-flex align-items-center justify-content-center">
                                <a class="theme_btn" href="contact.html">Free Consultation</a>
                                <div class="video-slide home3 d-flex align-items-center">
                                    <a href="https://www.youtube.com/watch?v=lTxn2BuqyzU" class="popup-video"><i
                                            class="fas fa-play"></i></a>
                                    <h6>How It Works?</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider-area end-->
    <!--services-area start-->
    <section class="services-area-three pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services3 text-center mb-30">
                        <img class="mb-30" src="{{ asset('img/icon/s-3a.png') }}" alt="Services icon">
                        <h5 class="fs-20">Machine Learning</h5>
                        <p>Voice and Data Systems are
                            crucial to the success</p>
                        <a href="services-details.html" class="read-more">Read More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services3 text-center mb-30">
                        <img class="mb-30" src="{{ asset('img/icon/s-3b.png') }}" alt="Services icon">
                        <h5 class="fs-20">Artificial Intelligence</h5>
                        <p>Voice and Data Systems are
                            crucial to the success</p>
                        <a href="services-details.html" class="read-more">Read More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services3 text-center mb-30">
                        <img class="mb-30" src="{{ asset('img/icon/s-3c.png') }}" alt="Services icon">
                        <h5 class="fs-20">Augmented Reality</h5>
                        <p>Voice and Data Systems are
                            crucial to the success</p>
                        <a href="services-details.html" class="read-more">Read More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services3 text-center mb-30">
                        <img class="mb-30" src="{{ asset('img/icon/s-3d.png') }}" alt="Services icon">
                        <h5 class="fs-20">MCyber Security & Data</h5>
                        <p>Voice and Data Systems are
                            crucial to the success</p>
                        <a href="services-details.html" class="read-more">Read More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-area end-->
    <!--about-us-area start-->
    <section class="about-us-area pt-60 pb-90 pb-md-30 pb-xs-30">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 pl-20 pl-lg-15 pl-md-15 pl-xs-15">
                    <div class="founder-quote">
                        <img class="mb-10" src="{{ asset('img/about/about-7.jpg') }}" alt="Image">
                        <div class="about-text-wrapper3 mb-30">
                            <span>Since from 2000</span>
                            <h2>Building Your Better IT Solution</h2>
                            <p class="mb-45 pr-15">The definition of business is an occupation or trade
                                & the purchase and sale of products</p>
                            <div class="cerficate-list-one d-sm-flex align-items-center">
                                <img class="mr-30 mb-10" src="{{ asset('img/about/about-5.jpg') }}" alt="image">
                                <img class="mb-10" src="{{ asset('img/about/about-6.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="approch-quote">
                        <div class="approch-top-item">
                            <span class="title">Our Mission & Vision</span>
                            <p>Voice and Data System are crucial
                                to the success</p>
                                <div class="layer-img"><img src="{{ asset('img/layers/approch-item-bg.png') }}" alt=""></div>
                        </div>
                        <div class="approch-card">
                            <span class="approch-card-title">Company Approch</span>
                            <p>System is a term used to refer to
                                an organized collection symbols
                                & processes that may be used to
                                operate on such symbols.</p>
                            <a class="approch-readmore" href="about.html">Read more</a>
                            <div class="layer-img"><img src="{{ asset('img/layers/approch-card-layer.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->
    <!--core-feature-area start-->
    <section class="core-feature-area core-bg pt-120 pt-md-60 pt-xs-120 pb-30 pb-md-30 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <p class="lh-1 mb-10">Core Features</p>
                        <h2 class="sect-title text-heding3">Company work process</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-4 col-md-4">
                    <div class="core-feature text-center mb-30">
                        <div class="core-content">
                            <h4>Legendary</h4>
                            <h3>Support</h3>
                            <p>Offering Smart Insurance Investment
                                Solutions to Companies</p>
                            <img src="{{ asset('img/icon/f-2a.png') }}" alt="F-icon">
                        </div>
                        <a href="services-details.html" class="read-more">Learn More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="core-feature text-center mb-30">
                        <div class="core-content">
                            <h4>Get Your</h4>
                            <h3>Clarifications</h3>
                            <p>Offering Smart Insurance Investment
                                Solutions to Companies</p>
                            <img src="{{ asset('img/icon/f-2b.png') }}" alt="F-icon">
                        </div>
                        <a href="services-details.html" class="read-more">Learn More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="core-feature text-center mb-30">
                        <div class="core-content">
                            <h4>Maintenance</h4>
                            <h3>Package</h3>
                            <p>Offering Smart Insurance Investment
                                Solutions to Companies</p>
                            <img src="{{ asset('img/icon/f-2c.png') }}" alt="F-icon">
                        </div>
                        <a href="services-details.html" class="read-more">Learn More <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--core-feature-area end-->
    <!--case-study-area start-->
    <section class="case-study-area case-bg2 nav-style-1 pt-115 pt-md-60 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="core-feature-title text-md-start">
                        <p class="text-white">Good Portfolio</p>
                        <h2 class="sect-title text-white">Our Case Studies</h2>
                    </div>
                </div>
            </div>
            <div class="cases-slide2 owl-carousel">
                <div class="item">
                    <div class="cases-wrapper2">
                        <img src="{{ asset('img/case/case-5.jpg') }}" alt="Image">
                        <h6>UI & UX, IT Solution</h6>
                        <h5 class="fs-20 text-heding3">Smartrics Web Solution</h5>
                        <p>Lorem ipsum dolor sit amet, conse
                            ctetur a dipisicing elit</p>
                        <a href="services-details.html" class="read-more">Case Details <span class="f-right"><i
                                    class="fal fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="cases-wrapper2">
                        <img src="{{ asset('img/case/case-6.jpg') }}" alt="Image">
                        <h6>UI & UX, IT Solution</h6>
                        <h5 class="fs-20 text-heding3">Smartrics Web Solution</h5>
                        <p>Lorem ipsum dolor sit amet, conse
                            ctetur a dipisicing elit</p>
                        <a href="services-details.html" class="read-more">Case Details <span class="f-right"><i
                                    class="fal fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="cases-wrapper2">
                        <img src="{{ asset('img/case/case-7.jpg') }}" alt="Image">
                        <h6>UI & UX, IT Solution</h6>
                        <h5 class="fs-20 text-heding3">Smartrics Web Solution</h5>
                        <p>Lorem ipsum dolor sit amet, conse
                            ctetur a dipisicing elit</p>
                        <a href="services-details.html" class="read-more">Case Details <span class="f-right"><i
                                    class="fal fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="cases-wrapper2">
                        <img src="{{ asset('img/case/case-8.jpg') }}" alt="Image">
                        <h6>UI & UX, IT Solution</h6>
                        <h5 class="fs-20 text-heding3">Smartrics Web Solution</h5>
                        <p>Lorem ipsum dolor sit amet, conse
                            ctetur a dipisicing elit</p>
                        <a href="services-details.html" class="read-more">Case Details <span class="f-right"><i
                                    class="fal fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="cases-wrapper2">
                        <img src="{{ asset('img/case/case-6.jpg') }}" alt="Image">
                        <h6>UI & UX, IT Solution</h6>
                        <h5 class="fs-20 text-heding3">Smartrics Web Solution</h5>
                        <p>Lorem ipsum dolor sit amet, conse
                            ctetur a dipisicing elit</p>
                        <a href="services-details.html" class="read-more">Case Details <span class="f-right"><i
                                    class="fal fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col-12 text-center">
                    <p class="text mb-20 lh-1">Challenges are just opportunities in disguise. <b><a
                                class="text-heding3" href="contact.html">Take the challenge!</a></b></p>
                </div>
            </div>
        </div>
    </section>
    <!--case-study-area end-->
    <!--counter-area start-->
    <section class="counter-area">
        <div class="container">
            <div class="counter-bg2 white-bg pt-110 pb-85 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="count-text2 text-center mb-30">
                            <h3><span class="counter">3000</span></h3>
                            <p>Successful projects</p>
                            <h5 class="text-heding3">On the other hand we denounce</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="count-text2 count-line text-center mb-30">
                            <h3><span class="counter">470</span></h3>
                            <p>Active Clients</p>
                            <h5 class="text-heding3">On the other hand we denounce</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="count-text2 text-center mb-30">
                            <h3><span class="counter">100</span>+</h3>
                            <p>Worldwide Base</p>
                            <h5 class="text-heding3">On the other hand we denounce</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter-area end-->
    <!--work-proces-area start-->
    <section class="work-process-area process-bg2 pt-160 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row text-center">
                <div class="section-ttile mb-60">
                    <p class="white-title">Work Process</p>
                    <h2 class="sect-title text-white">Solutions to Company & Individuals</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-box text-center mb-30">
                        <div class="icon">
                            <img src="{{ asset('img/icon/p-2a.png') }}" alt="Icon">
                        </div>
                        <p>Step 01</p>
                        <h5 class="fs-20 text-white">Discuss about project</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-box text-center mb-30">
                        <div class="icon ic-2">
                            <img src="{{ asset('img/icon/p-2b.png') }}" alt="Icon">
                        </div>
                        <p>Step 02</p>
                        <h5 class="fs-20 text-white">Discuss about project</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-box text-center mb-30">
                        <div class="icon">
                            <img src="{{ asset('img/icon/p-2c.png') }}" alt="Icon">
                        </div>
                        <p>Step 03</p>
                        <h5 class="fs-20 text-white">Discuss about project</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-box text-center mb-30">
                        <div class="icon ic-4">
                            <img src="{{ asset('img/icon/p-2d.png') }}" alt="Icon">
                        </div>
                        <p>Step 04</p>
                        <h5 class="fs-20 text-white">Discuss about project</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--work-proces-area end-->
    <!--testimonial-area start-->
    <section class="testimonial-area testimonial-area2 nav-style-1 pt-120 pb-60 pt-md-60 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="core-feature-title text-md-start">
                        <p class="lh-1 mb-10">User Feedbacks</p>
                        <h2 class="sect-title text-heding3">1000+ Active Reviews</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-container-1">
            <div class="testimonial-slide2 owl-carousel">
                <div class="item">
                    <div class="testimonial-text-wrapper2">
                        <div class="rating mb-10">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="author-box">
                            <img class="author-img" src="{{ asset('img/testimonial/t-2a.jpg') }}" alt="Image">
                            <div class="author-content">
                                <h6>Alonso W. William</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <img src="{{ asset('img/testimonial/quorte-1.png') }}" alt="Icon">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-text-wrapper2">
                        <div class="rating mb-10">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="author-box">
                            <img class="author-img" src="{{ asset('img/testimonial/t-2a.jpg') }}" alt="Image">
                            <div class="author-content">
                                <h6>Alonso W. William</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <img src="{{ asset('img/testimonial/quorte-1.png') }}" alt="Icon">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-text-wrapper2">
                        <div class="rating mb-10">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="author-box">
                            <img class="author-img" src="{{ asset('img/testimonial/t-2a.jpg') }}" alt="Image">
                            <div class="author-content">
                                <h6>Alonso W. William</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <img src="{{ asset('img/testimonial/quorte-1.png') }}" alt="Icon">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-text-wrapper2">
                        <div class="rating mb-10">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="author-box">
                            <img class="author-img" src="{{ asset('img/testimonial/t-2a.jpg') }}" alt="Image">
                            <div class="author-content">
                                <h6>Alonso W. William</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <img src="{{ asset('img/testimonial/quorte-1.png') }}" alt="Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial-area end-->
    <!--brand-area start-->
    <section class="brand-area pt-60 pb-80 pb-md-25 pb-xs-25">
        <div class="container">
            <div class="brand-border brand-slide owl-carousel">
                <div class="brand-item">
                    <a class="brand-img" href="#">
                        <img class="mb-50 front" src="{{ asset('img/brand/brand-1.png') }}" alt="Brand">
                        <img class="mb-50 back" src="{{ asset('img/brand/brand-1g.png') }}" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="#">
                        <img class="mb-50 front" src="{{ asset('img/brand/brand-2.png') }}" alt="Brand">
                        <img class="mb-50 back" src="{{ asset('img/brand/brand-2g.png') }}" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="#">
                        <img class="mb-50 front" src="{{ asset('img/brand/brand-3.png') }}" alt="Brand">
                        <img class="mb-50 back" src="{{ asset('img/brand/brand-3g.png') }}" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="#">
                        <img class="mb-50 front" src="{{ asset('img/brand/brand-4.png') }}" alt="Brand">
                        <img class="mb-50 back" src="{{ asset('img/brand/brand-4g.png') }}" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="#">
                        <img class="mb-50 front" src="{{ asset('img/brand/brand-5.png') }}" alt="Brand">
                        <img class="mb-50 back" src="{{ asset('img/brand/brand-5g.png') }}" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-30">1000+ worldwide happy users. <b><a class="text-heding3" href="contact.html">Get
                                In Touch <i class="fal fa-long-arrow-right"></i></a></b></p>
                </div>
            </div>
        </div>
    </section>
    <!--brand-area end-->
    <!--blog-area start-->
    <section class="grey-bg blog-area blog-area-3 pt-115 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <p class="mb-10">News</p>
                        <h2 class="sect-title text-heding3">Blog & Insights</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="blogs-2 mb-30">
                        <div class="blogs__thumb">
                            <a href="news-details.html">
                                <img src="{{ asset('img/blog/blog-9.jpg') }}" alt="Blog Img">
                            </a>
                        </div>
                        <span class="tag">IT Solution</span>
                        <div class="blogs__content">
                            <span class="fs-14 text-white"><i class="fal fa-calendar-alt"></i> 24th June 2022</span>
                            <h3><a class="text-white fs-20" href="news-details.html">Improving lives with technology
                                    – HSE
                                    lighthouse project is automotive has sought to change the way.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="blogs mb-30">
                        <div class="blogs__thumb">
                            <a href="news-details.html">
                                <img class="w-100" src="{{ asset('img/blog/blog-1.jpg') }}" alt="Blog Img">
                            </a>
                        </div>
                        <span class="tag">IT Solution</span>
                        <div class="blogs__content">
                            <p><i class="fal fa-calendar-alt"></i> June 21, 2022</p>
                            <h5><a class="blog-title text-heding3" href="news-details.html">Technology support
                                    allows erie non-profit to serve</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="blogs mb-30">
                        <div class="blogs__thumb">
                            <a href="news-details.html">
                                <img class="w-100" src="{{ asset('img/blog/blog-1.jpg') }}" alt="Blog Img">
                            </a>
                        </div>
                        <span class="tag">IT Solution</span>
                        <div class="blogs__content">
                            <p><i class="fal fa-calendar-alt"></i> June 21, 2022</p>
                            <h5><a class="blog-title text-heding3" href="news-details.html">Technology support
                                    allows erie non-profit to serve</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog-area end-->
    <!--contact-area start-->
    <section class="contact-area pt-115 pb-90 pt-md-55 pb-md-30 pt-xs-55 pb-xs-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title mb-60">
                        <p class="mb-10">Get In Touch</p>
                        <h2 class="sect-title text-heding3">Let's help you!</h2>
                    </div>
                    <form class="row contact-form mb-30" action="#">
                        <div class="col-lg-6 col-md-6">
                            <div class="input-box mb-20">
                                <input type="text" placeholder="Full name**">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-box mail-input mb-20">
                                <input type="text" placeholder="Email address**">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-20">
                            <div class="input-box sub-input">
                                <select name="job" class="job-select">
                                    <option value="Subject">Subject</option>
                                    <option value="">It</option>
                                    <option value="">Development</option>
                                    <option value="">Ui/Ux</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-box text-input mb-15">
                                <textarea name="message" cols="30" rows="10"
                                    placeholder="Enter massge**"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="form-btn form-btn2">Get Free Consultation</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="map-area2 mb-20 pl-40 pl-lg-0 pl-md-0 pl-xs-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14586.16663307975!2d90.3865062!3d23.941279099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1641645837442!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area end-->



</main>
<!-- Fullscreen search -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end fullscreen search -->
@endsection