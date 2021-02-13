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
    $foot_data = json_decode(config('data_footer.data'),true);
    return view('prodotti', compact('dati' , 'foot_data'));
})->name('prodotti');

// Route Prodotto singolo
Route::get('prodotti/{key}', function ($key) {
    $dati = json_decode(Config('data_pasta.data'), true);
    $prodotto = $dati[$key];
    $descrizione = explode('<br>', $prodotto['descrizione']); 
    $foot_data = json_decode(config('data_footer.data'),true);  
    return view('prodotto', compact('prodotto' , 'descrizione' , 'foot_data', 'dati'));
})->name('prodotto');

// Route Home
Route::get('/', function () {
    $dati = json_decode(Config('data_pasta.data'), true);
    $foot_data = json_decode(config('data_footer.data'),true);
    return view('home', compact('foot_data', 'dati'));
})->name('home');

// Route contatti
Route::get('contatti', function () {
    $dati = json_decode(Config('data_pasta.data'), true);
    $foot_data = json_decode(config('data_footer.data'),true);
    return view('contatti', compact('foot_data', 'dati'));
})->name('contatti');
