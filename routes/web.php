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
    return view('index');
});
Route::get('/servicios', function () {
    return view('services');
});
Route::get('/quienessomos', function () {
    return view('about');
});
Route::get('/nuestrosClientes', function () {
    return view('customers');
});
Route::get('/formatos', function () {
    return view('formats');
});
Route::get('/ubicacion', function () {
    return view('contact');
});


Route::get('/panel', function () {
    return view('panel');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/cards', function () {
    return view('cards');
})->name('cards');

Route::get('/panel/quienesSomos', function () {
    return view('panel/quienesSomos');
})->name('quienesSomos');

Route::get('/panel/clientes', function () {
    return view('clientes');
})->name('clientes');

Auth::routes(['register' => false]);
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


