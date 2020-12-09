<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\MemberController;

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

Route::get('/', [Controller::class, 'home']);
Route::get('/about/{user}', [Controller::class, 'about']); //stacanq  url-n  //avelacrin about-in popxakan
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/operators', [UsersController::class, 'viewload']);  //ushadir exi es pahy  urish controller ashxatecvec

//FORM
Route::post('/form', [UsersController::class, 'getData']);

Route::view("login","form");//arajiny im uzac URL-na  2-rd-y  papki anunna


//DATABASE

Route::get('/dataB', [UsersController::class, 'index']);

//HTTP client
Route::get('/client', [UsersController::class, 'client']);//nuyny gettova arvum  conttroleric uxxarkvuma VIEW-y



//HTTP REQUEST
// Route::get('httprequest', [UsersController::class, 'testRequest']);
// Route::post('httprequest', [UsersController::class, 'testRequest']);
// Route::put('httprequest', [UsersController::class, 'testRequest']);
// Route::delete('httprequest', [UsersController::class, 'testRequest']);
Route::view("loginn","httprequest");


//SESSION
Route::post('user', [UserAuth::class, 'userLogin']);
// Route::view('log','sesion');
Route::view('profile','profile');

Route::get('/sesion',function () {
    if(session()->has('username')){  //inputi usernamena stugum  has-y stugum e ete arka e ashxatir

        return redirect('profile');
    }
    return view('sesion');
});
Route::get('/logout',function () {
    if(session()->has('username')){

        session()->pull('username');
    }
    return redirect('sesion');
});


//FLASH SESSION

Route::post('sesion', [UserAuth::class, 'add']);


//UPLOAD FILE

Route::view('uploadFile','upload'); //arajiny im uzac URL-na  2-rd-y  papki anunna  

Route::post('/uploadFile', [UsersController::class, 'uploadFi']);  //yntract anunnes dnum

//LOCALIZATION

// Route::view("locali",'local');
Route::get('/local/{lang}',function($lang) { //config app.php  local en - hi
    App::setlocale($lang);
    return view('local');
});


//SHOW LIST MEMBER
//ADD MEMBER
//DELETE
//EDIT
Route::get('list', [MemberController::class, 'show']);

Route::view('add','addMember');

Route::post('list',[MemberController::class,'addData']);

Route::get('delete/{id}',[MemberController::class,'delete']);

Route::get('edit/{id}',[MemberController::class,'edit']);

Route::post('edit',[MemberController::class,'update']);
