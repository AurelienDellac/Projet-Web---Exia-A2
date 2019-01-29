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
use Illuminate\Support\Facades\Auth;

Route::view('/boutique', 'boutique');
Route::get('/boutique/{cat}', function ($cat) {
    return redirect('/boutique?category=' . $cat);
 });
Route::view('/', "welcome");
Route::view('/CGU', 'CGU');
Route::view('/mentionsLegales', 'mentionsLegales');

Route::view('/evenements', 'evenements');
Route::view('/mentionslegales', 'mentionslegales');
Route::get('/product/{id}', 'ProductsController@show');
Route::get("/evenement/{id}", 'EventsController@show')->name('showEvent');
Route::view('/boiteIdee', 'boiteIdee');
Route::get('/evenements/{time}', function ($time) {
    return redirect('/evenements?periode=' . $time);
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/creerIdee', 'IdeasController@create')->name('createIdea');
    Route::post('/creerIdee', 'IdeasController@store')->name('storeIdea');
    Route::post('/storeOrder', 'OrdersController@store')->name('storeOrder');
    Route::post('/destroyOrder/{id}', 'OrdersController@destroy')->name('destroyOrder');
    Route::get('/panier', 'OrdersController@index')->name('showBasket');
    Route::post('/panier', 'OrdersController@confirm')->name('confirmOrders');
    Route::post('/inscription', 'RegistrationsController@store')->name('storeRegistration');
    Route::post('/desinscription/{id}', 'RegistrationsController@destroy')->name('destroyRegistration');

    Route::post('/voteIdee', 'VotesController@store')->name('storeVotes');
    
    Route::post('/partagerPhoto', 'MediasController@store')->name('storeMedia');
    Route::post('/posterCommentaire', 'CommentsController@store')->name('storeComment');
    Route::post('/aimerPhoto', 'LikesController@store')->name('storeLike');
    
});

Route::group(['middleware' => 'salarie'], function () {
    Route::post('/masquerEvenement/{id}', 'EventsController@masked')->name('maskedEvent');
});

Route::group(['middleware' => 'member'], function () {
    Route::get('/addProduct', 'ProductsController@create')->name('addProduct');
    Route::post('/addProduct', 'ProductsController@store')->name('storeProduct');
    Route::post('/product/{id}', 'ProductsController@destroy')->name('destroyProduct');
    
    Route::get('/creerActivite', 'ActivitiesController@create')->name('createActivity');
    Route::post('/creerActivite', 'ActivitiesController@store')->name('storeActivity'); 
    Route::post('/supprimerActivite', 'ActivitiesController@destroy')->name('destroyActivity');

    Route::get('/panier/{id}/{date}', 'OrdersController@show')->name('showUserBasket');

    Route::post('/supprimerEvenement/{id}', 'EventsController@destroy')->name('destroyEvent');
    Route::post('/creerEvent', 'EventsController@store')->name('storeEvent');
    Route::get('/creerEvent', 'EventsController@create')->name('showcreateEvent');

    Route::view('/detruireIdee', "detruireIdee");
    Route::post('/detruireIdee', 'ideasController@destroy')->name('destroyIdea');
});

