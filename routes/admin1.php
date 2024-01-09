<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\TaglineController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\NewslettersController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AboutUsController;


Route::group(['prefix' => 'user', 'as'=>'user_'], function () {
    Route::get('list', [UserController::class, 'List'])->name('list');
});

// Route::get('/about-us',[AboutUsController::class,'Index'])->name('aboutus');
// Route::any('/about-us-edit',[AboutUsController::class,'Edit'])->name('edit');


Route::group(['prefix' => 'about', 'as'=>'about'], function () {
    Route::get('list', [AboutUsController::class, 'List'])->name('list');
    Route::any('create', [AboutUsController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [AboutUsController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [AboutUsController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'slider', 'as'=>'slider_'], function () {
    Route::get('list', [SliderController::class, 'List'])->name('list');
    Route::any('create', [SliderController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [SliderController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [SliderController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'contactus', 'as'=>'contactus_'], function () {
    Route::get('list', [ContactUsController::class, 'List'])->name('list');
    Route::any('create', [ContactUsController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [ContactUsController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [ContactUsController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'service', 'as'=>'service_'], function () {
    Route::get('list', [ServicesController::class, 'List'])->name('list');
    Route::any('create', [ServicesController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [ServicesController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [ServicesController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'newsletter', 'as'=>'newsletter_'], function () {
    Route::get('list', [NewslettersController::class, 'List'])->name('list');
    Route::any('create', [NewslettersController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [NewslettersController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [NewslettersController::class, 'Delete'])->name('delete');
}); 

Route::group(['prefix' => 'blogs', 'as'=>'blogs_'], function () {
    Route::get('list', [BlogController::class, 'List'])->name('list');
    Route::any('create', [BlogController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [BlogController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [BlogController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'faq', 'as'=>'faq_'], function () {
    Route::get('list', [FAQController::class, 'List'])->name('list');
    Route::any('create', [FAQController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [FAQController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [FAQController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'banners', 'as'=>'banner_'], function () {
    Route::get('list/{category?}', [BannerController::class, 'List'])->name('list');
    Route::any('create/{category?}', [BannerController::class, 'Create'])->name('create');
    Route::any('edit/{category?}/{id}', [BannerController::class, 'Edit'])->name('edit');
    Route::get('delete/{category?}/{id}', [BannerController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'tagline', 'as'=>'tagline_'], function () {
    Route::get('list', [TaglineController::class, 'List'])->name('list');
    Route::any('create', [TaglineController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [TaglineController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [TaglineController::class, 'Delete'])->name('delete');
});

Route::group(['prefix' => 'pages', 'as'=>'pages_'], function () {
    Route::get('list', [PageController::class, 'List'])->name('list');
    Route::any('create', [PageController::class, 'Create'])->name('create');
    Route::any('edit/{id}', [PageController::class, 'Edit'])->name('edit');
    Route::get('delete/{id}', [PageController::class, 'Delete'])->name('delete');
});
