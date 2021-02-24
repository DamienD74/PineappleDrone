<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Produit;
use App\Http\Controllers\Acceuil;
use App\Http\Controllers\Panier;

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
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'catalogue']);

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/cart', function () {
    return view('cart');});

    Route::get('/contact', function () {
    return view('contact');

});
