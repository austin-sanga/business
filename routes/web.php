<?php

use Illuminate\Support\Facades\Route;

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


/* Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'role:admin,manager,member'], function(){

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware('role:admin');

        // Route::view('/dashboard', 'dashboard')->middleware('role:member');
    });

  });
 */
