<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContacController;

//trang nguoi dung
Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('san pham',[ProductController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail'])->name('site.product.detail');
Route::get('lien-he',[ContacController::class,'index'])->name('site.contact');

//trang quan tri
Route::get('admin',function(){echo "Bang dieu kien";})->name('admin.dashboard');

Route::get('admin/product',function(){echo "Quan ly san pham";});
Route::get('admin/product/create',function(){echo "Them san pham";});
Route::get('admin/product/{id}/edit',function(){echo "Sua san pham";});
Route::get('admin/product/create',function(){echo "Them san pham";});

