<?php

use App\Http\Controllers\Admin\CategoryController;

Route::group(['prefix' => 'categories', 'as' => 'categories_'], function () {

    Route::group(['prefix' => 'main-category', 'as' => 'main_'], function () {
        Route::get('list', [CategoryController::class, 'MainIndex'])->name('list');
        Route::any('create', [CategoryController::class, 'MainCreate'])->name('create');
        Route::any('edit/{id}', [CategoryController::class, 'MainCreate'])->name('edit');
        Route::post('delete', [CategoryController::class, 'MainDelete'])->name('delete');
    });
   Route::get('sub-category-list', [CategoryController::class, 'SubIndex'])->name('sub');
});

Route::group(['prefix' => 'products', 'as'=>'product_'], function () {
    Route::get('add-product', [App\Http\Controllers\Admin\ProductsController::class, 'Add'])->name('add');
    Route::get('edit/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'Add'])->name('edit');
    Route::post('save', [App\Http\Controllers\Admin\ProductsController::class, 'saveProduct'])->name('save');
    Route::post('delete', [App\Http\Controllers\Admin\ProductsController::class, 'deleteProduct'])->name('delete');
    Route::get('list-product', [App\Http\Controllers\Admin\ProductsController::class, 'List'])->name('list');
    Route::get('product-review', [App\Http\Controllers\Admin\ProductsController::class, 'productReviewList'])->name('review_list');
    Route::get('edit-review/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'productReviewEdit'])->name('review_edit');
    Route::post('save-review', [App\Http\Controllers\Admin\ProductsController::class, 'saveProductReview'])->name('save_review');
});

Route::group(['prefix' => 'brands', 'as'=>'brand_'], function () {    
    Route::get('list', [App\Http\Controllers\Admin\BrandController::class, 'listBrand'])->name('list');
    Route::post('fetch-single', [App\Http\Controllers\Admin\BrandController::class, 'fetchSingle'])->name('fetch_single');
    Route::post('save', [App\Http\Controllers\Admin\BrandController::class, 'saveBrand'])->name('save');
    Route::post('delete', [App\Http\Controllers\Admin\BrandController::class, 'deleteBrand'])->name('delete');
});

Route::group(['prefix' => 'option-group', 'as'=>'option_'], function () {
    Route::get('list', [App\Http\Controllers\Admin\OptionController::class, 'ListOptionGroup'])->name('option_group');
    Route::post('add', [App\Http\Controllers\Admin\OptionController::class, 'SaveOptionGroup'])->name('add');
    Route::post('delete', [App\Http\Controllers\Admin\OptionController::class, 'DeleteOptionGroup'])->name('delete');
    Route::post('fetch-single', [App\Http\Controllers\Admin\OptionController::class, 'fetchSingle'])->name('fetch_single');
});

Route::group(['prefix' => 'options', 'as'=>'options_'], function () {
    Route::get('list', [App\Http\Controllers\Admin\OptionController::class, 'ListOption'])->name('list');
    Route::post('add', [App\Http\Controllers\Admin\OptionController::class, 'SaveOption'])->name('add');
    Route::post('delete', [App\Http\Controllers\Admin\OptionController::class, 'DeleteOption'])->name('delete');
    Route::post('fetch-single', [App\Http\Controllers\Admin\OptionController::class, 'fetchSingleOption'])->name('fetch_single');
});

Route::group(['prefix' => 'orders', 'as'=>'order_'], function () {

    Route::get('new-order', [App\Http\Controllers\Admin\OrdersController::class, 'New'])->name('new');
    Route::get('order-detail', [App\Http\Controllers\Admin\OrdersController::class, 'Detail'])->name('detail');
    Route::get('order-history', [App\Http\Controllers\Admin\OrdersController::class, 'History'])->name('history');
    Route::get('invoice', [App\Http\Controllers\Admin\OrdersController::class, 'Invoice'])->name('invoice');
});
Route::group(['prefix' => 'coupon', 'as'=>'coupon_'], function () {
    Route::get('coupon', [App\Http\Controllers\Admin\CouponController::class, 'index'])->name('coupon');
    Route::get('add', [App\Http\Controllers\Admin\CouponController::class, 'addCoupon'])->name('add');
    Route::get('edit/{id}', [App\Http\Controllers\Admin\CouponController::class, 'addCoupon'])->name('edit');
    Route::any('save', [App\Http\Controllers\Admin\CouponController::class, 'saveCoupon'])->name('save');
    Route::post('delete', [App\Http\Controllers\Admin\CouponController::class, 'deleteCoupon'])->name('delete');
});
Route::group(['prefix' => 'manufacturer', 'as'=>'manufacturer_'], function () {
    Route::get('list', [App\Http\Controllers\Admin\ManufacturerController::class, 'index'])->name('manufacturer');
    Route::any('add', [App\Http\Controllers\Admin\ManufacturerController::class, 'Create'])->name('add');
    Route::any('edit/{id}', [App\Http\Controllers\Admin\ManufacturerController::class, 'Create'])->name('edit');
    Route::post('delete', [App\Http\Controllers\Admin\ManufacturerController::class, 'Delete'])->name('delete');
});