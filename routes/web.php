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

Route::get('/', 'SiteController@index');

Route::get('pages/about-us', "SiteController@about");

Route::get('pages/register', "SiteController@register");

Route::post('pages/login', "SiteController@userRegister");

Route::get('pages/login', "SiteController@login");

Route::get('collections/all', "SiteController@all");

Route::get('/collections/{catname}/{id}/{desc}', "SiteController@oneProduct");

Route::post('pages/home', "SiteController@loginUser");

Route::get('pages/cart', "SiteController@cart");

Route::get('pages/add-to-cart/{id}', 'SiteController@addToCart');

Route::delete('pages/cart/{id}', "SiteController@delCart");

Route::patch('update-cart', "SiteController@editCart");

Route::get('pages/stockist', "SiteController@stockist");

Route::post('pages/stockist', "SiteController@addStockist");

Route::any('/search', "SiteController@search");

Route::get('pages/{catname}', "SiteController@category_name");

Route::get('pages/search', "SiteController@search");

Route::post('/', "SiteController@subscribe");


// User Route#


Route::get('account', "SiteController@account");

Route::get('account/addresses', "SiteController@addresses");

Route::post('account', "SiteController@address");

Route::get('/account/logout', "SiteController@logout");

// Admin Route


Route::get('admin/register', "AdminController@adminRegister");

Route::post('admin/register', "AdminController@register");

Route::get('admin/login', "AdminController@adminLogin");

Route::post('admin/login', "AdminController@login");

Route::get('admin/logout', "AdminController@logout");

Route::get('admin/confirm-password', "AdminController@oldPass");

Route::post('admin/confirm-password', "AdminController@confPass");

Route::get('admin/new-password/{passer}', "AdminController@newpassPage");

Route::patch('admin/new-password', "AdminController@change_pass");

Route::get('admin/', "AdminController@index");

Route::get('admin/account', "AdminController@account");

Route::get('admin/stockist', "AdminController@stockist");

Route::delete('admin/stockist/{id}', "AdminController@delStock");

Route::get('admin/add-category', "AdminController@category");

Route::post('admin/add-category', "AdminController@addCategory");

Route::get('admin/edit-category/{id}', "AdminController@editPage");

Route::patch('admin/edit-category/{id}', "AdminController@editCategory");

Route::post('admin/category/{id}', "AdminController@delCategory");

Route::get('admin/category', "AdminController@allCategory");

Route::get('admin/products', "AdminController@products");

Route::get('admin/add-products', "AdminController@addProduct");

Route::post('admin/products', "AdminController@makeProduct");

Route::get('admin/orders', "AdminController@orders");

Route::get('admin/users', "AdminController@allusers");

Route::delete('admin/users/{id}', "AdminController@delUser");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/test', function () {
    $notifications = Auth::user()->unreadNotifications;
    
    foreach ($notifications as $notification) {
        dd($notification->data['name']);
    }
});
Route::get('/markAsRead', function () {
    auth::user()->unreadNotifications->markAsRead();
});
