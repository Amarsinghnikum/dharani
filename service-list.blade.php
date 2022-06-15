
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      function addview(id){
        $.ajax({
            type: "POST",  
            url: "{{url('/add-view')}}", 
            data: {"businessid":id,
             "_token": "{{ csrf_token() }}",
          },
          success: function(response){
              console.log(response);
          }
        });
      }      
    </script>
    <script>
        function addview2(id){
            $.ajax({
                type: "POST",
                url: "{{url('/add-view2')}}",
                data: {"businessid":id,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response){
                console.log(response);
            }
          });
        }
    </script>
    <script>
        function addview3(id){
            $.ajax({
                type: "POST",
                url: "{{url('/add-view3')}}",
                data: {"businessid":id,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response){
                console.log(response);
            }
          });
        }
    </script>

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
            <section class="hero-area pos-rel inerslider">
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

            <div class="pt-70 pb-70" data-background="assets/img/brand/brand-bg.jpg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12">
                              <div class="section-title mb-sm-60 mb-20">
                                <h2>Categories</h2>
                            </div>
                             <div class="emp-sidebar leftbar">
                                <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Design, Art & Multimedia
                                </a>
                              </h4>
                              </div>
                             
                              
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Education
                                </a>
                              </h4>
                              </div>
                             
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Accounting company
                                </a>
                              </h4>
                              </div>
                              
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingFour">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Retail Market
                                    </a>
                                  </h4>
                              </div>
                             
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingFourssss">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFoursss" aria-expanded="false" aria-controls="collapseFour">
                                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Telecommunications
                                    </a>
                                  </h4>
                              </div>
                            </div>
                            
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingFourssss">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFoursss" aria-expanded="false" aria-controls="collapseFour">
                                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Restaurant / Food market
                                    </a>
                                  </h4>
                              </div>
                            </div>
                            
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingFourssss">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFoursss" aria-expanded="false" aria-controls="collapseFour">
                                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Construction / Facilities
                                    </a>
                                  </h4>
                              </div>
                            </div>
                            
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingFourssss">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFoursss" aria-expanded="false" aria-controls="collapseFour">
                                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Medical
                                    </a>
                                  </h4>
                              </div>
                            </div>
                          </div>
                             </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section-title mb-sm-60 mb-20">
                                        <h2>Design, Art & Multimedia Listing</h2>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                   <div class="filtercont">
                                       <div class="row">
                                          <div class="col-sm-12">
                                               <h5>Filter By:</h5>
                                          </div>
                                          <div class="col pr-sm-0">
                                               <select class="formfld selectfld">
                                                     <option>Country</option>
                                                     @foreach($country as $key=>$val)
                                                     <option>{{$val->name}}</option>
                                                     @endforeach
                                               </select>
                                          </div>
                                          <div class="col pr-sm-0">
                                               <select class="formfld selectfld">
                                                     <option>Category</option>
                                                     @foreach($servicelist as $val=>$keyy)
                                                     <option>{{$keyy->category}}</option>
                                                     @endforeach
                                               </select>
                                          </div>
                                          <div class="col pr-sm-0">
                                               <select class="formfld selectfld">
                                                     <option>Fund</option>
                                                     <option>0 to 10 Thousand</option>
                                                     <option>10 Thousand to 10 Lakhs</option>
                                                     <option>10 Lakhs to 50 Lakhs</option>
                                               </select>
                                          </div>
                                          <div class="col pr-sm-0">
                                               <select class="formfld selectfld">
                                                     <option>Industry Type</option>
                                                     <option>1</option>
                                                     <option>2</option>
                                                     <option>3</option>
                                                     <option>4</option>
                                               </select>
                                          </div>
                                          <div class="col">
                                               <button type="submit" name="submit" class="orangebtn mt-0">Submit</button>
                                          </div>
                                       </div>
                                   </div>
                                </div>
                                 @foreach($servicelist as $val=>$key)
                                <div class="col-sm-6 col-md-4">
                                    <div class="b-cat mb-30">
                                        <div class="cat-thumb">
                                            <div class="peopleseen">
                                                <i class="far fa-eye"></i> {{$key->view}} Seen                                       
                                            </div>
                                            <a href="{{url('/service-details')}}/{{$key->business_id}}" onclick="addview({{$key->business_id}})" title="View Details"><img src="uploads/businessphoto1/{{$key->businessphoto1}}" alt=""></a>
                                        </div>                                
                                        <div class="cat-down">
                                            <h5><a href="{{url('/service-details')}}/{{$key->business_id}}" title="View Details">Plastic Products Manufacturing Unit for sale in NC ..</a></h5>                                   
                                            <span class="catdown-location"> <strong>Category:</strong> {{$key->category}}
                                            </span>
                                            <span class="catdown-location">
                                                 <strong>Location:</strong> {{$key->location}}
                                            </span>
                                            <span class="catdown-location catdown-price">
                                                <strong>Price:</strong> <i class="fas fa-rupee-sign"></i> <span>{{$key->fundingneeded}} Lacs</span>
                                            </span>

                                            <a class="cat-d-link" href="{{url('/service-details')}}/{{$key->business_id}}" onclick="addview3({{$key->business_id}})" title="View Details">
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product box end -->
                                @endforeach
                                <!-- product box end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
    </body>
</html>