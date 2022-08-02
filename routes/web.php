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
Route::group(['prefix' => 'esr'], function () {

  Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

});


Route::get('/esr-dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('esr-dashboard');

Route::group(['middleware' => ['auth']], function() {

    Route::controller(App\Http\Controllers\VehiclesController::class)->group(function () {
        Route::get('/vehicles', 'index');
        Route::get('/create-vehicle', 'create');
        Route::post('/vehicles', 'store');
       // Route::get('GetModelAgainstMakeEdit/{id}', 'GetModelAgainstMakeEdit');
        Route::get('/vehicles/{vehicle}/edit', 'edit');
        Route::put('/vehicles/{vehicle}', 'update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('vehicles/{vehicle_id}/delete', 'destroy');
        Route::get('vehicle-image/{v_images_id}/delete', 'destroyImage');
    });
    Route::controller(App\Http\Controllers\CarouselController::class)->group(function () {
        Route::get('/carousels', 'index');
        Route::get('/create', 'create');
        Route::post('/carousels', 'store');
        Route::delete('carousels/{carousel}', 'destroy')->name('carousels.destroy');
    });
    Route::controller(App\Http\Controllers\ContactsController::class)->group(function () {
        Route::get('/messages', 'index');
    });
    /**
    * Logout Route
    */
    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');

 });

 /**
  * Pages Route
  */
  Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

  Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
  Route::get('GetModelAgainstMakeEdit/{id}', [App\Http\Controllers\PagesController::class, 'GetModelAgainstMakeEdit']);
  Route::POST('/my-search', [App\Http\Controllers\PagesController::class, 'getData'])->name('my-search');

  Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'about']);
  Route::get('/contact-us', [App\Http\Controllers\PagesController::class, 'contact']);
  Route::post('/contact-us', [App\Http\Controllers\PagesController::class, 'store'])->name('contact.store');
  Route::get('/terms-of-service', [App\Http\Controllers\PagesController::class, 'terms']);
  Route::get('/copyright', [App\Http\Controllers\PagesController::class, 'copyright']);
  Route::get('/financing', [App\Http\Controllers\PagesController::class, 'finance']);
  Route::get('/blogs', [App\Http\Controllers\PagesController::class, 'blog']);
  Route::get('/careers', [App\Http\Controllers\PagesController::class, 'career']);
  Route::get('/all-vehicles', [App\Http\Controllers\PagesController::class, 'vehicle']);
  Route::get('/vehicle-details/{id}', [App\Http\Controllers\PagesController::class, 'details'])->name('details');
