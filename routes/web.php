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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo',function (){
    return "Halo,selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog',function(){
    return view('blog');
});


//route blog
Route::get('/blog','BlogController@home');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');

Route::get('dosen', 'DosenController@index');
//crud
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai1/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai','PegawaiController@index');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Home',function(){
    return view('Home');
});

Route::get('/index',function(){
    return view('index');
});
    























