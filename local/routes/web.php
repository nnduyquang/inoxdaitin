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

//Route::get('/',function(){
//    return view('frontend.trangchu.index');
//});
Route::get('/','FrontendController@getAllSPTrangChu');
Route::get('/san-pham/{pathCateGory}','FrontendController@getListCategory');
Route::get('/san-pham/{pathCateGory}/{pathProduct}','FrontendController@getDetailSP');
Route::get('/lien-he','FrontendController@getLienHe');
Route::get('/tin-tuc','FrontendController@getAllTinTuc');
Route::get('/tim-kiem','FrontendController@getKetQuaTinKiem');
Route::get('/tin-tuc/{path}','FrontendController@getDetailTinTuc');
Route::get('/category',function(){
    return view('frontend.menu.m-category');
});
Route::get('/sml_login', function () {
    return view('backend.login.login1');
});
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('sml_logout', 'AuthController@logout')->name('logout');
Route::group(['middleware' => ['auth']], function () {
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    //USER
    Route::resource('sml_admin/users', 'UserController');

    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //NEWS
    Route::get('sml_admin/news', ['as' => 'news.index', 'uses' => 'NewsController@index', 'middleware' => ['permission:news-list|news-create|news-edit|news-delete']]);
    Route::post('sml_admin/news/create', ['as' => 'news.store', 'uses' => 'NewsController@store', 'middleware' => ['permission:news-create']]);
    Route::post('sml_admin/news', ['as' => 'news.search', 'uses' => 'NewsController@search']);
    Route::get('sml_admin/news/create', ['as' => 'news.create', 'uses' => 'NewsController@create', 'middleware' => ['permission:news-create']]);
    Route::get('sml_admin/news/{id}/edit', ['as' => 'news.edit', 'uses' => 'NewsController@edit', 'middleware' => ['permission:news-edit']]);
    Route::patch('sml_admin/news/{id}', ['as' => 'news.update', 'uses' => 'NewsController@update', 'middleware' => ['permission:news-edit']]);
    Route::delete('sml_admin/news/{id}', ['as' => 'news.destroy', 'uses' => 'NewsController@destroy', 'middleware' => ['permission:news-delete']]);

    //CATEGORY
    Route::get('sml_admin/category', ['as' => 'category.index', 'uses' => 'CategoryController@index', 'middleware' => ['permission:category-list|category-create|category-edit|category-delete']]);
    Route::post('sml_admin/category/create', ['as' => 'category.store', 'uses' => 'CategoryController@store', 'middleware' => ['permission:category-create']]);
    Route::get('sml_admin/category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create', 'middleware' => ['permission:category-create']]);
    Route::get('sml_admin/category/{id}/edit', ['as' => 'category.edit', 'uses' => 'CategoryController@edit', 'middleware' => ['permission:category-edit']]);
    Route::patch('sml_admin/category/{id}', ['as' => 'category.update', 'uses' => 'CategoryController@update', 'middleware' => ['permission:category-edit']]);
    Route::delete('sml_admin/category/{id}', ['as' => 'category.destroy', 'uses' => 'CategoryController@destroy', 'middleware' => ['permission:category-delete']]);

    //PRODUCT
    Route::get('sml_admin/product', ['as' => 'product.index', 'uses' => 'ProductController@index', 'middleware' => ['permission:product-list|product-create|product-edit|product-delete']]);
    Route::post('sml_admin/product/create', ['as' => 'product.store', 'uses' => 'ProductController@store', 'middleware' => ['permission:product-create']]);
    Route::post('sml_admin/product', ['as' => 'product.search', 'uses' => 'ProductController@search']);
    Route::get('sml_admin/product/create', ['as' => 'product.create', 'uses' => 'ProductController@create', 'middleware' => ['permission:product-create']]);
    Route::get('sml_admin/product/{id}/edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit', 'middleware' => ['permission:product-edit']]);
    Route::patch('sml_admin/product/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update', 'middleware' => ['permission:product-edit']]);
    Route::delete('sml_admin/product/{id}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy', 'middleware' => ['permission:product-delete']]);

    //--SLIDER--//
    Route::get('sml_admin/slider', ['as' => 'config.slider.index', 'uses' => 'SliderController@index', 'middleware' => ['permission:config-list|config-create|config-edit|config-delete']]);
    Route::post('sml_admin/slider/create', ['as' => 'config.slider.store', 'uses' => 'SliderController@store', 'middleware' => ['permission:config-create']]);
    Route::get('sml_admin/slider/create', ['as' => 'config.slider.create', 'uses' => 'SliderController@create', 'middleware' => ['permission:config-create']]);
    Route::get('sml_admin/slider/{id}/edit', ['as' => 'config.slider.edit', 'uses' => 'SliderController@edit', 'middleware' => ['permission:config-edit']]);
    Route::patch('sml_admin/slider/{id}', ['as' => 'config.slider.update', 'uses' => 'SliderController@update', 'middleware' => ['permission:config-edit']]);
    Route::delete('sml_admin/slider/{id}', ['as' => 'config.slider.destroy', 'uses' => 'SliderController@destroy', 'middleware' => ['permission:config-delete']]);
});
