<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\StateController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('api/quote', QuoteController::class);
Route::resource('api/car', CarController::class );
Route::resource('api/state', StateController::class);
Route::get('api/cities/{state_id}', [CityController::class, 'getCities'])->name('cities.getCities');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
