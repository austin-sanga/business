<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\DashboardController;
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


Route::middleware(['auth'])->get('/loans' ,function(){
    return view('loans.loans');
});

Route::middleware(['auth'])->get('/settings' ,function(){
    return view('settings');
});

Route::middleware(['auth'])->get('/withdraw' ,function(){
    return view('investment.withdraw');
});


Route::middleware(['auth'])->get('/save' ,function(){
    return view('investment.save');
});

//  all auth requiring routes
Route::middleware(['auth'])->group(function() {

    // DashboardController
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/ministatement/{id}' ,"viewMiniStatement");
    });


    // MembershipController
    Route::controller(MembershipController::class)->group(function () {
        Route::get('/membership' ,"membership");
        Route::get('/userrequests' ,"listrole0");
        Route::get('/specificrequest/{id}' ,"specificrequest");
        Route::post('/updateRole' ,"updateRole"); /* comment out from the middleware if doesn't work */
    });


    // InvestmentController
    Route::controller(InvestmentController::class)->group(function () {
        Route::get('/ongoinginvestment/{id}', 'specificOngoing');
        Route::get('/openopportunity/{id}', 'specificOpen');
        Route::get('/verificationstatus/{id}' ,"specificVerification");
        Route::get('/viewmorematuredinvestment' ,"viewMoreMaturedProject");
        Route::get('/viewmoreongoinginvestment' ,"viewMoreOngoing");
        Route::get('/viewmoreopenopportunity' ,"ViewMoreOpen");
        Route::get('/viewmorependingverification' ,"viewmoreverification");
        Route::get('/invest' ,"invest");
        Route::post('/FileInvestment' ,"FileInvestment");
        Route::get('/investments' ,"investment");
    });


    // ProjectManagerController
    Route::controller(ProjectManagerController::class)->group(function () {
        Route::get('/projectmanager' ,"projectManager");
        Route::get('/newproject' ,"newProject");
        Route::get('/viewmorepublishedprojects' ,"viewMorePublishedProject");
        Route::post('/createProject' ,"createProject");
        Route::get('/publishedproject/{id}' ,"publishedProject");
        Route::get('/deletepublished/{id}' ,"deletePublished");
        Route::get('/editpublishedproject/{id}' ,"editpublished");
        Route::post('/updateEdit' ,"editUpdate");
        Route::post('/storeContract' ,"storeContract");
        Route::get('/viewmoreadminmaturedinvestment' ,"viewMoreAdminMaturedProject");
        Route::get('/contractDownload/{project_contract}' ,"downlaodContract");
        Route::get('/maturedinvestment/{id}' ,"openMatured");
        Route::get('/matureproject/{id}' ,"openMature");
        Route::post('/maturityDataSave' ,"maturityDataSave");
        Route::get('/adminongoingproject/{id}' ,"adminOngoing");
        Route::get('/viewmoremanagerongoinginvestment' ,"viewMoreOngoingProject");
        Route::get('/investmentverification/{id}' ,"specificVerify");
        Route::post('/onAccept/{id}' ,"acceptVerify");
        Route::post('/onDecline/{id}' ,"declineVerify");
        Route::get('/viewmoreverificationqueue' ,"viewMoreVerification");
        Route::get('/startproject/{id}' ,"startProject");
        Route::get('/editfinaldetails/{id}' ,"openFinalDetails");
        Route::get('/officialstart/{id}' ,"officialStart");

        // test
        Route::get('/test' ,"showData");
    });

});





/* Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'role:admin,manager,member'], function(){

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware('role:admin');

        // Route::view('/dashboard', 'dashboard')->middleware('role:member');
    });

  });
 */
