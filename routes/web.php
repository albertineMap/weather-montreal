<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForecastController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('forecast', ForecastController::class);
Route::get('delete', [ForecastController::class, 'delete']);
Route::get('/', [ForecastController::class, 'index']);


