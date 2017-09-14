<?php

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

Route::get('/',function(){
    return view('frontend.trangchu.index');
});
Route::get('/san-pham',function(){
    return view('frontend.sanpham.index');
});
Route::get('/san-pham/tam-inox/tam-inox-304',function(){
    return view('frontend.chitiet.index');
});
Route::get('/category',function(){
    return view('frontend.menu.m-category');
});
