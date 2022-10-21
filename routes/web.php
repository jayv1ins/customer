<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [CustomerController::class, 'index']);
Route::get("/customer/{id}/view",[CustomerController::class,"view"]);
Route::get("/customer/{id}/edit",[CustomerController::class,"edit"]);

Route::post("/customer/{id}",[CustomerController::class,"update"])->name('customer.update');
Route::post('{customer}',[CustomerController::class,"destroy"]);
