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

Route::get('/', function () {
    $dati = json_decode(Config('data_pasta.data'), true);
    return view('prodotti', compact('dati'));
});

Route::get('home', function () {
    return view('home');
});

Route::get('contatti', function () {
    return view('contatti');
});
