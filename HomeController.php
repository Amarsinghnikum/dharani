<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investor;
use App\Models\Businessowner;

use Session;
use Image;
use DB;
use Auth;
use Hash;
use Response;

class HomeController extends Controller
{
  public function Index(){
    return view('index');
  }
//////////////////////////////////Registration Area starts here
  public function InvestorRegistration(Request $request)
  {

    $ParamArray = ['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,
    'password'=>$request->password,'password'=>$request->confirmpassword];
    $investorregister = DB::table('tbl_investor')->insert($ParamArray);

    return back();
  }

  public function BusinessownerRegistration(Request $request)
  {
    $ParamArrayh = ['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,
    'password'=>$request->password,'password'=>$request->confirmpassword];
    $ownerregister = DB::table('tbl_businessowner')->insert($ParamArrayh);  
    
    return back();
  }
//////////////////////////////////Registration Area Ends here

//////////////////////////////////Login Area starts here
    public function InvestorLogin(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $investorlogin = DB::table('tbl_investor')->where('email', $email)->where('password', $password)->first();
        if ($investorlogin) {
          Session::put('investor',$investorlogin);
          echo "<h2>Login Successfully</h2>";  
          return view('investor-dashboard');            
        }
        else
        {
          return view('index');
        }
    }
    
    public function BusinessownerLogin(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $valid = DB::table('tbl_businessowner')->where('email', $email)->where('password', $password)->first();
        if ($valid) {
          Session::put('business',$valid);
          echo "<h2>Login Successfully</h2>";  
          return view('buss-owner-dashboard');            
        }
        else
        {
          return view('index');
        }
    }
//////////////////////////////////Login Area Ends here

    public function BusinessDonation(Request $request)
    {
    return view('business-donation');
    }

    public function BusinessState(){
      return view('business-state');
    }

    public function BussownerDashboard(){
      return view('buss-owner-dashboard');
    }

    public function logout(){
    Auth::logout();
    return redirect('/index');
    }

    public function InvestorDashboard(){
      $data = [];
      $data['businessconn'] = DB::table('tbl_businessowner')->first();
      return view('investor-dashboard',$data);
    }

    public function InvestorDonation(){
      return view('investor-donation');
    }

  public function InsertInvestorProfile(Request $request)
  {
    $data['investorprofile'] ="";     
    $data['investorprofile'] = DB::table('investor_profile')->where('investor_id',$request->investor_id)->first();

    if($request->investor_id!=""){

    if($request->isMethod('post')){ 
    if($request->hasFile('profileimage'))
    {
      $file = $request->file('profileimage');
      $profileimage =  $file->getClientOriginalName();
      $destinationPath = public_path('investor-profile/');
      $file->move($destinationPath, $profileimage);
    }
    else
    {
    $getproducts = DB::table('investor_profile')->where('investor_id',$request->investor_id)->first();
    $profileimage = $getproducts->profileimage; 
    }
    
    $ParamArrayI = [
      'fullname'=>$request->fullname,
      'phonenumber'=>$request->phonenumber,
      'email'=>$request->email,
      'company'=>$request->company,
      'domains'=>$request->domains,
      'location'=>$request->location,
      'funds'=>$request->funds,
      'profileimage'=>$profileimage,
      'previousinvestment'=>$request->previousinvestment,
      'aboutme'=>$request->aboutme,
    ];

    $insert = DB::table('investor_profile')->where('investor_id',$request->investor_id)->update($ParamArrayI);
    return back();
  }

}  
  else
  {
    $data['investorprofile'] ="";
    $investorid = Session::get('investor')->id;
    $data['investorprofile'] = DB::table('investor_profile')->where('investor_id',$investorid)->first();

    if($request->isMethod('post')){ 
    if(isset($investorid)){
    if($request->hasFile('profileimage'))
    {
      $file = $request->file('profileimage');
      $profileimage =  $file->getClientOriginalName();
      $destinationPath = public_path('investor-profile/');
      $file->move($destinationPath, $profileimage);
    }
  
  $ParamArrayI = [
    'investor_id'=>$investorid,
    'fullname'=>$request->fullname,
    'phonenumber'=>$request->phonenumber,
    'email'=>$request->email,
    'company'=>$request->company,
    'domains'=>$request->domains,
    'location'=>$request->location,
    'funds'=>$request->funds,
    'profileimage'=>$profileimage,
    'previousinvestment'=>$request->previousinvestment,
    'aboutme'=>$request->aboutme,
  ];

  $insert = DB::table('investor_profile')->insert($ParamArrayI);
  } 
 }
}
    return view('investor-profile',$data);
}
////////////////////////////////////////////////////////////////Investor Session Area Starts

  public function deleteInvestorProfile(Request $request)
  {
    $request->session()->forget('investor');
    return redirect('/index');   
  }
////////////////////////////////////////////////////////////////Investor Session Area Ends
////////////////////////////////////////////////////////////////Business Owner Session Area Starts

public function deleteBusinessProfile(Request $request)
{
  $request->session()->forget('business');
  return redirect('/index');    
}
////////////////////////////////////////////////////////////////Business Owner Session Area Ends
    public function InvestorProfile(){     
      return view('investor-profile');
    }

    public function Investor(){
      return view('investor');
    }

    public function InvestorChangepassword(){
      return view('investorchange-password');
    }

    public function SaveInvestorchangepassword(Request $request)
    {
      $old_password = $request->old_password;
      $new_password = $request->new_password;
      $confirm_password = $request->confirm_password;
      if($new_password==$confirm_password){
        $email1 = Session::get('investor')->id;
        $getdata = DB::table('tbl_investor')->where('id',$email1)->first();
        $dbpass = $getdata->password;
        if($dbpass==$old_password){
          $valid = DB::table('tbl_investor')->where('id',$email1)->update(['password'=>$new_password]);
          if ($valid=1) {
            return view('investorchange-password');
          }
          else
          {
            return view('investorchange-password');              
        }             
      }      
    }   
  }   
    
    public function BusschangePassword(){
      return view('buss-change-password');
    }

    public function SaveBusschangePassword(Request $request)
    {

      $old_password = $request->old_password;
      $new_password = $request->new_password;
      $confirm_password = $request->confirm_password;
      if($new_password==$confirm_password){
        $email = Session::get('business')->id;         
        $getdata = DB::table('tbl_businessowner')->where('id',$email)->first();
        $dbpass = $getdata->password;
        
        if($dbpass==$old_password){
          $valid = DB::table('tbl_businessowner')->where('id',$email)->update(['password'=>$new_password]);
          if ($valid=1) {
            return view('buss-change-password'); 
          }
          else
          {
           return view('buss-change-password');              
        }             
      }      
    }   
  }

  public function InsertOwnerAddbusiness(Request $request)
  {

    $getbusinessdetails = DB::table('business_listing')
    ->select('business_listing.*','business_listing.id as business_id')
    ->get();

    $data['afreen'] ="";     
    $data['sandeep']= DB::table('business_documents')->where('business_id',$request->business_id)->first();

if($request->business_id!=""){

   if($request->isMethod('post')){ 
    if(isset($request->Active)){
        $status = "Active";
    }else{
        $status = "Deactive";
    } 

    if($request->hasFile('businessphoto1'))
    {
        $file = $request->file('businessphoto1');
        $businessphoto1 =  $file->getClientOriginalName();
        $destinationPath = public_path('uploads/businessphoto1/');
        $file->move($destinationPath, $businessphoto1);
    }
    else
    {
    $getproducts1 = DB::table('business_listing')->where('business_id',$request->business_id)->first();
    $businessphoto1 = $getproducts1->businessphoto1; 
    }

    if($request->hasFile('businessphoto2'))
    {
        $file = $request->file('businessphoto2');
        $businessphoto2 =  $file->getClientOriginalName();
        $destinationPath = public_path('uploads/businessphoto2/');
        $file->move($destinationPath, $businessphoto2);
     }
     else
    {
    $getproducts2 = DB::table('business_listing')->where('business_id',$request->business_id)->first();
    $businessphoto2 = $getproducts2->businessphoto2; 
    }

     if($request->hasFile('businessphoto3'))
     {
         $file = $request->file('businessphoto3');
         $businessphoto3 =  $file->getClientOriginalName();
         $destinationPath = public_path('uploads/businessphoto3/');
         $file->move($destinationPath, $businessphoto3);
      }
      else
      {
      $getproducts3 = DB::table('business_listing')->where('business_id',$request->business_id)->first();
      $businessphoto3 = $getproducts3->businessphoto3; 
      }

      if($request->hasFile('businessphoto4'))
      {
          $file = $request->file('businessphoto4');
          $businessphoto4 =  $file->getClientOriginalName();
          $destinationPath = public_path('uploads/businessphoto4/');
          $file->move($destinationPath, $businessphoto4);
       }
       else
      {
      $getproducts4 = DB::table('business_listing')->where('business_id',$request->business_id)->first();
      $businessphoto4 = $getproducts4->businessphoto4; 
      }

       if($request->hasFile('businessphoto5'))
       {
           $file = $request->file('businessphoto5');
           $businessphoto5 =  $file->getClientOriginalName();
           $destinationPath = public_path('uploads/businessphoto5/');
           $file->move($destinationPath, $businessphoto5);
        }
      else
      {
      $getproducts5 = DB::table('business_listing')->where('business_id',$request->business_id)->first();
      $businessphoto5 = $getproducts5->businessphoto5; 
      }

    ///data store in array format       
    $ParamArray = [
        'category'=>$request->category,
        'businessname'=>$request->businessname,
        'country'=>$request->country,
        'location'=>$request->location,
        'fundingneeded'=>$request->fundingneeded,
        'established'=>$request->established,
        'employees'=>$request->employees,
        'legalentity'=>$request->legalentity,
        'reportedsales'=>$request->reportedsales,
        'industries'=>$request->industries,
        'adhaarno'=>$request->adhaarno,
        'businessregistrationno'=>$request->businessregistrationno,
        'gstno'=>$request->gstno,
        'whyneedfunding'=>$request->whyneedfunding,
        'industrytype'=>$request->industrytype,
        'ckeditor'=>$request->ckeditor,
        'businessphototitle1'=>$request->businessphototitle1,
        'businessphototitle2'=>$request->businessphototitle2,
        'businessphototitle3'=>$request->businessphototitle3,
        'businessphototitle4'=>$request->businessphototitle4,
        'businessphototitle5'=>$request->businessphototitle5,

        'businessphoto1'=>$businessphoto1,
        'businessphoto2'=>$businessphoto2,
        'businessphoto3'=>$businessphoto3,
        'businessphoto4'=>$businessphoto4,
        'businessphoto5'=>$businessphoto5,

        'businessvideotitle1'=>$request->businessvideotitle1,
        'businessvideotitle2'=>$request->businessvideotitle2,
        'businessvideourl1'=>$request->businessvideourl1,
        'businessvideourl2'=>$request->businessvideourl2,
        'websiteurl'=>$request->websiteurl,
        'facebookprofilelink'=>$request->facebookprofilelink,
        'twitterprofilelink'=>$request->twitterprofilelink,
        'linkedinprofilelink'=>$request->linkedinprofilelink,
        'month'=>$request->month,
        'year'=>$request->year,
        'Active'=>$status,
];

  $insert = DB::table('business_listing')->where('business_id',$request->business_id)->update($ParamArray);
   
  $getUploadPDF = DB::table('business_documents')->where('business_id',$request->business_id)->get();
//return $request->pdfup;
  foreach ($request->pdfup as $val) {
  $j = $val;
  $documenttitle = $request->post('documenttitle1_'.$j);

    if($request->hasFile('documentpdf1_'.$j)){
      $file = $request->file('documentpdf1_'.$j);
      $documentpdf =  $file->getClientOriginalName();
      $destinationPath = public_path('uploads/pdf/');
      $file->move($destinationPath, $documentpdf);
    }
    else{
      $documentpdf = $request->post('documentpdf12_'.$j);
    } 
    
        $paramArrayP = array(
          'business_id'=>$request->business_id,
          'documenttitle'=>$documenttitle,
          'documentpdf'=>$documentpdf
          );

        DB::table('business_documents')->where('id', $j)->update($paramArrayP); 
    }
  }
}

      else
      {
        $data['businesslisting'] ="";
        $businessid = Session::get('business')->id;
        $data['businesslisting'] = DB::table('business_listing')->where('business_id',$businessid)->first(); 

        if($request->isMethod('post')){ 
        if(isset($businessid)){
        if(isset($request->Active)){
            $status = "Active";
        }else{
            $status = "Deactive";
        } 

        if($request->hasFile('businessphoto1'))
        {
            $file = $request->file('businessphoto1');
            $businessphoto1 =  $file->getClientOriginalName();
            $destinationPath = public_path('uploads/businessphoto1/');
            $file->move($destinationPath, $businessphoto1);
        }

        if($request->hasFile('businessphoto2'))
        {
            $file = $request->file('businessphoto2');
            $businessphoto2 =  $file->getClientOriginalName();
            $destinationPath = public_path('uploads/businessphoto2/');
            $file->move($destinationPath, $businessphoto2);
         }

         if($request->hasFile('businessphoto3'))
         {
             $file = $request->file('businessphoto3');
             $businessphoto3 =  $file->getClientOriginalName();
             $destinationPath = public_path('uploads/businessphoto3/');
             $file->move($destinationPath, $businessphoto3);
          }

          if($request->hasFile('businessphoto4'))
          {
              $file = $request->file('businessphoto4');
              $businessphoto4 =  $file->getClientOriginalName();
              $destinationPath = public_path('uploads/businessphoto4/');
              $file->move($destinationPath, $businessphoto4);
           }

           if($request->hasFile('businessphoto5'))
           {
               $file = $request->file('businessphoto5');
               $businessphoto5 =  $file->getClientOriginalName();
               $destinationPath = public_path('uploads/businessphoto5/');
               $file->move($destinationPath, $businessphoto5);
            }
    
        $ParamArray = [
            'business_id'=>$businessid,
            'category'=>$request->category,
            'businessname'=>$request->businessname,
            'country'=>$request->country,
            'location'=>$request->location,
            'fundingneeded'=>$request->fundingneeded,
            'established'=>$request->established,
            'employees'=>$request->employees,
            'legalentity'=>$request->legalentity,
            'reportedsales'=>$request->reportedsales,
            'industries'=>$request->industries,
            'adhaarno'=>$request->adhaarno,
            'businessregistrationno'=>$request->businessregistrationno,
            'gstno'=>$request->gstno,
            'whyneedfunding'=>$request->whyneedfunding,
            'industrytype'=>$request->industrytype,
            'ckeditor'=>$request->ckeditor,
            'businessphototitle1'=>$request->businessphototitle1,
            'businessphototitle2'=>$request->businessphototitle2,
            'businessphototitle3'=>$request->businessphototitle3,
            'businessphototitle4'=>$request->businessphototitle4,
            'businessphototitle5'=>$request->businessphototitle5,

            'businessphoto1'=>$businessphoto1,
            'businessphoto2'=>$businessphoto2,
            'businessphoto3'=>$businessphoto3,
            'businessphoto4'=>$businessphoto4,
            'businessphoto5'=>$businessphoto5,

            'businessvideotitle1'=>$request->businessvideotitle1,
            'businessvideotitle2'=>$request->businessvideotitle2,
            'businessvideourl1'=>$request->businessvideourl1,
            'businessvideourl2'=>$request->businessvideourl2,
            'websiteurl'=>$request->websiteurl,
            'facebookprofilelink'=>$request->facebookprofilelink,
            'twitterprofilelink'=>$request->twitterprofilelink,
            'linkedinprofilelink'=>$request->linkedinprofilelink,
            'month'=>$request->month,
            'year'=>$request->year,
            'Active'=>$status,
    ];

      $insert = DB::table('business_listing')->insertGetId($ParamArray);
        if($insert>0){
          echo "<h3>Business Listed Successfully</h3>";
        }    
      
      if($insert>0){
        for($j=1;$j<=3;$j++){
          $business_id = $insert;
          $documenttitle = $request->post('documenttitle'.$j);          
          //print_r($documenttitle); die();
      if($request->hasFile('documentpdf'.$j))
      {
          $file = $request->file('documentpdf'.$j);
          $documentpdf =  $file->getClientOriginalName();
          $destinationPath = public_path('uploads/pdf/');
          $file->move($destinationPath, $documentpdf);
          //print_r($documentpdf); die();
       }
  
        $paramArrayP = array(
          'business_id'=>$businessid,
          'documenttitle'=>$documenttitle,
          'documentpdf'=>$documentpdf
          );
          
         DB::table('business_documents')->insert($paramArrayP);                  
      }
    }
  }
}
}
      $data['afreen'] ="";
      $business_id = Session::get('business')->id;
      $data['afreen'] = DB::table('business_listing')->where('business_id',$business_id)->first();
      $data['sandeep']= DB::table('business_documents')->where('business_id',$business_id)->get();
  return view('owner-add-business',$data);
}


public function DeleteInvestorProfile2($id)
{

    if(!empty($id)){
     $getbusinessdetails = DB::table('investor_profile')->where('id',$id)->first();

     $image_name = $getbusinessdetails->profileimage;
     $image_path = public_path($image_name);   

     if (file_exists($image_path)) {
          unlink($image_path);
       } 

    DB::table('investor_profile')->where('id',$id)->delete();

    return back();
   }
}

public function DeleteBusinessProfile2($id)
{
  return "$id";
  if(!empty($id)){
    $getdetails = DB::table('business_listing')->where('id',$id)->first();
    $getPdf = DB::table('business_documents')->where('business_id',$id)->get(); 

    foreach($getPdf as $showpdf){
     $documentpdf = $showpdf->documentpdf;
     $pdf_path = public_path('uploads/pdf/'.$documentpdf); 

   if (file_exists($pdf_path)) {
        unlink($pdf_path);     
      } 
    }     

    DB::table('business_listing')->where('id',$id)->delete();
    DB::table('business_documents')->where('business_id',$id)->delete();

    return back();
   }
}

  public function ServiceDetails($id){
    $data = [];
    $data['servicelist'] = DB::table('business_listing')->where('business_id',$id)->first();
    $data['amit'] = DB::table('query')->first();
    $data['country'] = DB::table('country')->select('*')->get();
    $data['documentpdf'] = DB::table('business_documents')->where('business_id',$id)->get();
    $data['owner'] = DB::table('tbl_businessowner')->where('id',$id)->get();
    $data['amitt'] = DB::table('tbl_investor')->get();
    // $investorid = Session::get('investor')->id;

    return view('service-details',$data);
  }

  public function ViewUserBusiness(Request $req)
  {
    $getData = DB::table('business_listing')->select('view')->where('business_id',$req->businessid)->first();
    if(empty($getData->view)){
        DB::table('business_listing')->where('business_id',$req->businessid)->update(['view'=>1]);
    }else{
        $userview = $getData->view;
        $userview  = $userview + 1; 
        DB::table('business_listing')->where('business_id',$req->businessid)->update(['view'=>$userview]);
    }
  } 

  public function ViewUserBusiness2(Request $req)
  {
    $getdata = DB::table('business_listing')->select('view1')->where('business_id',$req->businessid)->first();
    if(empty($getdata->view1)){
      DB::table('business_listing')->where('business_id',$req->businessid)->update(['view1'=>1]);
    }else{
      $userview1 = $getdata->view1;
      $userview1 = $userview1 + 1;
      DB::table('business_listing')->where('business_id',$req->businessid)->update(['view1'=>$userview1]);
    }
  }

  public function ViewUserBusiness3(Request $req)
  {
    $getdata = DB::table('business_listing')->select('view2')->where('business_id',$req->businessid)->first();
    if(empty($getdata->view2)){
      DB::table('business_listing')->where('business_id',$req->businessid)->update(['view2'=>1]);
    }else{
      $userview2 = $getdata->view2;
      $userview2 = $userview2 + 1;
      DB::table('business_listing')->where('business_id',$req->businessid)->update(['view2'=>$userview2]);
    }
  }

  public function ViewUserBusiness4(Request $req)
  {
    $getdata = DB::table('business_listing')->select('view3')->where('business_id',$req->businessid)->first();
    if(empty($getdata->view3)){
      DB::table('business_listing')->where('business_id',$req->businessid)->update(['view3'=>1]);
    }else{
      $userview3 = $getdata->view3;
      $userview3 = $userview3 + 1;
      DB::table('business_listing')->where('business_id',$req->businessid)->update(['view3'=>$userview3]);
    }
  }

  public function ServiceList(Request $request)
  {   
    
    $data['servicelist'] ="";
    $data['servicelist'] = DB::table('business_listing')->get(); 
    $data['owner'] = DB::table('tbl_businessowner')->select('*')->get(); 
    $data['country'] = DB::table('country')->select('*')->get();
    $data['documentpdf'] = DB::table('business_documents')->select('*')->get();
    $data['amitt'] = DB::table('tbl_investor')->select('*')->get();
    // $investorid = Session::get('investor')->id;

    return view('service-list',$data);
  }

  public function Header($id)
  {
    return view('header',$data);
  }

  public function InvestorConnection(Request $req)
  {
    $data = [];
    $investorid = Session::get('business')->id;
    $data['investorconnection'] = DB::table('tbl_investor')->first();
    $data['questions'] = DB::table('question_answers')->where('investor_id',$investorid)->get(); 
   
   if($req->isMethod('post')){
    $paramArrayj =[
        'businessowner_id' => $req->id,
        'investor_id'      => 0,
        'answer'           => $req->answer,
        'created_at'       => date('Y-m-d H:i:s'),
        ];

    DB::table('question_answers')->insert($paramArrayj);
    return Response::json(array('businessowner_id'=>$req->businessowner_id));
    }
  return view('investor-connection',$data);
}

  public function BusinessConnection(Request $req)
  {
    $data = [];
    $businessOwner_id = Session::get('investor')->id;
    $data['businessconnection'] = DB::table('tbl_businessowner')->select('*')->first();
    $data['businesslisting'] = DB::table('business_listing')->first();
    $data['questions'] = DB::table('question_answers')->where('businessowner_id',$businessOwner_id)->get();

    if($req->isMethod('post')){
        $paramArrayi =[
          'investor_id'      => $req->id,
          'businessowner_id' => 0,
          'question'         => $req->question,
          'created_at'       => date('Y-m-d H:i:s'),
          ];

        DB::table('question_answers')->insert($paramArrayi);
        return Response::json(array('investor_id'=>$req->investor_id));
    }
    return view('business-connection',$data);
  }

  public function saveQuery(Request $req)
  {
    $data = [];

    $data['amit'] = DB::table('query')->first();
    $data['businessconnection'] = DB::table('tbl_businessowner')->get();
    $data['servicelist'] = DB::table('business_listing')->where('business_id',$req->businessowner_id)->first();   
    $data['country'] = DB::table('country')->select('*')->get();
    $data['documentpdf'] = DB::table('business_documents')->get(); 
    
    $data['owner'] = DB::table('tbl_businessowner')  
    ->join('query','tbl_businessowner.id','=', 'query.businessowner_id')
    ->select('tbl_businessowner.*','query.*')
    ->get();
    
    if($req->isMethod('post')){
      $paramarray = [
        'investor_id' =>$req->investorid,
        'businessowner_id' =>$req->businessowner_id,
        'name' => $req->name,
        'email' => $req->email,
        'mobile' => $req->mobile,
        'question' => $req->question,
      ];
      DB::table('query')->insert($paramarray);
    }
    return view('service-details',$data);
  }

}
