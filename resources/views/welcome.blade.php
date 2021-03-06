<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Piseth Personal</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="{{asset('ui_assets/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui_assets/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui_assets/assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui_assets/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui_assets/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('ui_assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('ui_assets/assets/css/responsive.css')}}">

</head>

<body data-spy="scroll" data-target=".navbar-nav">

<!-- Preloader -->
<div class="preloader">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<!-- // Preloader -->


<!-- ====== Header ====== -->
<header id="header" class="header">
    <!-- ====== Navbar ====== -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand logo" href="#">
                <img src="{{asset('ui_assets/assets/images/logo.png')}}" alt="logo">
            </a>
            <!-- // Logo -->

            <!-- Mobile Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
            <!-- Mobile Menu -->

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="#service">SERVICE</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="blog.html">BLOG</a></li>--}}
                    <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ====== // Navbar ====== -->
</header>
<!-- ====== // Header ====== -->

<!-- ====== Hero Area ====== -->
<div class="hero-aria" id="home">
    <!-- Hero Area Content -->
    <div class="container">
        <div class="hero-content h-100">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2 class="text-uppercase">Let's Begin</h2>
                    <h3 class="text-uppercase"><span class="typed"></span></h3>
                    <p>Make designed by Piseth</p>
                    <a href="#about" class="button smooth-scroll">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- // Hero Area Content -->
    <!-- Hero Area Slider -->
    <div class="hero-area-slids owl-carousel">
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url(ui_assets/assets/images/hero-area/b1.jpg)"></div>
{{--            <img src="{{asset('ui_assets/assets/images/hero-area/b1.jpg')}}" class="slider-bg" >--}}
            <!-- // Single Background -->
        </div>
        <div class="slider-bg" style="background-image: url(ui_assets/assets/images/hero-area/b2.jpg)">
            <!-- Single Background -->
{{--            <img src="{{asset('ui_assets/assets/images/hero-area/b2.jpg')}}" class="slider-bg" >--}}
            <!-- // Single Background -->
        </div>
    </div>
    <!-- // Hero Area Slider -->
</div>
<!-- ====== //Hero Area ====== -->

<!-- ====== About Area ====== -->
<section id="about" class="section-padding about-area bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center">
                    <h2>About Me</h2>
                    <p>ARCHITECHTURE STUDENT</p>
                </div>
            </div>
        </div>
        <!-- //Section Title -->
        <div class="row">
            <div class="col-lg-6">
                <div class="about-bg" style="background-image:url(ui_assets/assets/images/ab.jpg)">
{{--                    <img src="{{asset('ui_assets/assets/images/ab.jpg')}}">--}}
                    <!-- Social Link -->
                    <div class="social-aria">
                        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
{{--                        <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>--}}
                        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
{{--                        <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>--}}
{{--                        <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>--}}
                    </div>
                    <!-- // Social Link -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>Hello, I am <span>Soun Piseth</span></h2>
                    <h4> 19 April 2001 ,Kandal province ,Cambodian</h4>
                    <h3>EDUCATION</h3>
                    <p>2018-PRESENT</p>
                    <p>Sutdy Architecture and Urbanism year 4 at Norton University</p>
                    <p>2019</p>
                    <p>Finish Study short course at LEAGIS POLYTECHNIC ACADEMY</p>

                    <h5>My Skills</h5>

                    <!-- Skill Area -->
                    <div id="skills" class="skill-area">

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-title"><span>Autocad</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="60%">
                                <div class="skillbar-title"><span>photoshop</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">60%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-title"><span>lumion</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="60%">
                                <div class="skillbar-title"><span>sketup</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">60%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                    </div>
                    <!-- //Skill Area -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== // About Area ====== -->


<!-- ====== Fact Counter Section ====== -->
<!-- ====================================================================
        NOTE: You need to change  'data-count="10"' and 'p' Eliments
    ===================================================================== -->
<section class="section-padding pb-70 bg-img fact-counter" id="counter" style="background-image: url(ui_assets/assets/images/fan-fact-bg.jpg)">

    <div class="container">
        <div class="row">
            <!-- Single Fact Counter -->
            <div class="col-lg-3 co col-md-6 l-md-6 text-center">
                <div class="single-fun-fact">
                    <h2><span class="counter-value" data-count="01">0</span>+</h2>
                    <p>HOUSE</p>
                </div>
            </div>
            <!-- // Single Fact Counter -->
            <!-- Single Fact Counter -->
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-fun-fact">
                    <h2><span class="counter-value" data-count="01">0</span>+</h2>
                    <p>SCHOOL</p>
                </div>
            </div>
            <!-- // Single Fact Counter -->
            <!-- Single Fact Counter -->
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-fun-fact">
                    <h2><span class="counter-value" data-count="01">0</span>+</h2>
                    <p>MINIMAL HOUSE</p>
                </div>
            </div>
            <!-- // Single Fact Counter -->
            <!-- Single Fact Counter -->
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-fun-fact">
                    <h2><span class="counter-value" data-count="01">0</span>+</h2>
                    <p>CONDO</p>
                </div>
            </div>
            <!-- // Single Fact Counter -->
        </div>
    </div>
</section>
<!-- ====== //Fact Counter Section ====== -->

<!-- ====== Portfolio Section ====== -->
<section id="portfolio" class="section-padding pb-85 portfolio-area bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center">
                    <h2>Recent Work</h2>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                </div>
            </div>
        </div>
        <!-- //Section Title -->
        <div class="row justify-content-center">
            <!-- Work List Menu-->
            <div class="col-lg-8">
                <div class="work-list text-center">
                    <ul>
                        <li class="filter" class="active" data-filter="all">ALL</li>
                        <li class="filter" data-filter=".house">HOUSE</li>
                        <li class="filter" data-filter=".school">SCHOOL</li>
                        <li class="filter" data-filter=".minimal">MINIMAL HOUSE</li>
                        <li class="filter" data-filter=".condo">CONDO</li>
                    </ul>
                </div>
            </div>
            <!-- // Work List Menu -->
        </div>
        <div class="row portfolio">
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix house">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/House/1.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="{{asset('ui_assets/assets/images/portfolio/House/1.jpg')}}"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix house">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/House/2.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/House/2.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix school">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Shool/1.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Shool/1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix school">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Shool/2.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Shool/2.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix minimal">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Minimal-House/1.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Minimal-House/1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix minimal">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Minimal-House/2.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Minimal-House/2.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover other">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix minimal">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Minimal-House/3.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Minimal-House/3.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix minimal">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Minimal-House/4.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Minimal-House/4.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/1.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/2.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/2.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/3.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/3.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/4.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/4.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/5.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/5.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/6.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/6.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
            <!-- Single Portfolio -->
            <div class="col-lg-4 col-md-6 mix condo">
                <div class="single-portfolio" style="background-image: url(ui_assets/assets/images/portfolio/Condo/7.jpg)">
                    <div class="portfolio-icon text-center">
                        <a data-lightbox='lightbox' href="ui_assets/assets/images/portfolio/Condo/7.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                    </div>
                    <div class="portfolio-hover">
                        <h4>Project <span>Name</span></h4>
                    </div>
                </div>
            </div>
            <!-- // Single Portfolio -->
        </div>
    </div>
</section>
<!-- ====== // Portfolio Section ====== -->

{{--<!-- ====== Frequently asked questions ====== -->--}}
{{--<section class="section-padding faq-area bg-secondary">--}}
{{--    <div class="container">--}}
{{--        <!-- Section Title -->--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-6 ">--}}
{{--                <div class="section-title text-center faq-title">--}}
{{--                    <h2>Frequently asked questions</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- //Section Title -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="faq-bg bg-img" style="background-image: url(assets/images/faq.jpeg)"></div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-7">--}}
{{--                <!-- FAQ Content -->--}}
{{--                <div class="faq-content" id="accordion">--}}

{{--                    <!-- Single FAQ -->--}}
{{--                    <div class="single-faq">--}}

{{--                        <!-- FAQ Header -->--}}
{{--                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-1">Collapsible Group Item One</h4>--}}
{{--                        <!-- // FAQ Header -->--}}

{{--                        <!-- FAQ Content -->--}}
{{--                        <div id="faq-1" class="collapse show" data-parent="#accordion">--}}
{{--                            <div class="faq-body">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- FAQ Content -->--}}
{{--                    </div>--}}
{{--                    <!-- // Single FAQ -->--}}

{{--                    <!-- Single FAQ -->--}}
{{--                    <div class="single-faq">--}}

{{--                        <!-- FAQ Header -->--}}
{{--                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-2">Lorem ipsum dolor sit amet Two</h4>--}}
{{--                        <!-- // FAQ Header -->--}}

{{--                        <!-- FAQ Content -->--}}
{{--                        <div id="faq-2" class="collapse" data-parent="#accordion">--}}
{{--                            <div class="faq-body">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- FAQ Content -->--}}
{{--                    </div>--}}
{{--                    <!-- // Single FAQ -->--}}

{{--                    <!-- Single FAQ -->--}}
{{--                    <div class="single-faq">--}}

{{--                        <!-- FAQ Header -->--}}
{{--                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-3">Collapsible Group Item Three</h4>--}}
{{--                        <!-- // FAQ Header -->--}}

{{--                        <!-- FAQ Content -->--}}
{{--                        <div id="faq-3" class="collapse" data-parent="#accordion">--}}
{{--                            <div class="faq-body">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- FAQ Content -->--}}
{{--                    </div>--}}
{{--                    <!-- // Single FAQ -->--}}

{{--                </div>--}}
{{--                <!-- FAQ Content -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ====== // Frequently asked questions ====== -->--}}

{{--<!-- ====== Blog Section ====== -->--}}
{{--<section class="section-padding pb-70 blog-section bg-light">--}}
{{--    <div class="container">--}}
{{--        <!-- Section Title -->--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-6 ">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h2>Blog Area</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- //Section Title -->--}}
{{--        <div class="row">--}}
{{--            <!-- Single Blog -->--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-blog">--}}
{{--                    <div class="blog-thumb" style="background-image: url(assets/images/blog/img-1.jpg)"></div>--}}
{{--                    <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>--}}
{{--                    <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>--}}
{{--                    <a href="single-blog.html" class="button">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Single Blog -->--}}
{{--            <!-- Single Blog -->--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-blog">--}}
{{--                    <div class="blog-thumb" style="background-image: url(assets/images/blog/img-2.jpg)"></div>--}}
{{--                    <h4 class="blog-title"><a href="single-blog.html">Lifetime free Update</a></h4>--}}
{{--                    <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>--}}
{{--                    <a href="single-blog.html" class="button">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Single Blog -->--}}
{{--            <!-- Single Blog -->--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-blog">--}}
{{--                    <div class="blog-thumb" style="background-image: url(assets/images/blog/img-3.jpg)"></div>--}}
{{--                    <h4 class="blog-title"><a href="single-blog.html">Unlimited Support</a></h4>--}}
{{--                    <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>--}}
{{--                    <a href="single-blog.html" class="button">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Single Blog -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ====== // Blog Section ====== -->--}}


<!-- ====== Testimonial Section ====== -->
{{--<section id="testimonial" class="section-padding bg-secondary testimonial-area">--}}
{{--    <div class="container bg-white">--}}
{{--        <!-- Section Title -->--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-6 ">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h2>Testimonial</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- //Section Title -->--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="testimonials owl-carousel" data-ride="carousel">--}}
{{--                    <!-- Single Testimonial -->--}}
{{--                    <div class="single-testimonial text-center">--}}
{{--                        <div class="testimonial-quote">--}}
{{--                            <i class="fa fa-quote-right"></i>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et, accusantium?</p>--}}
{{--                        <h4>Aseven M <span>CEO - aseven.info</span></h4>--}}

{{--                    </div>--}}
{{--                    <!-- // Single Testimonial -->--}}
{{--                    <!-- Single Testimonial -->--}}
{{--                    <div class="single-testimonial text-center">--}}
{{--                        <div class="testimonial-quote">--}}
{{--                            <i class="fa fa-quote-right"></i>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et, accusantium?</p>--}}
{{--                        <h4>Aseven M <span>CEO - aseven.info</span></h4>--}}

{{--                    </div>--}}
{{--                    <!-- // Single Testimonial -->--}}
{{--                    <!-- Single Testimonial -->--}}
{{--                    <div class="single-testimonial text-center">--}}
{{--                        <div class="testimonial-quote">--}}
{{--                            <i class="fa fa-quote-right"></i>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et, accusantium?</p>--}}
{{--                        <h4>Aseven M <span>CEO - aseven.info</span></h4>--}}

{{--                    </div>--}}
{{--                    <!-- // Single Testimonial -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ====== // Testimonial Section ====== -->--}}

{{--<!-- ====== Team Section ====== -->--}}
{{--<section class="section-padding pb-70 team-area">--}}
{{--    <div class="container">--}}
{{--        <!-- Section Title -->--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-6 ">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h2>Team</h2>--}}
{{--                    <p>Founder , Co-Founder , Team</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- //Section Title -->--}}
{{--        <div class="row">--}}
{{--            <!-- Single Team -->--}}
{{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                <div class="single-team">--}}
{{--                    <div class="team-thumb" style="background-image: url(assets/images/team/img-1.jpg)">--}}
{{--                        <div class="team-social">--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <h4>AL Mamun</h4>--}}
{{--                        <span>CEO Founder</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Team -->--}}
{{--            <!-- Single Team -->--}}
{{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                <div class="single-team">--}}
{{--                    <div class="team-thumb" style="background-image: url(assets/images/team/img-2.jpg)">--}}
{{--                        <div class="team-social">--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <h4>AL Mamun</h4>--}}
{{--                        <span>CEO Founder</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Team -->--}}
{{--            <!-- Single Team -->--}}
{{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                <div class="single-team">--}}
{{--                    <div class="team-thumb" style="background-image: url(assets/images/team/img-3.jpg)">--}}
{{--                        <div class="team-social">--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <h4>AL Mamun</h4>--}}
{{--                        <span>CEO Founder</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Team -->--}}
{{--            <!-- Single Team -->--}}
{{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                <div class="single-team">--}}
{{--                    <div class="team-thumb" style="background-image: url(assets/images/team/img-4.jpg)">--}}
{{--                        <div class="team-social">--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                            <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <h4>AL Mamun</h4>--}}
{{--                        <span>CEO Founder</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Team -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ====== // Team Section ====== -->--}}


{{--<!-- ====== Call to Action Area ====== -->--}}
{{--<section class="section-padding call-to-action-aria bg-secondary">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-9">--}}
{{--                <h2>Lorem ipsum dolor sit amet</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugit optio voluptatem modi, nemo, cupiditate vel, aspernatur, quae consequatur officia unde totam.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <div class="cta-button">--}}
{{--                    <div class="d-table">--}}
{{--                        <div class="d-table-cell">--}}
{{--                            <a href="#" class="button">Contact me</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ====== // Call to Action Area ====== -->--}}


{{--<!-- ====== Pricing Area ====== -->--}}
{{--<section class="section-padding pb-70 pricing-area">--}}
{{--    <div class="container">--}}
{{--        <!-- Section Title -->--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-6 ">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h2>Pricing Area</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- //Section Title -->--}}
{{--        <div class="row">--}}
{{--            <!-- Single Price Box -->--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="single-price-box text-center">--}}
{{--                    <div class="price-head">--}}
{{--                        <h2>Basic</h2>--}}
{{--                        <h3>$99<span>/ Per Month</span></h3>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li>Basic Feature</li>--}}
{{--                        <li>Best Output</li>--}}
{{--                        <li>Free Update</li>--}}
{{--                        <li>Live chat</li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="button">PURCHASE NOW</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Price Box -->--}}
{{--            <!-- Single Price Box -->--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="single-price-box text-center">--}}
{{--                    <div class="price-head">--}}
{{--                        <h2>Premium</h2>--}}
{{--                        <h3>$119<span>/ Per Month</span></h3>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li>Basic Feature</li>--}}
{{--                        <li>Best Output</li>--}}
{{--                        <li>Free Update</li>--}}
{{--                        <li>Live chat</li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="button">PURCHASE NOW</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Price Box -->--}}
{{--            <!-- Single Price Box -->--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="single-price-box text-center">--}}
{{--                    <div class="price-head">--}}
{{--                        <h2>Enterprise</h2>--}}
{{--                        <h3>$559<span>/ Per Month</span></h3>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li>Basic Feature</li>--}}
{{--                        <li>Best Output</li>--}}
{{--                        <li>Free Update</li>--}}
{{--                        <li>Live chat</li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="button">PURCHASE NOW</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Price Box -->--}}
{{--            <!-- Single Price Box -->--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="single-price-box text-center">--}}
{{--                    <div class="price-head">--}}
{{--                        <h2>Business</h2>--}}
{{--                        <h3>$999<span>/ Per Month</span></h3>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li>Basic Feature</li>--}}
{{--                        <li>Best Output</li>--}}
{{--                        <li>Free Update</li>--}}
{{--                        <li>Live chat</li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="button">PURCHASE NOW</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- // Single Price Box -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ====== // Pricing Area ====== -->--}}


<!-- ====== Contact Area ====== -->
<section id="contact" class="section-padding contact-section bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center">
                    <h2>Contact Me</h2>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                </div>
            </div>
        </div>
        <!-- //Section Title -->

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Form -->
                <form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Name">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" required placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" required placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                    </div>
                    <div class="form-btn text-center">
                        <button class="button" type="submit">Send Message</button>
                        <p class="form-message"></p>
                    </div>
                </form>
                <!-- // Form -->
            </div>
        </div>
        <!-- // Contact Form -->
    </div>
</section>
<!-- ====== // Contact Area ====== -->


<!-- ====== Footer Area ====== -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p class="text-white">&copy; 2022 <a href="#">A Template Designed by RosCheat</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ====== // Footer Area ====== -->






<!-- ====== ALL JS ====== -->
<script src="{{asset('ui_assets/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/jquery.mixitup.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/wow.min.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/typed.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/skill.bar.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/fact.counter.js')}}"></script>
<script src="{{asset('ui_assets/assets/js/main.js')}}"></script>

</body>

</html>
