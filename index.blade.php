<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dharani</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
    
	<!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" 
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <a href="#" class="chaticon" title="chat with us">
      <img src="assets/img/chaticon.png" alt="chat-icon">
   </a>
        
        <!-- header-start -->
		@include('header')
        <!-- header-start -->
        @if(session()->has('investor'))
        <div class="alert alert-success" id="investor" >
            {{ session()->get('investor') }}
        </div>
        @endif
        <!-- sidebar area start -->
        <section class="sidebar__area">
            <div class="sidebar__shape" data-background="assets/img/shape/hexa.png"></div>
            <div class="sidebar__wrapper">
                <div class="sidebar__close">
                    <button class="sidebar__close-btn" id="sidebar__close-btn">
                        <span><i class="fal fa-times"></i></span>
                        <span>close</span>
                    </button>
                </div>
                <div class="sidebar__content">
                    <div class="logo mb-40">
                        <a href="{{url('/index')}}">
                            <img src="assets/img/logo-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu d-block"></div>
                    <div class="hedder-button mt-30">
                        <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-sign-in-alt"></i> <span><small>Got an Account?</small><br>
                  Login / Register</span> </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModal">Investors</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModal2">Business Owner</a> </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay"></div>
        <!-- sidebar area end -->

        <main>

            <!-- hero-area start -->
            <section class="hero-area pos-rel">
                <div class="hero-shape">
                    <span class="circle"></span>
                    <span class="circle circle-yellow"></span>
                    <span class="shape-plus">+</span>
                </div>
                <div class="hero-slider">
                    <div class="single-slider slider-height slider-height-2 d-flex align-items-center"
                        data-background="assets/img/slider/slider-2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="hero-content pos-rel mt-20">
                                        <div class="hero-dot-shape">
                                            <img src="assets/img/shape/dot-shape.png" alt="">
                                        </div>
                                        <div class="hero-slider-caption hero-slider-caption-2">
                                            <div class="text-center">
                                                <span class="hero-sub">Welcome to Dharani</span>
                                                <h2>A Marketplace for Business</h2>
                                                <h4>Thousands of business owners connect with investors & advisors on Dharani to franchise their business.</h4>
                                            </div>
                                            <div class="job-hero-form job-hero-form-2">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-4">
                                                            <select>
                                                                <option value="1">Select option</option>
                                                                <option value="1">Looking for Business</option>
                                                                <option value="1">Looking for Investment</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-4">
                                                            <div class="job-input">
                                                                <input type="search" placeholder="Type search keyword here...">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-4
                                                        "><button>Submit <i class="far fa-arrow-right"></i></button></div>
                                                    </div>
                                                </form>
                                            </div>
                                            

                                        <div class="bnrbtncont-outer mt-sm-5">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="bnrbtn-cont">
                                                        <h5>Looking to franchise or grow your brand?</h5>
                                                        <a href="#">Create Franchise Profile</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="bnrbtn-cont green">
                                                        <h5>Are you an Investor, Buyer, Advisor or Lender?</h5>
                                                        <a href="#">Create Member Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero-area end -->

            <div class="container">
                <div class="hero-fact mt-40 d-none d-md-block">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-fact mb-30">
                                <i class="fal fa-gift-card"></i>
                                <div class="fact-text">
                                    <h2>103560 +</h2>
                                    <span>Business Listed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-fact mb-30 ml-50">
                                <i class="fal fa-user-circle"></i>
                                <div class="fact-text">
                                    <h2>503560 +</h2>
                                    <span>Opportunities</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-fact mb-30 ml-70">
                                <i class="fal fa-file-alt"></i>
                                <div class="fact-text">
                                    <h2>106852 +</h2>
                                    <span>Investers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-fact mb-30 ml-70">
                                <i class="fal fa-coffee"></i>
                                <div class="fact-text">
                                    <h2>95%</h2>
                                    <span>Success Stories</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
            <div class="brand-area pt-40 pb-40" data-background="assets/img/brand/brand-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title mb-sm-60 mb-20">
                                <h2>Featured Listing</h2>
                                <!-- <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row brand-active">
                        <div class="col-xl-12">
                            <div class="b-cat mb-30">
                                <div class="cat-thumb">
                                    <div class="peopleseen">
                                        <i class="far fa-eye"></i> 50 Seen                                        
                                    </div>
                                    <a href="{{url('/service-details')}}" title="View Details"><img src="assets/img/fetservice1.jpg" alt=""></a>
                                </div>                                
                                <div class="cat-down">
                                    <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                   
                                    <span class="catdown-location"> <strong>Category:</strong> Manufacturing
                                    </span>
                                    <span class="catdown-location">
                                         <strong>Location:</strong> Sector 62, Noida (UP)
                                    </span>
                                    <span class="catdown-location catdown-price">
                                        <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>98500 Lacs</span>
                                    </span>

                                    <a class="cat-d-link" href="{{url('/service-details')}}" title="View Details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product box end -->
                        <div class="col-xl-12">
                            <div class="b-cat mb-30">
                                <div class="cat-thumb">
                                    <div class="peopleseen">
                                        <i class="far fa-eye"></i> 50 Seen                                        
                                    </div>
                                    <a href="{{url('/service-details')}}" title="View Details"><img src="assets/img/fetservice2.jpg" alt=""></a>
                                </div>                                
                                <div class="cat-down">
                                    <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                    
                                    <span class="catdown-location"> <strong>Category:</strong> Manufacturing
                                    </span>
                                    <span class="catdown-location">
                                         <strong>Location:</strong> Sector 62, Noida (UP)
                                    </span>                                    
                                    <span class="catdown-location catdown-price">
                                        <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>98500 Lacs</span>
                                    </span>

                                    <a class="cat-d-link" href="{{url('/service-details')}}" title="View Details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product box end -->
                        <div class="col-xl-12">
                            <div class="b-cat mb-30">
                                <div class="cat-thumb">
                                    <div class="peopleseen">
                                        <i class="far fa-eye"></i> 50 Seen                                        
                                    </div>
                                    <a href="{{url('/service-details')}}" title="View Details"><img src="assets/img/fetservice3.jpg" alt=""></a>
                                </div>                                
                                <div class="cat-down">
                                    <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                    
                                    <span class="catdown-location"> <strong>Category:</strong> Manufacturing
                                    </span>
                                    <span class="catdown-location">
                                         <strong>Location:</strong> Sector 62, Noida (UP)
                                    </span>                                    
                                    <span class="catdown-location catdown-price">
                                        <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>98500 Lacs</span>
                                    </span>

                                    <a class="cat-d-link" href="{{url('/service-details')}}" title="View Details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product box end -->
                        <div class="col-xl-12">
                            <div class="b-cat mb-30">
                                <div class="cat-thumb">
                                    <div class="peopleseen">
                                        <i class="far fa-eye"></i> 50 Seen                                        
                                    </div>
                                    <a href="{{url('/service-details')}}" title="View Details"><img src="assets/img/fetservice1.jpg" alt=""></a>
                                </div>                                
                                <div class="cat-down">
                                    <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                    
                                    <span class="catdown-location"> <strong>Category:</strong> Manufacturing
                                    </span>
                                    <span class="catdown-location">
                                         <strong>Location:</strong> Sector 62, Noida (UP)
                                    </span>
                                    <span class="catdown-location catdown-price">
                                        <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>98500 Lacs</span>
                                    </span>

                                    <a class="cat-d-link" href="{{url('/service-details')}}" title="View Details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product box end -->
                        <div class="col-xl-12">
                            <div class="b-cat mb-30">
                                <div class="cat-thumb">
                                    <div class="peopleseen">
                                        <i class="far fa-eye"></i> 50 Seen                                        
                                    </div>
                                    <a href="{{url('/service-details')}}" title="View Details"><img src="assets/img/fetservice2.jpg" alt=""></a>
                                </div>                                
                                <div class="cat-down">
                                    <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                    
                                    <span class="catdown-location"> <strong>Category:</strong> Manufacturing
                                    </span>
                                    <span class="catdown-location">
                                         <strong>Location:</strong> Sector 62, Noida (UP)
                                    </span>                                    
                                    <span class="catdown-location catdown-price">
                                        <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>98500 Lacs</span>
                                    </span>

                                    <a class="cat-d-link" href="{{url('/service-details')}}" title="View Details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product box end -->
                        <div class="col-xl-12">
                            <div class="b-cat mb-30">
                                <div class="cat-thumb">
                                    <div class="peopleseen">
                                        <i class="far fa-eye"></i> 50 Seen                                        
                                    </div>
                                    <a href="{{url('/service-details')}}" title="View Details"><img src="assets/img/fetservice3.jpg" alt=""></a>
                                </div>                                
                                <div class="cat-down">
                                    <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                    
                                    <span class="catdown-location"> <strong>Category:</strong> Manufacturing
                                    </span>
                                    <span class="catdown-location">
                                         <strong>Location:</strong> Sector 62, Noida (UP)
                                    </span>                                    
                                    <span class="catdown-location catdown-price">
                                        <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>98500 Lacs</span>
                                    </span>

                                    <a class="cat-d-link" href="{{url('/service-details')}}" title="View Details">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product box end -->

                    </div>
                    <div class="app__btn text-center mt-40">
                        <a href="{{url('/service-list')}}" class="b-btn mr-15 mb-15">View All <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="cat-area pt-70 pb-40">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title text-center mb-50">
                                <h2>Top Trending Categories</h2>
                                <!-- <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p> -->
                            </div>
                        </div>
                    </div>

        <div class="utf-categories-container-block"> 
            <a href="#" class="utf-category-box">
                <div class="utf-opening-position-counter-item">100 Listing</div>
                <div class="utf-category-box-icon-item"><i class="fas fa-bullhorn"></i></div>
                <div class="utf-category-box-content">
                  <h3>Design, Art &amp; Multimedia</h3>
                </div>
                <div class="utf-category-box-counter-item">
                    View Details
                </div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">180 Listing</div>
                <div class="utf-category-box-icon-item"> <i class="fas fa-book"></i> </div>
                <div class="utf-category-box-content">
                  <h3>Education</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">29 Listing</div>
                <div class="utf-category-box-icon-item">
                    <i class="fas fa-calculator"></i>
                </div>
                <div class="utf-category-box-content">
                  <h3>Accounting company</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">200 Listing</div>
                <div class="utf-category-box-icon-item"> 
                    <i class="fas fa-calculator"></i>
                </div>
                <div class="utf-category-box-content">
                  <h3>Retail Market</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">25 Listing</div>
                <div class="utf-category-box-icon-item">
                    <i class="fas fa-headphones-alt"></i>
                </div>
                <div class="utf-category-box-content">
                  <h3>Telecommunications</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">90 Listing</div>
                <div class="utf-category-box-icon-item">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="utf-category-box-content">
                  <h3>Restaurant / Food market</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">60 Listing</div>
                <div class="utf-category-box-icon-item">
                    <i class="far fa-building"></i>
                </div>
                <div class="utf-category-box-content">
                  <h3>Construction / Facilities</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
            <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                <div class="utf-opening-position-counter-item">23 Listing</div>
                <div class="utf-category-box-icon-item">
                    <i class="fas fa-briefcase-medical"></i>
                </div>
                <div class="utf-category-box-content">
                  <h3>Medical</h3>
                </div>
                <div class="utf-category-box-counter-item">View Details</div>
            </a> 
          </div>

                    <!-- category end -->

                    <div class="app__btn text-center mt-40">
                        <a href="#" class="b-btn mr-15 mb-15">View All <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- counter-area start -->
            <div class="counter-area bg-cover pt-80 pb-50" data-background="assets/img/investorbg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5">
                            <div class="section-title section-title-white mb-30">
                                <h2>Looking For Investor?</h2>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="cta-btn text-left text-lg-right mb-30">
                                <a class="b-btn green-btn" href="#">Meet With Us <i class="far fa-arrow-right"></i></a>
                                <a class="b-btn" href="job-grid.html">Browse Investors <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area end -->

            <!-- job-area-start -->
            <div class="job-area grey-bg pt-80 pb-50">
                <div class="container">
                    <div class="row justify-content-center mb-45">
                        <div class="col-xl-5">
                            <div class="section-title text-center">
                                <h2>How To Get Started</h2>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 offset-xl-1 pr-0 col-lg-6">
                            <div class="starter__thumb-wrapper pl-50">
                                <div class="starter__shape">
                                    <img src="assets/img/icon/starter/icon-1.png" alt="">
                                </div>
                                <div class="starter__thumb-top mb-20">
                                    <img src="assets/img/starter-1.jpg" alt="">
                                </div>
                                <div class="starter__thumb-bottom d-sm-flex">
                                    <div class="starter__thumb mr-20">
                                        <img src="assets/img/starter-2.jpg" alt="">
                                    </div>
                                    <div class="starter__thumb">
                                        <img src="assets/img/starter-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6">
                            <div class="starter__content">
                                <ul>
                                    <li>
                                        <div class="starter__item d-flex mb-45">
                                            <div class="starter__icon mr-25">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <div class="starter__text">
                                                <h4>Find Investor or company</h4>
                                                <p>But must expla to you how this mistaken idea of denouncing pleure praising</p>
                                                <a href="contact.html" class="link-btn">
                                                    <span>Start Find</span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="starter__item d-flex mb-45">
                                            <div class="starter__icon mr-25">
                                                <i class="flaticon-job-search-4 yellow-bg"></i>
                                            </div>
                                            <div class="starter__text">
                                                <h4>Select Suitable one</h4>
                                                <p>But must expla to you how this mistaken idea of denouncing pleure praising</p>
                                                <a href="contact.html" class="link-btn">
                                                    <span>Post Your Jobs</span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="starter__item d-flex mb-45">
                                            <div class="starter__icon mr-25">
                                                <i class="flaticon-sync black-bg"></i>
                                            </div>
                                            <div class="starter__text">
                                                <h4>Earn with Grow</h4>
                                                <p>But must expla to you how this mistaken idea of denouncing pleure praising</p>
                                                <a href="contact.html" class="link-btn">
                                                    <span>Get Data</span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- job-area-end -->

            <!-- testimonial area start -->
            <section class="testimonial__area pt-20 pb-130 black-bg" data-background="assets/img/testimonial/testimonial-bg.png">
                <div class="hero-shape">
                    <span class="circle"></span>
                    <span class="circle circle-yellow"></span>
                    <span class="shape-plus shape-plus-green">+</span>
                    <span class="shape-plus shape-plus-green shape-plus-2">+</span>
                    <span class="dot-shape">
                        <img src="assets/img/shape/dot-shape.png" alt="dot-shape">
                    </span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="col-xl-7 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="testimonial__slider text-center">
                                    <div class="testimonial__nav mt-20">
                                        <div class="testimonial__thumb item-1">
                                            <div class="testimonial__thumb-inner">
                                                <div class="testimonial__quote">
                                                        <i class="flaticon-quotation"></i>
                                                </div>
                                                <img src="assets/img/testimonial/avater-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb item-2">
                                            <div class="testimonial__thumb-inner">
                                                <div class="testimonial__quote">
                                                    <i class="flaticon-quotation"></i>
                                                </div>
                                                <img src="assets/img/testimonial/avater-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb item-3">
                                            <div class="testimonial__thumb-inner">
                                                <div class="testimonial__quote">
                                                        <i class="flaticon-quotation"></i>
                                                </div>
                                                <img src="assets/img/testimonial/avater-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial__thumb item-4">
                                            <div class="testimonial__thumb-inner">
                                                <div class="testimonial__quote">
                                                        <i class="flaticon-quotation"></i>
                                                </div>
                                                <img src="assets/img/testimonial/avater-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__slider-active">
                                        <div class="testimonial__item item-1">
                                            <p>Sed perspiciatis unde omnis iste natus error voluptatemsss accusantium dolorem laudantim totam rem aperiam eaqupsa quae invenre eritatis etquasi architecto beatae vitae dicta sunt explicab enipsam voluptatem voluptasuis</p>
                                            <div class="testimonial__info">
                                                <h4>Michel Walton</h4>
                                                <span>Senior Manager</span>
                                            </div>
                                        </div>
                                        <div class="testimonial__item item-2">
                                            <p>Sed perspiciatis unde omnis iste natus error voluptatemsss accusantium dolorem laudantim totam rem aperiam eaqupsa quae invenre eritatis etquasi architecto beatae vitae dicta sunt explicab enipsam voluptatem voluptasuis</p>
                                            <div class="testimonial__info">
                                                <h4>Michel Walton</h4>
                                                <span>Senior Manager</span>
                                            </div>
                                        </div>
                                        <div class="testimonial__item item-3">
                                            <p>Sed perspiciatis unde omnis iste natus error voluptatemsss accusantium dolorem laudantim totam rem aperiam eaqupsa quae invenre eritatis etquasi architecto beatae vitae dicta sunt explicab enipsam voluptatem voluptasuis</p>
                                            <div class="testimonial__info">
                                                <h4>Michel Walton</h4>
                                                <span>Senior Manager</span>
                                            </div>
                                        </div>
                                        <div class="testimonial__item item-4">
                                            <p>Sed perspiciatis unde omnis iste natus error voluptatemsss accusantium dolorem laudantim totam rem aperiam eaqupsa quae invenre eritatis etquasi architecto beatae vitae dicta sunt explicab enipsam voluptatem voluptasuis</p>
                                            <div class="testimonial__info">
                                                <h4>Michel Walton</h4>
                                                <span>Senior Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial area end -->

            <!-- brand area start -->
            <section class="brand__area pb-30 pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3">
                            <div class="section-title text-center mb-50">
                                <h2>Our Partners</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="brand__thumb mb-50">
                                <img src="assets/img/brand/brand-8.jpg" alt="brand">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="brand__thumb mb-50">
                                <img src="assets/img/brand/brand-9.jpg" alt="brand">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="brand__thumb mb-50">
                                <img src="assets/img/brand/brand-10.jpg" alt="brand">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="brand__thumb mb-50">
                                <img src="assets/img/brand/brand-11.jpg" alt="brand">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- brand area end -->

            <!-- register modal start -->
            <!-- Modal -->
            <div class="modal fade register__modal-area" id="registerModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="register__modal">
                            <h2 class="pophd">Investor Login</h2>
                            <div class="register__nav">
                                <ul class="nav nav-pills poptab" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="register-tab" data-toggle="pill" href="#register" role="tab" aria-controls="register" aria-selected="true"><i class="far fa-user-circle"></i>Create An Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login-tab" data-toggle="pill" href="#login" role="tab" aria-controls="login" aria-selected="false"><i class="fal fa-lock-open-alt"></i>Login Account</a>
                                    </li>
                                </ul>
                            </div>
                    <div class="register__nav-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <div class="register__form">

                               
                           
                                    <form action="{{url('/investorregistration')}}" method="POST">
                                        @csrf
                                        <div class="register__input">
                                            <input type="text" name="name" id="name" placeholder="Full Name" required>
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="text" name="phone" id="phone" placeholder="Your  Phone Number" required>
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="password" name="password" id="password" placeholder="Password" required>
                                            <i class="far fa-lock-alt"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
                                            <i class="far fa-lock-alt"></i>
                                        </div>

                                        <div class="register__btn mb-15">
                                            <a href="{{url('/investor-dashboard')}}">
                                                <button type="submit" name="submit" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button>
                                            </a>
                                        </div>
                                        <div class="register__or text-center">
                                            <div class="register__or-title mb-20">
                                                <h3>OR</h3>
                                            </div>
                                            <div class="register__option theme-social">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="fb">
                                                            <i class="fab fa-facebook-f"></i>
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="tw">
                                                            <i class="fab fa-twitter"></i>
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                                    <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                                                                             
                                            <div class="register__form">                                              

                                            <form method="post" action="{{url('/investorlogin')}}">
                                               @csrf
                                                <div class="register__input">
                                                    <input type="email" name="email" id="email" placeholder="Username/Email ID" required>
                                                    <br><br><span id="email_error"></span>
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" name="password" id="password" placeholder="Password" required>
                                                    <br><br><span id="password_error"></span>
                                                    <i class="far fa-lock-alt"></i>
                                                </div>
                                                <div class="register__btn mb-45">
                                                    <a href="{{url('/investor-dashboard')}}">
                                                        <button type="submit" name="submit" class="b-btn b-btn-green w-100">Login <i class="far fa-arrow-right"></i></button></a>
                                                </div>
                                                <div class="register__or text-center">
                                                    <div class="register__or-title mb-20">
                                                        <h3>OR</h3>
                                                    </div>
                                                    <div class="register__option theme-social">
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="fb">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="tw">
                                                                    <i class="fab fa-twitter"></i>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- register modal end -->

            <!-- login modal start -->
            <div class="modal fade register__modal-area" id="registerModal2" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="register__modal">
                            <h2 class="pophd">Business Owner Login</h2>
                            <div class="register__nav">
                                <ul class="nav nav-pills poptab" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="register-tab" data-toggle="pill" href="#register2" role="tab" aria-controls="register" aria-selected="true"><i class="far fa-user-circle"></i>Create An Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login-tab" data-toggle="pill" href="#login2" role="tab" aria-controls="login" aria-selected="false"><i class="fal fa-lock-open-alt"></i>Login Account</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="register__nav-content">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="register2" role="tabpanel" aria-labelledby="register-tab">
                                     <div class="register__form">
                                      <form action="{{url('/businessownerregistration')}}" method="POST">
                                          @csrf
                                        <div class="register__input">
                                            <input type="text" name="name" id="name" placeholder="Full Name" required>
                                            <br><br><span id="name_error"></span>
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                                            <br><br><span id="email_error"></span>
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="text" name="phone" id="phone" placeholder="Your  Phone Number" required>
                                            <br><br><span id="phone_error"></span>
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="password" name="password" id="password" placeholder="Password" required>
                                            <br><br><span id="email_error"></span>
                                            <i class="far fa-lock-alt"></i>
                                        </div>
                                        <div class="register__input">
                                            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
                                            <i class="far fa-lock-alt"></i>
                                        </div>

                                        <div class="register__btn mb-15">
                                            <a href="{{url('/buss-owner-dashboard')}}">
                                                <button type="submit" name="submit" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button></a>
                                        </div>
                                        <div class="register__or text-center">
                                            <div class="register__or-title mb-20">
                                                <h3>OR</h3>
                                            </div>
                                            <div class="register__option theme-social">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="fb">
                                                            <i class="fab fa-facebook-f"></i>
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="tw">
                                                            <i class="fab fa-twitter"></i>
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        <div class="tab-pane fade" id="login2" role="tabpanel" aria-labelledby="login-tab">
                            <div class="register__form">
                                <form action="{{url('/businessownerlogin')}}" method="POST">
                                    @csrf
                                    <div class="register__input">
                                        <input type="email" name="email" id="email" placeholder="Username/Email ID" required>
                                        <br><br><span id="email_error"></span>
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="password" name="password" id="password" placeholder="Password" required>
                                        <br><br><span id="password_error"></span>
                                        <i class="far fa-lock-alt"></i>
                                    </div>
                                    <div class="register__btn mb-45">
                                        <a href="{{url('/buss-owner-dashboard')}}">
                                            <button type="submit" name="submit" class="b-btn b-btn-green w-100">Login <i class="far fa-arrow-right"></i></button></a>
                                    </div>
                                    <div class="register__or text-center">
                                        <div class="register__or-title mb-20">
                                            <h3>OR</h3>
                                        </div>
                                        <div class="register__option theme-social">
                                            <ul>
                                                <li>
                                                    <a href="#" class="fb">
                                                        <i class="fab fa-facebook-f"></i>
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="tw">
                                                        <i class="fab fa-twitter"></i>
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                                </div>
                              </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- login modal end -->
        </main>
            <!-- footer area start -->
            @include('footer')
            <!-- footer area end -->

            <!-- JS here -->
        
            <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="assets/js/vendor/waypoints.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
            <script src="assets/js/isotope.pkgd.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.knob.js"></script>
            <script src="assets/js/jquery.appear.js"></script>
            <script src="assets/js/jquery.meanmenu.js"></script>
            <script src="assets/js/ajax-form.js"></script>
            <script src="assets/js/wow.min.js"></script>
            <script src="assets/js/jquery.counterup.min.js"></script>
            <script src="assets/js/jquery.scrollUp.min.js"></script>
            <script src="assets/js/imagesloaded.pkgd.min.js"></script>
            <script src="assets/js/jquery.magnific-popup.min.js"></script>
            <script src="assets/js/nice-select.min.js"></script>
            <script src="assets/js/main.js"></script>
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>