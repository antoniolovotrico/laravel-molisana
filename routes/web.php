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

// Route Prodotti
Route::get('prodotti', function () {
    $dati = json_decode(Config('data_pasta.data'), true);
    return view('prodotti', compact('dati'));
})->name('prodotti');

// Route Prodotto singolo
Route::get('prodotti/{key}', function ($key) {
    $dati = json_decode(Config('data_pasta.data'), true);
    $prodotto = $dati[$key];
    $descrizione = explode('<br>', $prodotto['descrizione']);   
    return view('prodotto', compact('prodotto' , 'descrizione'));
})->name('prodotto');

// Route Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Route contatti
Route::get('contatti', function () {
    return view('contatti');
})->name('contatti');
