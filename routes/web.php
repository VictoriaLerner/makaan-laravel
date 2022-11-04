<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Dashboard;
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
        'middleware' => [ 'auth', 'verified' ]
    ],
    function () {


        Route::get( '/', [ Dashboard\DashboardController::class, 'index' ] );
//        Route::get( '/gallery', [ Dashboard\GalleryController::class, 'index' ] );
//        Route::get( '/widgets', [ Dashboard\WidgetsController::class, 'index' ] );
//        Route::get( '/conversion', [ Dashboard\ConversionController::class, 'index' ] );
//        Route::get( '/statistic', [ Dashboard\StatisticController::class, 'index' ] );
//        Route::get( '/upgrade', [ Dashboard\UpgradeController::class, 'index' ] );
//        Route::get( '/guide', [ Dashboard\GuideController::class, 'index' ] );


    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
