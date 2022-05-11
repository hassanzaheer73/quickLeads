@extends('layouts.apps.simple')
@section('content')
<main>
    <!--page-title-area start-->
    <section class="page-title-area title-area3" style="background-image: url(img/page-title/page-title-bg3.jpg);">
        <div class="container">
            <div class="row align-items-center pt-140 pt-xs-60">
                <div class="col-lg-6 col-md-7">
                    <div class="page-title-wrapper text-start">
                        <p class="fs-18 mb-1">Responsive & functional IT design</p>
                        <h2 class="page-title text-heding">About Company</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 text-md-end">
                    <ul class="breadcrumb list-none breadcrumb-bg">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active text-heding fw-bold" aria-current="page">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--about-us-area start-->
    <section class="about-us-area pt-145 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-text-wrapper2 mb-30 pr-75">
                        <h6 class="semi-title semi-title2">About Company</h6>
                        <h2 class="sect-title text-heding2 mb-35">Bringing New IT Business Solutions</h2>
                        <ul class="text-list text-list2 list-none border-bottom">
                            <li>
                                <div class="services-list">
                                    <h5 class="fs-20 text-heding2">Engaging Group Discussion</h5>
                                    <p>Automotive has sought to change the way customers think about
                                        auto service by providing knowledgeable</p>
                                </div>
                            </li>
                            <li>
                                <div class="services-list mb-0">
                                    <h5 class="fs-20 text-heding2">Software Engineering</h5>
                                    <p>Automotive has sought to change the way customers think about
                                        auto service by providing knowledgeable</p>
                                </div>
                            </li>
                        </ul>
                        <p class="paragraph-title">We help our clients succeed by creating brand identities,
                            digital xperiences, and print materials.</p>
                        <h6 class="about-author2">Alonso D. Wilimton <span class="text-theme2">-Head Of Idea </span>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wrapper mb-30">
                        <img class="w-100 img-one-a d-block d-xxl-none" src="{{ asset('img/about/about-1.jpg') }}" alt="About Img">
                        <img class="img-one img-fluid d-none d-xxl-inline-block rounded-3"
                            src="{{ asset('img/about/about-4.jpg') }}" alt="About Img">
                        <img class="img-two img-fluid d-none d-xxl-inline-block rounded-3"
                            src="{{ asset('img/about/about-8.jpg') }}" alt="About Img">
                        <div class="experience-box2">
                            <div class="inner-content">
                                <img src="{{ asset('img/about/trophy-2.png') }}" alt="icon">
                                <h3>30</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->
    <!--core-feature-area start-->
    <section class="core-feature-area about-core-bg pt-120 pb-120 pb-xs-120 pb-md-60 pt-md-60 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <h6 class="semi-title">Fun Fact About Us</h6>
                        <h2 class="sect-title lh-1">Company work process</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="core-feature2 mb-30">
                        <div class="feature-img pos-rel">
                            <img class="w-100" src="{{ asset('img/feature/feature-1.jpg') }}" alt="Image">
                            <a href="services-details.html" class="theme_btn read-more">Read More <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="feature-content">
                            <h4><a href="case-details.html">Become our partners?</a></h4>
                            <p>We’re available for 8 hours a day! Contact to
                                require a detailed analysis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="core-feature2 mb-30">
                        <div class="feature-img pos-rel">
                            <img class="w-100" src="{{ asset('img/feature/feature-2.jpg') }}" alt="Image">
                            <a href="services-details.html" class="theme_btn read-more">Read More <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="feature-content">
                            <h4><a href="case-details.html">Our creative team</a></h4>
                            <p>We’re available for 8 hours a day! Contact to
                                require a detailed analysis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="core-feature2 mb-30">
                        <div class="feature-img pos-rel">
                            <img class="w-100" src="{{ asset('img/feature/feature-3.jpg') }}" alt="Image">
                            <a href="services-details.html" class="theme_btn read-more">Read More <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="feature-content">
                            <h4><a href="case-details.html">Our mission & vision</a></h4>
                            <p>We’re available for 8 hours a day! Contact to
                                require a detailed analysis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="btn-list2 list-none d-sm-flex align-items-center justify-content-center">
                        <li><a href="services.html" class="theme_btn mr-20">Our Services</a></li>
                        <li><a href="contact.html" class="theme_btn border-btn">Get In Touch <i
                                    class="fal fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--core-feature-area end-->
    <!--about-video-area start-->
    <section class="about-video-area pb-90  pb-md-30  pb-xs-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-video-wrapper2 mb-30 pe-xxl-5">
                        <a href="https://www.youtube.com/watch?v=lTxn2BuqyzU" class="popup-video"><i
                                class="fas fa-play"></i></a>
                        <img class="w-100" src="{{ asset('img/about/about-9.jpg') }}" alt="About Img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-video-text mb-30">
                        <h6 class="semi-title ps-0 mb-15">Office Tour</h6>
                        <h2 class="sect-title lh-1 mb-35">We create a culture
                            that inspires us</h2>
                        <p class="mb-45 paragraph-title">Help our clients succeed by creating brand identities,
                            digital experiences,
                            and print materials. We offer a wide range of Courses For all ages & Levels.
                            We offer a wide range of Courses For all ages and Levels.</p>
                        <div class="d-sm-flex align-items-center">
                            <img class="mr-30 mb-10" src="{{ asset('img/about/about-5.jpg') }}" alt="image">
                            <img class="mb-10" src="{{ asset('img/about/about-6.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-video-area end-->
    <!--brand-area start-->
    <section class="brand-area pt-120 pb-80 pt-md-60 pt-xs-60 pb-md-25 pb-xs-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <h6 class="semi-title">100+ Happy Users</h6>
                        <h2 class="sect-title lh-1">Our experienced IT staffs</h2>
                    </div>
                </div>
            </div>
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
</main>
@endsection