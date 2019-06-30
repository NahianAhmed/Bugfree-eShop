<?php
use Illuminate\Support\Facades\DB;

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
//home

Route::get('/', 'HomeController@index');
Route::get('/about-us', 'HomeController@AboutUs');
Route::get('/contact-with-us', 'HomeController@ContactUs');

//Auth
Route::get('/login', 'AuthController@index');
Route::post('/verify-login', 'AuthController@LoginVerification');
Route::get('/logout', 'AuthController@Logout');

//user
Route::get('/user-dashbord', 'UserController@index');

//Admin
Route::get('/admin-dashbord','AdminController@index');



