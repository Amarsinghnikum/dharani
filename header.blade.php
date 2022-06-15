
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dharani</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
    
	<!-- CSS here -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/main.css">
</head>
<body>
   <a href="#" class="chaticon" title="chat with us">
      <img src="assets/img/chaticon.png" alt="chat-icon">
   </a>
        <!-- header-start -->
		<header class="header-transparent white-bg">
            <div class="topheader-strip">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-6 col-5">
                            <div class="account-wrapper dropdown translatebtn">
                               <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Kannada</a>
                                    <a class="dropdown-item" href="#">Vice Versa</a>
                                </div>                                    
                            </div>
                            <!-- end  -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-7 d-flex justify-content-end">
                            <ul class="top-contact">
                                <li><a href="#"><i class="fas fa-headphones-alt"></i> Call Us: +1-888 658 8388</a>
                                </li>
                                <li><a href="#" class="topdonatebtn">Donate Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
            <div id="sticky-header" class="main-menu-area header-area header-area-2 pl-55 pr-55">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="logo">
                                <a href="{{url('/index')}}"><img src="assets/img/logo.png" alt="" /></a>
                            </div>
                            <div class="logo-black">
                               <a href="{{url('/index')}}"><img src="assets/img/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-sm-6 col-6">
                            <div class="header-right d-flex justify-content-end justify-content-lg-between align-items-center">
                                <div class="main-menu main-menu-2 d-none d-lg-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="{{url('/index')}}">
                                                <i class="fas fa-home"></i></a></li>
                                            <li><a href="#">Our Services <i class="far fa-angle-down"></i></a>
                                                <ul class="sub-menu text-left">
                                                    <li><a href="{{url('/service-list')}}">Invester Services</a>
                                                </ul>
                                            </li>
                                            <li><a href="#">How it works</a></li>
                                            <li><a href="#">List a Business <i class="far fa-angle-down"></i></a>
                                                <ul class="sub-menu text-left">
                                                    <li><a href="#">Get Invester</a>
                                                    <li><a href="#">Get Business to Invest</a>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('/business-state')}}">Business States</a></li>
                                            <li><a href="{{url('/investor')}}">Investor</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-btn d-none d-lg-block">
                                    @php 
                                    $investorname = "";
                                    @endphp
                                    @if(Session::get('investor')||Session::get('business'))
                                        @if(Session::get('investor'))
                                        @php
                                         $sessiondata = Session::get('investor');                                         
                                         $investorname = $sessiondata->name;
                                         $url = "/investor-dashboard";
                                         @endphp
                                         @endif
                                    
                                         @if(Session::get('business'))
                                         @php
                                         $data = Session::get('business');
                                         $investorname = $data->name;
                                         $url = "/buss-owner-dashboard";
                                        @endphp
                                        @endif
                                        
                                        <div class="sell-your-site-wrapper ">
                                            <div class="account-wrapper dropdown">
                                                <a href="{{url('/')}}{{$url}}" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-user"></i>
                                                    <span><small>Welcome </small><br>{{$investorname}}</span>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    @else 
                                    <div class="sell-your-site-wrapper ">
                                            <div class="account-wrapper dropdown">
                                                <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-sign-in-alt"></i>
                                                    <span><small>Got an Account?</small><br>Login / Register</span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(177px, 38px, 0px);">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModal">Investors</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModal2">Business Owner</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                

                                <div class="sidebar__menu d-lg-none">
                                    <div class="sidebar-toggle-btn sidebar-toggle-btn-2" id="sidebar-toggle">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>