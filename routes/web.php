<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\AdminControler;
use App\Http\Controllers\excontroller;
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
Route:: view("footer","foot");
Route:: view("user_login","user_sign_in");
Route:: view("user_sign_up","user_sign_up");
Route:: get("user",[UserControler:: class ,"user_signup"] );
Route:: get("login",[UserControler:: class ,"user_signin"] );
Route::get('logout', function () {
    if(session()-> has('email')){
      session()-> pull('email',null); 
      return view('user_sign_in');
    }
    return view('index');
    });
    // Route::get('user_login', function () {
    // if(session()-> has('email')){
    //   return view('home');
    // }
    // return view('user_login');
    // });
Route:: view("home","index");
Route:: view("hed","hed");
Route:: view("ex","ex");
Route:: view("ex1","ex1");
// admin
Route:: view("admin_login","admin_login");
Route:: get("adminlogin",[AdminControler:: class ,"admin_signin"] );
Route:: view("admin_signup","admin_signup");
Route:: view("product","admin/product");
Route:: view("add_product","admin/add_product");
Route:: post("addproduct",[AdminControler:: class ,"add_product"] );
Route:: post("upload",[excontroller:: class ,"add_product"] );