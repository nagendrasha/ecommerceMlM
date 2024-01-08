<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginOTPController;
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



// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['as' => 'frontend_'], function () {
    include "front.php";
    include "front1.php";
    include "front2.php";
});

Auth::routes();

Route::get('/otp-login',[LoginOTPController::class,'OTPLoginPage'])->name('otp_login_page');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','admin_auth'], 'prefix' => 'admin', 'as' => 'admin_'], function () {
    include "admin.php";
    include "admin1.php";
    include "admin2.php";
});
