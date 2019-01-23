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

Route::view('/boutique', 'boutique');
Route::view('/', 'welcome');
Route::view('/CGU', 'CGU');
Route::view('/evenements', 'evenements');
Route::view('/mentionslegales', 'mentionslegales');
Route::view('/panier', 'panier');
Route::get('boutique', function () {

    $products = DB::table('products')->get();

    return view('boutique', ['products' => $products]);
});