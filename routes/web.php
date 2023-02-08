<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Dashboard;
use App\Http\Controllers\FirebaseController;
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

Route::get('/', function () {
    return view('welcome');
});






Route::group(
    [
        'prefix' => 'dashboard',
        'as'     => 'dashboard.',
        'middleware' => [ 'auth']
    ],
    function () {
        Route::get( '/', [ Dashboard\DashboardController::class, 'index' ] );
        Route::resource( '/properties',  Dashboard\PropertyController::class);
//        Route::post('/properties-upload-img', 'Dashboard\PropertyController@uploadImg')
//             ->name('properties.upload.img');

    }
);

Auth::routes();








