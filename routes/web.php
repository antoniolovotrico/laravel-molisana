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

Route::get('prodotti', function () {
    $dati = json_decode(Config('data_pasta.data'), true);
    return view('prodotti', compact('dati'));
})->name('prodotti');
Route::get('prodotti/{key}', function ($key) {
    $dati = json_decode(Config('data_pasta.data'), true);
    $prodotto = $dati[$key];
    return view('prodotto', compact('prodotto'));
})->name('prodotto');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contatti', function () {
    return view('contatti');
})->name('contatti');
