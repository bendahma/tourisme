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


// admin and abonnee and client interfaces routes
// Routes need to be authenticated to be accessed 
Route::middleware('auth')->group(function () {
    // route for dashboard
    Route::get('/admin','Admin\DashboardController@index');

    Route::get('/admin/hotels/{hotel}/chambres', 'Admin\ChambreController@chambreList')->name('chambreList') ;
    Route::get('/admin/hotels/{hotel}/chambres/create', 'Admin\ChambreController@create')->name('chambre.create') ;
    
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
































Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
