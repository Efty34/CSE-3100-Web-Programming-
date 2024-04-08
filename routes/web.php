<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegendController;
use App\Http\Controllers\LeagueListController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PrevSeasonController;

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
Route::get('/', [LandingPageController::class, 'landingPage'])->name('index.landing-page');

// Navigate to Legend Page
Route::get('/legend', [LegendController::class, 'legendPage'])->name('index.legend-page');

// Navigate to League List Page
Route::get('/league-list', [LeagueListController::class, 'leagueListPage'])->name('index.league-list-page');
Route::get('/league-list-prev', [LeagueListController::class, 'leagueListPagePrev'])->name('index.league-list-page-prev');

// Navigate to Previous Seasons Page
Route::controller(PrevSeasonController::class)->group(function (){
    // Previous EPL Seasons
    Route::get('/previous-epl-seasons', 'previousEplSeasons')->name('index.previous-epl-seasons');
});