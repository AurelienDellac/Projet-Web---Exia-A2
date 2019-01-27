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
Route::get('/product/{id}', 'ProductsController@show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::view('/boiteIdee', 'boiteIdee');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/creerIdee', 'IdeasController@create')->name('createIdea');
    Route::post('/creerIdee', 'IdeasController@store')->name('storeIdea');
    Route::view('/panier', 'panier');
});

Route::group(['middleware' => 'member'], function () {
    Route::get('/addProduct', 'ProductsController@create')->name('addProduct');
    Route::post('/addProduct', 'ProductsController@store')->name('storeProduct');
    Route::post('/product/{id}', 'ProductsController@destroy')->name('destroyProduct');
    
    Route::get('/creerActivite', 'ActivitiesController@create')->name('createActivity');
    Route::post('/creerActivite', 'ActivitiesController@store')->name('storeActivity');
    Route::post('/creerActivite', 'ActivitiesController@destroy')->name('destroyActivity');

});

