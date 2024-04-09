<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegendController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LeagueListController;
use App\Http\Controllers\PlayerCardController;
use App\Http\Controllers\PrevSeasonController;
use App\Http\Controllers\LandingPageController;

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
Route::controller(LeagueListController::class)->group(function () {
    // For synopsis League List
    Route::get('/league-list', [LeagueListController::class, 'leagueListPage'])->name('index.league-list-page');
    // For Previous Seasons League List
    Route::get('/league-list-prev', [LeagueListController::class, 'leagueListPagePrev'])->name('index.league-list-page-prev');
});


// Navigate to Previous Seasons Page
Route::controller(PrevSeasonController::class)->group(function () {
    // Previous Champions League
    Route::get('/previous-ucl', 'previousUcl')->name('index.previous-ucl');
    // Previous EPL Seasons
    Route::get('/previous-epl-seasons', 'previousEplSeasons')->name('index.previous-epl-seasons');
    // Previous La-Liga Seasons
    Route::get('/previous-la-liga-seasons', 'previousLaLigaSeasons')->name('index.previous-la-liga-seasons');
    // Previous La-Liga Seasons
    Route::get('/previous-bundes-liga-seasons', 'previousBundesSeasons')->name('index.previous-bundes-seasons');
    // Previous Ligue-1 Seasons
    Route::get('/previous-serie-a-seasons', 'previousSerieaSeasons')->name('index.previous-seriea-seasons');
});

// Navigate to Players
Route::controller(PlayerController::class)->group(function () {
    // Players Card Page
    Route::get('/players', [PlayerController::class, 'playerCardPage'])->name('index.players');
    // Create Player Form
    Route::get('/players/create', [PlayerController::class, 'createPlayer'])->name('index.create-player');
    Route::post('/players/store', [PlayerController::class, 'storePlayer']);
});
