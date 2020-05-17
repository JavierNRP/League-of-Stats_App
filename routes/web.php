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

Route::get('/', function () { return view('welcome'); });
Route::get('/index', function () { return view('welcome'); })->name('index');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/champions', function () { return view('campeones'); })->name('champions');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/rotation', function () { return view('rotacion'); })->name('rotation');
Route::get('/stats', function () { return view('stats'); })->name('stats');
Route::get('/status', function () { return view('status'); })->name('status');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

