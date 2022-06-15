
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Dharani</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
   function add_more_record_pdf(add,val){
  if(val == 2){
    for(var i=1; i<=5;i++){
    add_incr = i+1;
    add_decr = i-1;
      if(document.getElementById('attributes_value_div_pdf_heading_'+i).style.display == "none"){
        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('attributes_value_div_pdf_heading_'+i).style.display = "block";

        document.getElementById('newBox_3_'+i).style.display = "none";
        document.getElementById('cancel_3_'+i).style.display = "block";
        document.getElementById('cancel_3_'+add_decr).style.display = "block";
        return false;
      }
    }
  }
}
function del_more_record_pdf(name,id){
  if(name == 'attributes'){         
      if(document.getElementById('attributes_value_div_pdf_heading_'+id).style.display == "block"){
      decr1 = id-1;
      document.getElementById('documenttitle'+id).value="";
      document.getElementById('documentpdf'+id).value="";
      document.getElementById('attributes_value_div_pdf_heading_'+id).style.display = "none";
      // document.getElementById('newBox_3_'+decr1).style.display = "none"; 
      document.getElementById('cancel_3_'+decr1).style.display = "block";   
      return false;
    }
  }
}

function del_more_record_pdf1(name,id){
  if(name == 'attributes'){         
      if(document.getElementById('attributes_value_div_pdf_heading_'+id).style.display == "block"){
      decr1 = id-1;
      document.getElementById('attributes_value_div_pdf_heading_'+id).style.display = "none";
       document.getElementById('newBox_3_'+decr1).style.display = "none"; 
      document.getElementById('cancel_3_'+decr1).style.display = "block";   
      return false;
    }
  }
//alert(id);
 $.ajax({  
        type: "POST",  
        url: "{{url('/deletePdf')}}", 
        data: {"id":id,
        "_token": "{{ csrf_token() }}",
       },
        success: function(response){
          window.location.reload();
         //alert(response);
        }
    });

}

</script>

</head>
<body>
   <a href="#" class="chaticon" title="chat with us">
      <img src="assets/img/chaticon.png" alt="chat-icon">
   </a>
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
                                <h2>Business Panel</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Business Panel</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero-area end -->

            <form action="{{url('/owner-add-business')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pt-70 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12">
                             <div class="emp-sidebar leftbar">
                                <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title borderleft">
                                       <a href="{{url('/buss-owner-dashboard')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                                    </h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title borderleft">
                                       <a href="{{url('/owner-add-business')}}" class="usermenu-active">
                                         <i class="fas fa-briefcase"></i> 
                                         Business Listing
                                       </a>
                                    </h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title borderleft">
                                       <a href="{{url('/investor-connection')}}">
                                         <i class="fas fa-user"></i> Investor Connection</a>
                                    </h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title borderleft">
                                       <a href="{{url('/business-donation')}}">
                                         <i class="fas fa-money-bill"></i> Donation</a>
                                    </h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title borderleft">
                                       <a href="{{url('/buss-change-password')}}"><i class="fas fa-key"></i> Change Password</a>
                                    </h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title borderleft">
                                       <a href="{{url('/session/remove')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                        <h2>Business Listing</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label class="formhd">Select Category <span class="valired">*</span></label>
                    <div class="input-text">
                    <input type="hidden" name="business_id" value="{{$afreen!=''?$afreen->business_id:''}}">
                        <select class="formfld selectfld" name="category">
                            <option>{{$afreen!=''?$afreen->category:''}}</option>
                            <option>Education</option>
                            <option>Health</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label class="formhd">Business Name <span class="valired">*</span></label>
                    <div class="input-text">
                        
                        <input type="text" class="formfld" name="businessname" value="{{$afreen!=''?$afreen->businessname:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Country <span class="valired">*</span></label>
                    <div class="input-text">
                        <select class="formfld selectfld" name="country">
                            <option>{{$afreen!=''?$afreen->country:''}}</option>
                            <option>India</option>
                            <option>UK</option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Location <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="location" value="{{$afreen!=''?$afreen->location:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Funding Needed (In Rupees) <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="fundingneeded" value="{{$afreen!=''?$afreen->fundingneeded:''}}">
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Job Informations</h5>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Established <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="established" placeholder="e.g. 1-5 year(s)" value="{{$afreen!=''?$afreen->established:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Employees <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="employees" placeholder="e.g. 100 - 500" value="{{$afreen!=''?$afreen->employees:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Legal Entity</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="legalentity" value="{{$afreen!=''?$afreen->legalentity:''}}" placeholder="e.g. Public Limited Company">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Reported Sales (in amount) <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="reportedsales" placeholder="" value="{{$afreen!=''?$afreen->reportedsales:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Industries</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="industries" value="{{$afreen!=''?$afreen->industries:''}}" placeholder="e.g. Education Licenses">
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Businessman Details</h5>
                </div>
                <div class="col-sm-4">
                    <label class="formhd">Adhaar No. of Chairman or Director <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="adhaarno" placeholder="" value="{{$afreen!=''?$afreen->adhaarno:''}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="formhd">Business Registration No. <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessregistrationno" value="{{$afreen!=''?$afreen->businessregistrationno:''}}" placeholder="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="formhd">GST No. <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="gstno" placeholder="" value="{{$afreen!=''?$afreen->gstno:''}}">
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Why Need Funding</h5>
                </div>
                <div class="col-sm-12">
                    <label class="formhd"></label>
                    <div class="input-text">
                        <textarea class="formfld" style="min-height: 250px;" name="whyneedfunding">
                        {{$afreen!=''?$afreen->whyneedfunding:''}}
                         </textarea>
                    </div>
                </div>                                
                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Industry Type</h5>
                </div>
                <div class="col-sm-6">
                    <div class="input-text">
                        <select class="formfld selectfld" name="industrytype">
                            <option>{{$afreen!=''?$afreen->industrytype:''}}</option>
                            <option>MSME</option>
                            <option>Small Scale</option>
                            <option>Medium Scale</option>
                            <option>Large Scale</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Business Details</h5>
                </div>
                <div class="col-sm-12">
                    <label class="formhd"></label>
                    <div class="input-text">
                        <textarea class="formfld" style="min-height: 500px;" name="ckeditor" id="editor1" >
                        {{$afreen!=''?$afreen->ckeditor:''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>
<!--**************************************************************************************************************-->  
                <div class="col-sm-12">
                    <h5>Business Documents</h5>
                </div>
                <?php for($j=1;$j<=5;$j++){ ?>

                <div class="col-sm-4" id="attributes_value_div_pdf_heading_<?=$j?>" <?php if($j==1)
                { echo 'style="display:block;"'; }else{ ?>style="display:none;" <?php } ?>>

                    <label class="formhd">Document Tittle<span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="documenttitle<?=$j?>" id="documenttitle<?=$j?>" placeholder="add address here" multiple>
                    </div>
                
                <div class="col-sm-12">
                    <label class="formhd">Document PDF<span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="file" class="formfld" name="documentpdf<?=$j?>" id="documentpdf<?=$j?>" multiple>
                    </div>                                              

                <div class="col-sm-4" id="newBox_3_<?=$j?>" <?php if($j!=1){ echo"style='display:none;'";} ?>>
                    <label class="formhd">&nbsp;</label>
                    <div class="col-sm-12"></div>
                    <button type="button" name="add-more-form" onclick="return add_more_record_pdf('<?=$j?>',2);"id="add-more-form" 
                    class="btn btn-box-tool" data-target="#pdfrow" aria-expanded="false" aria-controls="pdfrow">
                        <i class="fa fa-plus"></i> Add More
                    </button>
                   </div>
                </div>
                <?php if($j!=1){ ?>
                <div class="col-sm-4" id="cancel_3_<?=$j?>" style="display:block;">
                <button type="button" onclick="return del_more_record_pdf('attributes','<?=$j?>');" class="btn btn-box-tool" data-toggle="collapse" data-target="#pdfrow" aria-expanded="false" aria-controls="pdfrow">
                   <i class="fa fa-times"></i> Remove
                </button>
                </div>            
              <?php }?>
            </div>
            <?php } ?>
            @if($sandeep)
            @foreach($sandeep as $key=>$val)          
           <input type="hidden" name="pdfup[]" value="<?=$val->id?>">
            <div class="col-sm-4" id="attributes_value_div_pdf_heading1_<?=$val->id?>">

                <label class="formhd">Document Tittle<span class="valired">*</span></label>
                <div class="input-text">
                
                    <input type="text" value="{{$val->documenttitle}}" name="documenttitle1_<?=$val->id?>" >
                </div>
                
                <div class="col-sm-12">
                    <label class="formhd">Document PDF<span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="hidden" name="documentpdf12_<?=$val->id?>" value="{{$val->documentpdf}}">
                        <input type="file" class="formfld" name="documentpdf1_<?=$val->id?>" id="documentpdf1_<?=$val->id?>" multiple>
                    <a href="uploads/pdf/{{$val->documentpdf}}">{{$val->documentpdf}}</a>
                    </div>     
                    <?php  if($val->id=1){ ?>                                         
                <div class="col-sm-4" id="cancel_3_<?=$val->id?>" style="display:block;" >
                <button type="button" onclick="return del_more_record_pdf1('attributes','<?=$val->id?>');" class="btn btn-box-tool" data-toggle="collapse" data-target="#pdfrow" aria-expanded="false" aria-controls="pdfrow">
                   <i class="fa fa-times"></i> Remove
                </button>
                </div>
                <?php }?>
                </div>
                </div>
            @endforeach
            @endif

            <div id="upload_pdf_heading_error"></div> 
            <?php //print_r($sandeep); ?>
<!--**************************************************************************************************************-->                
                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Business Photos</h5>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 1 Tittle <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessphototitle1" value="{{$afreen!=''?$afreen->businessphototitle1:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 1 (Profile Pic) <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="file" class="formfld" name="businessphoto1">
                        <img src="uploads/businessphoto1/{{$afreen!=''?$afreen->businessphoto1:''}}" name="businessphoto1" alt="" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 2 Tittle</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessphototitle2" value="{{$afreen!=''?$afreen->businessphototitle2:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 2</label>
                    <div class="input-text">
                        <input type="file" class="formfld" name="businessphoto2" value="{{$afreen!=''?$afreen->businessphoto2:''}}">
                        <img src="uploads/businessphoto2/{{$afreen!=''?$afreen->businessphoto2:''}}" name="businessphoto2" alt="" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 3 Tittle</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessphototitle3" value="{{$afreen!=''?$afreen->businessphototitle3:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 3</label>
                    <div class="input-text">
                        <input type="file" class="formfld" name="businessphoto3" vlaue="{{$afreen!=''?$afreen->businessphoto3:''}}">
                        <img src="uploads/businessphoto3/{{$afreen!=''?$afreen->businessphoto3:''}}" name="businessphoto3" alt="" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 4 Tittle</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessphototitle4" value="{{$afreen!=''?$afreen->businessphototitle4:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 4</label>
                    <div class="input-text">
                        <input type="file" class="formfld" name="businessphoto4" value="{{$afreen!=''?$afreen->businessphoto4:''}}">
                        <img src="uploads/businessphoto4/{{$afreen!=''?$afreen->businessphoto4:''}}" name="businessphoto4" alt="" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 5 Tittle</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessphototitle5" value="{{$afreen!=''?$afreen->businessphototitle5:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Photo 5</label>
                    <div class="input-text">
                        <input type="file" class="formfld" name="businessphoto5" value="{{$afreen!=''?$afreen->businessphoto5:''}}">
                        <img src="uploads/businessphoto5/{{$afreen!=''?$afreen->businessphoto5:''}}" name="businessphoto5" alt="" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Business Videos</h5>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Video 1 Tittle</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessvideotitle1" value="{{$afreen!=''?$afreen->businessvideotitle1:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Video 1 URL (link from youtube)</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessvideourl1" value="{{$afreen!=''?$afreen->businessvideourl1:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Video 2 Tittle</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessvideotitle2" value="{{$afreen!=''?$afreen->businessvideotitle2:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Business Video 2 URL (link from youtube)</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="businessvideourl2" value="{{$afreen!=''?$afreen->businessvideourl2:''}}">
                    </div>
                </div>

                <div class="col-sm-12"><hr/></div>
                <div class="col-sm-12">
                        <h5>Website and Social Profiles</h5>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Website URL <span class="valired">*</span></label>
                    <div class="input-text">
                        <input type="text" class="formfld" placeholder="" name="websiteurl" value="{{$afreen!=''?$afreen->websiteurl:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Facebook Profile Link</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="facebookprofilelink" value="{{$afreen!=''?$afreen->facebookprofilelink:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Twitter Profile Link</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="twitterprofilelink" value="{{$afreen!=''?$afreen->twitterprofilelink:''}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Linkedin Profile Link</label>
                    <div class="input-text">
                        <input type="text" class="formfld" name="linkedinprofilelink" value="{{$afreen!=''?$afreen->linkedinprofilelink:''}}">
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>

                <div class="col-sm-12">
                        <h5>Fund Needed Before</h5>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Month</label>
                    <div class="input-text">
                        <select class="formfld selectfld" name="month">
                            <option>{{$afreen!=''?$afreen->month:''}}</option>
                            <option>January</option>
                            <option>February</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="formhd">Year</label>
                    <div class="input-text">
                        <select class="formfld selectfld" name="year">
                            <option>{{$afreen!=''?$afreen->year:''}}</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12"><hr/></div>
                @if($afreen!="")
                <div class="col-sm-6">
                    <label class="formhd">Status (Active/Deactive): 
                    <input type="checkbox" name="Active" value="Active" {{$afreen->Active=='Active'?'checked':''}}>Active                                                                       
                </label>                   
                </div>
                @else
                <div class="col-sm-6">
                    <label class="formhd">Status (Active/Deactive): 
                    <input type="checkbox" name="Active" value="Active" >Active                                                                       
                </label>                   
                </div>
                @endif
                <div class="col-sm-12">
                    <button type="submit" name="submit" class="orangebtn">Submit</button>
                </div>
</form>
                                <div class="col-sm-12">
                                    <div class="section-title mb-sm-60 mb-20 mt-5">
                                        <h2>Service List</h2>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                              <thead>                                                
                                                <tr>
                                                  <th width="33">S.No</th>
                                                  <th width="138">Service Category</th>
                                                  <th width="250">Service Name</th>
                                                  <th width="130">Service Price</th>
                                                  <th width="67">Status</th>
                                                  <th width="38">Edit</th>
                                                  <th width="45">Delete</th>
                                                  <th width="150">Admin Approval</th>
                                                </tr>
                                            </thead>

                                              
                                            <tbody>
                                                <tr>
                                                  <td>1.</td>
                                                  <td>Education</td>
                                                  <td>Education Businesses for Sale and Investment Opportunities</td>
                                                  <td><i class="fas fa-rupee-sign"></i> 2,50,000</td>
                                                  <td><strong class="statusgreen">Active</strong></td>
                                                  <td>
                                                     <a href="javascript:void(0);"><i class="far fa-edit"></i></a>
                                                  </td>
                                                  <td>
                                                     <a href="{{url('/')}}/deleteowner-add-business/">
                                                        <i class="far fa-trash-alt"></i>
                                                     </a>
                                                  </td>
                                                  <td><strong class="statusred">Pending</strong></td>
                                                </tr>
                                                <tr>
                                                  <td>2.</td>
                                                  <td>Medical</td>
                                                  <td>Medical Businesses for Sale and Investment Opportunities</td>
                                                  <td><i class="fas fa-rupee-sign"></i> 2,50,000</td>
                                                  <td><strong class="statusred">Deactive</strong></td>
                                                  <td>
                                                     <a href="javascript:void(0);"><i class="far fa-edit"></i></a>
                                                  </td>
                                                  <td>
                                                     <a href="{{url('/')}}/deleteowner-add-business">
                                                        <i class="far fa-trash-alt"></i>
                                                     </a>
                                                  </td>
                                                  <td><strong class="statusgreen">Approved</strong></td>
                                                </tr>
                                              </tbody>
                                        </table>
                                        <!-- table end -->                                        
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--***********************************************************************************************************-->
<script>
      CKEDITOR.replace( 'editor1' );
    </script>
<!--***********************************************************************************************************-->

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
                                                    <a href="{{url('/buss-owner-dashboard')}}">
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