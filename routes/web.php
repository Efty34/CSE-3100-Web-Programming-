<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LegendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Navigate to Home Page
Route::get('/', [LandingPageController::class, 'landingpage'])->name('index.landing-page');

// Navigate to Legend Page
Route::get('/legend', [LegendController::class, 'legendpage'])->name('index.legend-page');