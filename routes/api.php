<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/search/local/{ceps}', [AddressController::class, 'search']);