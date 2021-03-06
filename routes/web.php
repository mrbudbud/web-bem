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

Route::get('/', function(){
    return view ('guest.index');
});

Route::get('/bem/welcome', 'PagesController@index');
Route::get('/struktur/struktur', 'StrukturController@index'); //indexnya truktur

Route::get('/image/{images}', 'StrukturController@show'); //show untuk edit


Route::get('/crud/editstruktur', 'StrukturController@edit');

Route::post('/struktur/struktur', 'StrukturController@store');

Route::get('/bem/about', 'PagesController@about');

Route::get('/bem/contact', 'PagesController@contact');

Route::get('/crud/create', 'StrukturController@create');


/*
|--------------------------------------------------------------------------
| Route Untuk Kepengurusan
*/
Route::get('/simetri', function(){
    return view ('guest.content.simetri');
});
/*
| End Kepengurusan
|------------------------------------------------------------------------*/

Route::get('/tes', 'TesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Route Untuk kegiatan
*/
Route::get('/galeri/kegiatan', 'PagesController@kegiatan');
Route::get('/galeri/kegiatan/detail/{data}', 'PagesController@detail')->name('kegiatan.detail');

/*
| End Kegiatan
|------------------------------------------------------------------------*/
/*


|--------------------------------------------------------------------------
| Route Untuk Berita
*/
Route::get('/galeri/berita', 'PagesController@berita');
Route::get('/galeri/berita/detail/{data}', 'PagesController@detailberita')->name('berita.detail');
/*
| End Berita
|------------------------------------------------------------------------*/