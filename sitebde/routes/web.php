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
Route::get('/boutique/{cat}', function ($cat) {
    return redirect('/boutique?category=' . $cat);
 });
Route::view('/', "welcome");
Route::view('/CGU', 'CGU');
Route::view('/evenements', 'evenements');
Route::view('/mentionslegales', 'mentionslegales');
Route::view('/panier', 'panier');
Route::get('/product/{id}', 'ProductController@show');
Route::view('/test', 'auth.passwords.test');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

