<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\InvestmentController;
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
    return redirect('login');
});

/* routes administered operates in general form,
    origin story during all user access mode/member mode */

Route::middleware(['auth'])->get('/dashboard' ,function(){
    return view('dashboard');
});

Route::middleware(['auth'])->get('/ministatement' ,function(){
    return view('investment.ministatement');
});

Route::middleware(['auth'])->get('/investments' ,[InvestmentController::class,"investment"]);

Route::middleware(['auth'])->get('/loans' ,function(){
    return view('loans.loans');
});

Route::middleware(['auth'])->get('/settings' ,function(){
    return view('settings');
});

Route::middleware(['auth'])->get('/withdraw' ,function(){
    return view('investment.withdraw');
});

Route::middleware(['auth'])->get('/invest' ,[InvestmentController::class,"invest"]);

Route::middleware(['auth'])->post('/FileInvestment' ,[InvestmentController::class,"FileInvestment"]);

Route::middleware(['auth'])->get('/save' ,function(){
    return view('investment.save');
});


Route::middleware(['auth'])->get('/ongoinginvestment/{id}' ,[InvestmentController::class,"specificOngoing"]);

Route::middleware(['auth'])->get('/openopportunity/{id}' ,[InvestmentController::class,"specificOpen"]);

Route::middleware(['auth'])->get('/verificationstatus/{id}' ,[InvestmentController::class,"specificVerification"]);

Route::middleware(['auth'])->get('/membership' ,[MembershipController::class,"membership"]);

Route::middleware(['auth'])->get('/userrequests' ,[MembershipController::class,"listrole0"]);

Route::middleware(['auth'])->get('/specificrequest/{id}' ,[MembershipController::class,"specificrequest"]);

Route::middleware(['auth'])->post('/updateRole' ,[MembershipController::class,"updateRole"]);/* comment out the middleware if doesnt work */

Route::middleware(['auth'])->get('/projectmanager' ,[ProjectManagerController::class,"projectManager"]);

Route::middleware(['auth'])->get('/newproject' ,[ProjectManagerController::class,"newProject"]);

Route::middleware(['auth'])->get('/viewmorepublishedprojects' ,[ProjectManagerController::class,"viewMorePublishedProject"]);

Route::middleware(['auth'])->post('/createProject' ,[ProjectManagerController::class,"createProject"]);

Route::middleware(['auth'])->get('/publishedproject/{id}' ,[ProjectManagerController::class,"publishedProject"]);

Route::middleware(['auth'])->get('/deletepublished/{id}' ,[ProjectManagerController::class,"deletePublished"]);

Route::middleware(['auth'])->get('/editpublishedproject/{id}' ,[ProjectManagerController::class,"editpublished"]);

Route::middleware(['auth'])->post('/updateEdit' ,[ProjectManagerController::class,"editUpdate"]);

Route::middleware(['auth'])->post('/storeContract' ,[ProjectManagerController::class,"storeContract"]);

Route::middleware(['auth'])->get('/viewmorematuredinvestment' ,[ProjectManagerController::class,"viewMoreMaturedProject"]);

Route::middleware(['auth'])->get('/viewmoreongoinginvestment' ,[InvestmentController::class,"viewMoreOngoing"]);

Route::middleware(['auth'])->get('/viewmoreopenopportunity' ,[InvestmentController::class,"ViewMoreOpen"]);

Route::middleware(['auth'])->get('/viewmorependingverification' ,[InvestmentController::class,"viewmoreverification"]);

Route::middleware(['auth'])->get('/maturedinvestment' ,function(){
    return view('investment.maturedinvestment');
});

Route::middleware(['auth'])->get('/matureproject' ,function(){
    return view('investment.matureproject');
});

Route::middleware(['auth'])->get('/adminongoingproject' ,function(){
    return view('investment.adminongoingproject');
});

Route::middleware(['auth'])->get('/viewmoremanagerongoinginvestment' ,[ProjectManagerController::class,"viewMoreOngoingProject"]);

Route::middleware(['auth'])->get('/investmentverification/{id}' ,[ProjectManagerController::class,"specificVerify"]);

Route::middleware(['auth'])->post('/onAccept/{id}' ,[ProjectManagerController::class,"acceptVerify"]);

Route::middleware(['auth'])->get('/viewmoreverificationqueue' ,[ProjectManagerController::class,"viewMoreVerification"]);

Route::middleware(['auth'])->get('/startproject/{id}' ,[ProjectManagerController::class,"startProject"]);

Route::middleware(['auth'])->get('/viewmoreadminmaturedinvestment' ,function(){
    return view('investment.viewmoreadminmaturedinvestment');
});

Route::middleware(['auth'])->get('/editfinaldetails' ,function(){
    return view('investment.editfinaldetails');
});



// test
Route::get('/test' ,[ProjectManagerController::class,"showData"]);



/* Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'role:admin,manager,member'], function(){

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware('role:admin');

        // Route::view('/dashboard', 'dashboard')->middleware('role:member');
    });

  });
 */
