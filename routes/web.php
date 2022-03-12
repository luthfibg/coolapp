<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function () {
    return view('portfolio');
});
*/

/*Route::get("/", [PortController::class, 'welcome']);*/

Route::get("/", [PortfolioController::class, 'home']);

Route::get("/about", [PortfolioController::class, 'about']);

Route::get("/service", [PortfolioController::class, 'service']);

Route::get("/contact", [PortfolioController::class, 'contact']);

/*Route::get("/home", function(){
    return()
});*/

// Route::get('/showImage', 'PortfolioController@showImage');
Route::get("/showImage", [PortfolioController::class, 'showImage']);

Route::get("/myroadmap", [PortfolioController::class, 'myroadmap']);