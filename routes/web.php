<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
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
    return view('welcome');
});

/* routes administered operates in general form,
    origin story during all user access mode/member mode */

Route::middleware(['auth'])->get('/dashboard' ,function(){
    return view('dashboard');
});

Route::middleware(['auth'])->get('/ministatement' ,function(){
    return view('ministatement');
});

Route::middleware(['auth'])->get('/investments' ,function(){
    return view('investments');
});

Route::middleware(['auth'])->get('/loans' ,function(){
    return view('loans');
});

Route::middleware(['auth'])->get('/settings' ,function(){
    return view('settings');
});

Route::middleware(['auth'])->get('/withdraw' ,function(){
    return view('withdraw');
});

Route::middleware(['auth'])->get('/invest' ,function(){
    return view('invest');
});

Route::middleware(['auth'])->get('/save' ,function(){
    return view('save');
});

Route::middleware(['auth'])->get('/ongoinginvestment' ,function(){
    return view('ongoinginvestment');
});

Route::middleware(['auth'])->get('/openopportunity' ,function(){
    return view('openopportunity');
});

Route::middleware(['auth'])->get('/verificationstatus' ,function(){
    return view('verificationstatus');
});

Route::middleware(['auth'])->get('/membership' ,[MembershipController::class,"membership"]);

Route::middleware(['auth'])->get('/userrequests' ,[MembershipController::class,"listrole0"]);

Route::middleware(['auth'])->get('/specificrequest/{id}' ,[MembershipController::class,"specificrequest"]);

Route::/* middleware(['auth'])-> */post('/updateRole' ,[MembershipController::class,"updateRole"]);

Route::middleware(['auth'])->get('/projectmanager' ,function(){
    return view('projectmanager');
});

Route::middleware(['auth'])->get('/newproject' ,function(){
    return view('newproject');
});

Route::middleware(['auth'])->get('/publishedproject' ,function(){
    return view('publishedproject');
});

Route::middleware(['auth'])->get('/viewmorematuredinvestment' ,function(){
    return view('viewmorematuredinvestment');
});

Route::middleware(['auth'])->get('/viewmoreongoinginvestment' ,function(){
    return view('viewmoreongoinginvestment');
});

Route::middleware(['auth'])->get('/viewmoreopenopportunity' ,function(){
    return view('viewmoreopenopportunity');
});

Route::middleware(['auth'])->get('/viewmorependingverification' ,function(){
    return view('viewmorependingverification');
});

Route::middleware(['auth'])->get('/maturedinvestment' ,function(){
    return view('maturedinvestment');
});

Route::middleware(['auth'])->get('/matureproject' ,function(){
    return view('matureproject');
});

Route::middleware(['auth'])->get('/adminongoingproject' ,function(){
    return view('adminongoingproject');
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
