<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

////////////////////////Login Area Starts
Route::match(['get','post'],'/index',[HomeController::class, 'Index']);

Route::match(['get','post'],'/investorlogin',[HomeController::class, 'InvestorLogin']);
Route::match(['get','post'],'/businessownerlogin',[HomeController::class, 'BusinessownerLogin']);

////////////////////////Investor change password starts area
Route::get('/investorchange-password',[HomeController::class, 'InvestorChangepassword']);
Route::match(['get','post'],'/saveinvestorchange-password',[HomeController::class, 'SaveInvestorchangepassword']);
////////////////////////Investor change password Ends area

////////////////////////Business Owner change password starts area
Route::get('/buss-change-password',[HomeController::class, 'BusschangePassword']);
Route::match(['get','post'],'/savebuss-change-password',[HomeController::class, 'SaveBusschangePassword']);
////////////////////////Business Owner change password Ends area

Route::get('/logout',[HomeController::class, 'Index']);
////////////////////////Login Area Ends

////////////////////////Registration Area Starts
Route::match(['get','post'],'/investorregistration',[HomeController::class, 'InvestorRegistration']);
Route::match(['get','post'],'/businessownerregistration',[HomeController::class, 'BusinessownerRegistration']);
////////////////////////Registration Area Ends

Route::match(['get','post'],'/business-connection',[HomeController::class, 'BusinessConnection']);
Route::match(['get','post'],'/business-donation',[HomeController::class, 'BusinessDonation']);
Route::match(['get','post'],'/business-state',[HomeController::class, 'BusinessState']);

Route::match(['get','post'],'/buss-owner-dashboard',[HomeController::class, 'BussownerDashboard']);

Route::match(['get','post'],'/investor-connection',[HomeController::class, 'InvestorConnection']);
Route::match(['get','post'],'/investor-dashboard',[HomeController::class, 'InvestorDashboard']);
Route::match(['get','post'],'/investor-donation',[HomeController::class, 'InvestorDonation']);

///////////////////////insert investor-profile start here
Route::match(['get','post'],'/investor-profile',[HomeController::class, 'InvestorProfile']);
Route::match(['get','post'],'/saveinvestor-profile',[HomeController::class, 'InsertInvestorProfile']);
///////////////////////insert investor-profile ends here

Route::match(['get','post'],'/investor',[HomeController::class, 'Investor']);
Route::match(['get','post'],'/investorchange-password',[HomeController::class, 'InvestorChangepassword']);

Route::match(['get','post'],'/owner-add-business',[HomeController::class, 'InsertOwnerAddbusiness']);
//Route::get('/deleteowner-add-business/{id}',[HomeController::class, 'DeleteOwnerAddbusiness']);

Route::match(['get','post'],'/service-details/{id?}',[HomeController::class, 'ServiceDetails']);
Route::match(['get','post'],'/service-list',[HomeController::class, 'ServiceList']);
//////////////////////////investor session area starts here
Route::get('/session/removee',[HomeController::class, 'deleteInvestorProfile'])->name('session.delete');
Route::get('/session/remove',[HomeController::class, 'deleteBusinessProfile'])->name('session.delete');
//////////////////////////Business session area Ends here
Route::post('/add-view',[HomeController::class, 'ViewUserBusiness']);
Route::post('/add-view2',[HomeController::class, 'ViewUserBusiness2']);
Route::post('/add-view3',[HomeController::class, 'ViewUserBusiness3']);
Route::post('/add-view4',[HomeController::class, 'ViewUserBusiness4']);

Route::match(['get','post'],'/savequestion',[HomeController::class, 'BusinessConnection']);
Route::match(['get','post'],'/saveanswer',[HomeController::class, 'InvestorConnection']);

//Route::get('/connection',[HomeController::class, 'MessageHistoryShow']);
Route::get('/header',[HomeController::class, 'Header']);

Route::post('deletePdf/{business_id}', [HomeController::class, 'DeleteBusinessProfile2']);

Route::match(['get','post'],'/savequery',[HomeController::class, 'saveQuery']);




