<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

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


Route::get('/aboutUs', function () {
    return view('pages.about');
});
Route::get('/email', function () {
    Mail::to('email@email.com')->send(new ContactUsMail());

    return new ContactUsMail();
});


Route::get('/products-category', 'ProductController@index')->name('productsCategory');
Route::get('/products', 'ProductController@catalogue')->name('products');
Route::get('/products/{slug}', 'ProductController@show')->name('product.show');


Route::resource('news','NewsController');
Route::resource('contact','ContactController');
Route::resource('/','HomeController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
