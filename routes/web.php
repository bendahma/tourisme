<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\BateauController;
use App\Http\Controllers\VolController;
use App\Models\Bateau;
use Illuminate\Support\Facades\Route;
use App\Models\Vol;
use App\Models\Voyage;


Route::get('/', 'IndexController@index')->name('index');


Route::get('/vols', function () {
    return view("vols",["vols" => Vol::all()]); 
    
});
Route::get('/voyages', function () {
    return view("voyages",["voyages" => Voyage::all()]); 
    
});
Route::get('/bateaux','BateauController@index'); 
    



    Route::get('hotels',[HotelController::class,'allHotels']);


   

Route::get('/contact', function () {
    return view('contact');
});

// ADMIN ROUTEs

Route::get('/admin','Admin\AdminController@statistique');

// ADMIN HOTEL
Route::get('/admin/hotels','Admin\HotelController@index')->name('hotels');
Route::get('/admin/hotels/create','Admin\HotelController@create')->name('newHotel');
Route::put('/admin/hotels','Admin\HotelController@update');
Route::post('/admin/hotels','Admin\HotelController@store');
Route::get('/admin/hotels/{id}','Admin\HotelController@edit');
Route::delete('/admin/hotels/{id}','Admin\HotelController@destroy');

//ADMIN VOLS
Route::get('/admin/vols','Admin\VolController@index');
Route::get('/admin/vols/create','Admin\VolController@create');
Route::put('/admin/vols','Admin\VolController@update');
Route::post('/admin/vols','Admin\VolController@store');
Route::get('/admin/vols/{id}','Admin\VolController@edit');
Route::delete('/admin/vols/{id}','Admin\VolController@destroy');
//ADMIN BATEAU
Route::get('/admin/bateaux','Admin\BateauController@index');
Route::put('/admin/bateaux','Admin\BateauController@update');
Route::get('/admin/bateaux/create','Admin\BateauController@create');
Route::post('/admin/bateaux','Admin\BateauController@store');
Route::get('/admin/bateaux/{id}','Admin\BateauController@edit');
Route::delete('/admin/bateaux/{id}','Admin\BateauController@destroy');


// Routes need to be authenticated to be accessed 
Route::middleware('auth')->group(function () {
   
   // Route::resource group all the basic : route index,create,store,edit,update, delete
   Route::resource('/admin/users', 'Admin\UserController') ; 
   Route::resource('/admin/abonnes', 'Admin\AbonneController') ;
   Route::resource('/admin/clients', 'Admin\ClientController') ;
   Route::resource('/admin/voyages', 'Admin\VoyageController') ;

});
































Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
