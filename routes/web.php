<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\BateauController;
use App\Http\Controllers\VolController;
use App\Models\Bateau;
use Illuminate\Support\Facades\Route;
use App\Models\Vol;
use App\Models\Voyage;

Route::get('/', 'IndexController@index')->name('index');
Route::get('/vols', 'IndexController@vols')->name('index.vols');
Route::get('/voyages', 'IndexController@voyages')->name('index.vols');
Route::get('/hotels', 'IndexController@hotels')->name('index.hotels');
Route::get('/hotels/{hotel}/chambres', 'IndexController@chambres')->name('hotels.chambres');
Route::get('/bateaux', 'IndexController@bateaux')->name('index.bateaux');
Route::get('/contact', 'IndexController@contacts')->name('index.contacts');
Route::post('/reservation/{reservation}', 'IndexController@reservation')->name('reservation');

// admin and abonnee and client interfaces routes
// Routes need to be authenticated to be accessed 
Route::middleware('auth')->group(function () {
    // route for dashboard
    Route::get('/admin','Admin\DashboardController@index');
    Route::get('/admin/hotels/{hotel}/chambres', 'Admin\ChambreController@chambreList')->name('chambreList') ;
    Route::get('/admin/hotels/{hotel}/chambres/create', 'Admin\ChambreController@create')->name('chambre.create') ;
    Route::get('/clients/{user}/profile', 'Admin\ClientController@profile')->name('clients.profile') ;
    // Route::resource group all the basic : route index,create,store,edit,update, delete
    Route::resource('/admin/users', 'Admin\UserController') ; 
    Route::resource('/admin/abonnes', 'Admin\AbonneController') ;
    Route::resource('/admin/clients', 'Admin\ClientController') ;
    Route::resource('/admin/voyages', 'Admin\VoyageController') ;
    Route::resource('/admin/hotels', 'Admin\HotelController') ;
    Route::resource('/admin/hotels/chambres', 'Admin\ChambreController') ;
    Route::resource('/admin/vols','Admin\VolController');
    Route::resource('/admin/bateaux','Admin\BateauController');

});
require __DIR__.'/auth.php';
