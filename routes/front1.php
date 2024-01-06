<?php

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\BlogUsController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\FAQController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\OfferController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\UserDashboardController;

Route::get('/',[IndexController::class,'Index'])->name('index');
Route::get('/about-us',[AboutUsController::class,'Index'])->name('aboutus');
Route::get('/our-blogs',[BlogUsController::class,'Index'])->name('blogs');
Route::get('/blog-detail/{slug}',[BlogUsController::class,'Detail'])->name('detail');
Route::get('/my-cart',[CartController::class,'CartList'])->name('cart_list');
Route::get('/checkout',[CartController::class,'Checkout'])->name('checkout');
Route::get('/my-wishlist',[CartController::class,'Wishlist'])->name('wishlist');
Route::get('/contact-us',[ContactUsController::class,'Index'])->name('contactus');
Route::get('/faq',[FAQController::class,'Index'])->name('faq');
Route::get('/special-offer',[OfferController::class,'Offer'])->name('special_offer');
Route::get('/our-product',[ProductController::class,'List'])->name('product_list');
Route::get('/product-detail/{id}',[ProductController::class,'Detail'])->name('product_detail');
Route::post('save-review',[ProductController::class,'saveReview'])->name('save_review');


Route::group(['as'=>'user','prefix'=>'user'],function(){
    Route::get('/dashboard',[UserDashboardController::class,'Dashboard'])->name('dashboard');
});


Route::group(['prefix'=>'user','as'=>'user_'],function(){
    Route::get('/login',[AuthController::class,'LoginPage'])->name('login_page');
    Route::get('/register',[AuthController::class,'RegisterPage'])->name('register_page');
});