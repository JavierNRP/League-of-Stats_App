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
Route::get('/index', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/champions', function () { return view('campeones'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/rotation', function () { return view('rotacion'); });
Route::get('/stats', function () { return view('stats'); });
Route::get('/status', function () { return view('status'); });
Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('apilol/{request}', function ($request){
    return redirect('https://ddragon.leagueoflegends.com/cdn/'+$request);
})->middleware('auth');

Route::get('apilol/{region}/{query1?}/{query2?}/{query3?}/{query4?}/{query5?}', function ($region, $query1, $query2, $query3, $query4, $query5){
    return redirect('https://'+$region+'.api.riotgames.com/lol/'+$query1+'/'+$query2+'/'+$query3+'/'+$query4+'/'+$query5+'?api_key='+config('key'));
});



// config('key')