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

// Route::get('/', function () {
//     return view('welcome');    
// })->name('home');//data show page


Route::get('/', 'Pagecontroller@homefun')->name('homename');

Route::get('about', 'Pagecontroller@aboutfun')->name('aboutname');

Route::get('contact', 'Pagecontroller@contactfun')->name('contactname');

Route::get('post', 'Pagecontroller@postfun')->name('postname');
