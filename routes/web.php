<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return redirect('/Home');
    /* return view('admin/home'); */
});

Route::get('/A_home','HomeController@index');
Route::get('/logout','HomeController@log_out');
Route::get('/logout','HomeController@log_out');

// Route::get('/Perangkat_desa','PerangkatdesaController@index');
Route::get('/Perangkat_desa/create','PerangkatdesaController@create');


Route::get('/Blog','BlogController@index');
Route::get('/Blog/create','BlogController@create');
Route::post('/save','BlogController@store');
Route::get('/edit/{id}','BlogController@edit');
Route::post('/update/{id}','BlogController@update');
Route::get('/delete/{id}','BlogController@destroy');

Route::get('/list_order','OrderController@index');


Route::get('/A_product','ProductController@index');
Route::get('/A_product/create','ProductController@create');
Route::post('/A_product/save','ProductController@store');
Route::get('/A_product/delete/{id}','ProductController@destroy');





// user user
Route::get('/Produk','UserProductController@index');
Route::get('/Artikel','UserArtikelController@index');
Route::get('/Artikel/detail','UserArtikelController@artikelDetail');
Route::get('/Kontak','UserContactController@index');
Route::get('/Order','UserOrderController@index');
Route::get('/Home','UhomeController@index');


Route::get('/localStorage', function(){
    Storage::disk('local')->put('example.txt', 'this is content');
});


Auth::routes();

Route::get('/A_home', 'HomeController@index')->name('home');
