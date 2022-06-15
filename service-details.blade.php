
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
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">


   <a href="#" class="chaticon" title="chat with us">
      <img src="assets/img/chaticon.png" alt="chat-icon">
   </a>
   <script src="https://smtpjs.com/v3/smtp.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      function addview4(id){
        $.ajax({
            type: "POST",  
            url: "{{url('/add-view4')}}", 
            data: {"businessid":id,
            "_token": "{{ csrf_token() }}",
          },
          success: function(response){
              console.log(response);
          }
        });
      }      
    </script>

<!-- <script type="text/javascript">
    function sendEmail() {
        // alert("Are you sure;")
      Email.send({
        Host: "smtp.gmail.com",
        Username: "singhnikumbh1@gmail.com",
        Password: "Nikumbh@123",
        To: 'jubairprintop@gmail.com',
        From: "singhnikumbh1@gmail.com",
        Subject: "Sending Email using Amit",
        Body: "Well that was easy!!",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }
  </script> -->
</head>
<body>    
        <!-- header-start -->
		@include('header')
        <!-- header-start -->

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
                        <a class="h-btn h-btn-2 mb-15" href="#"><i class="far fa-user-circle"></i> Investor's Login</a>
                        <a class="h-btn h-btn-green h-btn-white" href="#"><i class="far fa-lock-alt"></i> Business Owner's Login</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay"></div>
        <!-- sidebar area end -->

        <main>
            <!-- hero-area start -->
            <section class="hero-area pos-rel inerslider big">
                <div class="hero-shape">
                    <span class="circle"></span>
                    <span class="circle circle-yellow"></span>
                    <span class="shape-plus">+</span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-content text-center mt-80">
                                <h2>Service List</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Service List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero-area end -->

            <section class="job__details mt--80 pb-100 grey-bg">
                <div class="container">
                    <div class="job-item job-item-2 white-bg">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <div class="job-wrapper">
                                
                                    <div class="job-instructor-profile">
                                        <div class="job-instructor-img job-instructor-img-2 f-left">
                                            <img src="{{url('/')}}/uploads/businessphoto1/{{$servicelist->businessphoto1}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-7">
                                <div class="job-right">
                                
                                        <div class="job-tag mb-20 detailseentag">
                                            <span class="tag-normal"><i class="far fa-eye"></i>{{$servicelist->view2}}</span>
                                        </div>
                                        <div class="job-instructor-title">
                                            <h5>Education Businesses for Sale and Investment Opportunities</h5>                        
                                        </div>
                                        <div class="job-meta job-meta-2 mt-15">
                                            <span><strong>Category:</strong> {{$servicelist->category}}</span>
                                        </div>
                                        <div class="job-meta job-meta-2 mt-15">
                                            <span><i class="far fa-map-marker-alt"></i>{{$servicelist->location}}</span>
                                            <span><i class="fas fa-rupee-sign"></i>{{$servicelist->fundingneeded}}</span>
                                        </div>
                                        <div class="job-btn">
                                            <a class="b-btn b-btn-green" href="#">Contact Us <i class="far fa-arrow-right"></i>
                                            </a>
                                            <a class="b-btn b-btn-black ml-5" href="#" data-toggle="collapse" data-target="#donaterow" aria-expanded="true" aria-controls="donaterow">Donate Us</a>
                                        </div>
                                        <div class="banck-icon">
                                            <i class="flaticon-dashboard"></i>
                                        </div>

                                 <div class="col-sm-12 collapse" id="donaterow" style="">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <label class="formhd">Amount</label>
                                            <div class="input-text">
                                                <input type="text" class="formfld" placeholder="add amount">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="formhd">&nbsp;</label>
                                            <div class="col-sm-12"></div>
                                            <button type="button" class="btn b-btn-green" style="color: #fff;">
                                                Donate Money
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- donate div end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                       $videoURL = "https://www.youtube.com/watch?v=aPUVUrS2oC0";
                       $convertedURL1 = str_replace("watch?v=", "embed/", $videoURL);   
                    ?>
                    <?php
                       $videoURL2 = "https://www.youtube.com/watch?v=iET9-bGzUsQ";
                       $convertedURL2 = str_replace("watch?v=", "embed/", $videoURL2);   
                    ?>
                    <div class="job-details-wrapper white-bg">
                        <div class="job-details-inner">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="videocont">
                                        <h3>{{$servicelist->businessvideotitle1}}</h3>                                        
                                        <iframe width="100%" height="315" src="<?php echo $convertedURL1; ?>" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="videocont">
                                        <h3>{{$servicelist->businessvideotitle2}}</h3>                                        
                                        <iframe width="100%" height="315" src="<?php echo $convertedURL2; ?>" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    
                                    <div class="team__job mb-30">
                                        <h4>Job Informations</h4>
                                        <ul>
                                            <li>
                                                <h5>Established</h5>
                                                <span>{{$servicelist->established}}</span>
                                            </li>
                                            <li>
                                                <h5>Employees</h5>
                                                <span>{{$servicelist->employees}}</span>
                                            </li>
                                            <li>
                                                <h5>Legal Entity</h5>
                                                <span>{{$servicelist->legalentity}}</span>
                                            </li>
                                            <li>
                                                <h5>Reported Sales</h5>
                                                <span><i class="fas fa-rupee-sign"></i> {{$servicelist->reportedsales}}</span>
                                            </li>
                                            <li>
                                                <h5>Industries</h5>
                                                <span>{{$servicelist->industries}}</span>
                                            </li>
                                            <li>
                                                <h5>Country</h5>
                                                <span>{{$servicelist->country}}</span>
                                            </li>
                                            <li>
                                                <h5>Listed By</h5>
                                            @foreach($owner as $key=>$vall)
                                                <span>{{$vall->name}}</span>
                                            @endforeach
                                            </li>
                                            <li>
                                                <h5>Status</h5>
                                                <span class="greenstatus" >{{$servicelist->Active}}</span>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="job-contact">
                                        <h4>Send Us Message</h4>
                                        <form  action="{{url('/savequery')}}" method="post">
                                            @csrf
                                            <div class="job-input-2">
                                                <div class="medatoryicon">*</div>
                                                @php 
                                                $investorid = "";
                                                @endphp
                                                @if(Session::get('investor'))
                                                @php
                                                $sessiondata = Session::get('investor');
                                                $investorid = $sessiondata->id;
                                                $url="/service-details";
                                                @endphp
                                                @endif
                                                
                                                <input type="hidden" name="investorid" value="{{$investorid}}">                                               
                                                <input type="hidden" name="businessowner_id" value="{{$servicelist!=''?$servicelist->business_id:''}}">
                                                <input type="text" placeholder="Your Full Name" name="name">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="job-input-2">
                                                <div class="medatoryicon">*</div>
                                                <input type="email" placeholder="Email Address" name="email">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="job-input-2">
                                                <div class="medatoryicon">*</div>
                                                <input type="text" placeholder="Mobile" name="mobile">
                                                <i class="fas fa-mobile-alt"></i>
                                            </div>
                                            <div class="job-input-2">
                                                <textarea placeholder="Write Comments" name="question"></textarea>
                                                <i class="far fa-pen-alt"></i>
                                            </div>
                                            @if($investorid)
                                            <button type="submit" class="b-btn b-btn-green" name="submit">Send 
                                                <i class="far fa-arrow-right"></i></button>
                                            @else
                                            <button type="button" class="b-btn b-btn-green" name="submit">Send 
                                                <i class="far fa-arrow-right"></i></button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <h4 class="mt-0">Photo Gallery</h4>
                                    <div class="portfolio-cont">
                                        
                                        
                                        <div class="row photos">
                                            <div class="col-sm-12 col-md-6 item">
                                               <a href="{{url('/')}}/uploads/businessphoto2/{{$servicelist->businessphoto2}}" data-lightbox="photos"><img class="img-fluid" src="{{url('/')}}/uploads/businessphoto2/{{$servicelist->businessphoto2}}">
                                               </a>
                                               <h3 class="videotitle">{{$servicelist->businessphototitle2}}</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-6 item">
                                                <a href="{{url('/')}}/uploads/businessphoto3/{{$servicelist->businessphoto3}}" data-lightbox="photos"><img class="img-fluid" src="{{url('/')}}/uploads/businessphoto3/{{$servicelist->businessphoto3}}"></a>
                                                <h3 class="videotitle">{{$servicelist->businessphototitle3}}</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-6 item">
                                                <a href="{{url('/')}}/uploads/businessphoto4/{{$servicelist->businessphoto4}}" data-lightbox="photos"><img class="img-fluid" src="{{url('/')}}/uploads/businessphoto4/{{$servicelist->businessphoto4}}"></a>
                                                <h3 class="videotitle">{{$servicelist->businessphototitle4}}</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-6 item">
                                               <a href="{{url('/')}}/uploads/businessphoto5/{{$servicelist->businessphoto5}}" data-lightbox="photos"><img class="img-fluid" src="{{url('/')}}/uploads/businessphoto5/{{$servicelist->businessphoto5}}">
                                               </a>
                                               <h3 class="videotitle">{{$servicelist->businessphototitle5}}</h3>
                                            </div>
                                        </div>

                                        <!-- end -->
                                    </div>


                                    <div class="job-list mb-50 mt-30">
                                        <h4>Why Need Funding</h4>
                                        <p>{{$servicelist->whyneedfunding}}</p>
                                    </div>


                                    <div class="job-list mb-50">
                                        <h4>Business Details</h4>
                                        
                                        <p>{{$servicelist->ckeditor}}</p>

                                        <h4>Products & Services</h4>
                                        <ul>
                                            <li>Build positive and productive working relationships with stakeholders</li>
                                            <li>Serve as primary contact for stakeholders’ inquiries and concerns</li>
                                            <li>Develop process improvements to achieve cost effectiveness and time </li>
                                            <li>Report delivery status to stakeholders and develop required delivery </li>
                                            <li>Manage team by recruiting, training and coaching, communicating job</li>
                                        </ul>
                                    </div>

                                    <div class="job-upload mb-50 d-none">
                                        <form action="#">
                                            <input type="text" placeholder="Upload Your Resume">
                                            <button type="submit" class="b-btn">Upload Resume<i class="fal fa-arrow-right"></i></button>
                                        </form>
                                    </div>
                                   
                                    <div class="related-job">
                                        <h4>Business Documents</h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tbody>
                                                @foreach($documentpdf as $pdf=>$document)                                   
                                                <tr>
                                                    <th scope="row">{{$document->documenttitle}}</th>
                                                    <td><a href="{{url('/')}}/uploads/pdf/{{$document->documentpdf}}" class="b-btn b-btn-green"><i class="far fa-file-pdf"></i>View</a></td>
                                                </tr>
                                                <tr>                                                         
                                                @endforeach
                                                </tbody>
                                            </table>                                        
                                            <!-- table end -->                                        
                                        </div>
                                </div>                                
                                <button type="submit" name="button" class="b-btn b-btn-green mt-20 px-5 py-4">Contact Us Now <i class="far fa-arrow-right"></i></button>
                            </div>
                            <div class="job-list mb-50 mx-2">

                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="section-title mb-sm-60 mb-20 mt-50">
                                        <h2>Related Services</h2>
                                    </div>
                                </div>
                                <!-- product box start -->                                                  
                                <div class="col-sm-6 col-md-4">
                                    <div class="b-cat mb-0">
                                        <div class="cat-thumb">
                                            <div class="peopleseen">
                                                <i class="far fa-eye"></i>{{$servicelist->view1}}                                   
                                            </div>
                                            <a href="{{url('/service-details')}}/{{$servicelist->business_id}}" onclick="addview4({{$servicelist->business_id}})" title="View Details"><img src="{{url('/')}}/assets/img/fetservice1.jpg" alt=""></a>
                                        </div>                                
                                        <div class="cat-down">
                                            <h5><a href="{{url('/service-details')}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                   
                                            <span class="catdown-location"> <strong>Category:</strong> {{$servicelist->category}}
                                            </span>
                                            <span class="catdown-location">
                                                 <strong>Location:</strong> {{$servicelist->location}}
                                            </span>
                                            <span class="catdown-location catdown-price">
                                                <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>{{$servicelist->fundingneeded}} Lacs</span>
                                            </span>

                                            <a class="cat-d-link" href="{{url('/service-details')}}/{{$servicelist->business_id}}" title="View Details">
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product box end --> 
                                                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                                            <form action="#">
                                                <div class="register__input">
                                                    <input type="text" placeholder="Full Name">
                                                    <i class="far fa-user"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="email" placeholder="Your Email Address">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="text" placeholder="Your  Phone Number">
                                                    <i class="far fa-phone"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" placeholder="Password">
                                                    <i class="far fa-lock-alt"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" placeholder="Confirm Password">
                                                    <i class="far fa-lock-alt"></i>
                                                </div>

                                                <div class="register__btn mb-15">
                                                    <a href="{{url('/investor-dashboard')}}">
                                                        <button type="button" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button>
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
                                            <form action="#">
                                                <div class="register__input">
                                                    <input type="email" placeholder="Username/Email ID">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" placeholder="Password">
                                                    <i class="far fa-lock-alt"></i>
                                                </div>
                                                <div class="register__btn mb-45">
                                                    <a href="{{url('/investor-dashboard')}}">
                                                        <button type="button" class="b-btn b-btn-green w-100">Login <i class="far fa-arrow-right"></i></button></a>
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
                                            <form action="#">
                                                <div class="register__input">
                                                    <input type="text" placeholder="Full Name">
                                                    <i class="far fa-user"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="email" placeholder="Your Email Address">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="text" placeholder="Your  Phone Number">
                                                    <i class="far fa-phone"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" placeholder="Password">
                                                    <i class="far fa-lock-alt"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" placeholder="Confirm Password">
                                                    <i class="far fa-lock-alt"></i>
                                                </div>

                                                <div class="register__btn mb-15">
                                                    <a href="{{url('/buss-owner-dashboard')}}">
                                                        <button type="button" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button></a>
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
                                            <form action="#">
                                                <div class="register__input">
                                                    <input type="email" placeholder="Username/Email ID">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="register__input">
                                                    <input type="password" placeholder="Password">
                                                    <i class="far fa-lock-alt"></i>
                                                </div>
                                                <div class="register__btn mb-45">
                                                    <a href="{{url('/buss-owner-dashboard')}}">
                                                        <button type="button" class="b-btn b-btn-green w-100">Login <i class="far fa-arrow-right"></i></button></a>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    </body>
</html>