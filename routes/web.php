<?php

use App\Http\Controllers\LaLigaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegendController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LeagueListController;
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

// Navigate to Legend Page --> Static Page
Route::get('/legend', [LegendController::class, 'legendPage'])->name('index.legend-page');

// Navigate to League List Page
Route::controller(LeagueListController::class)->group(function () {
    // For synopsis League List
    Route::get('/league-list', [LeagueListController::class, 'leagueListPage'])->name('index.league-list-page');
    // For Previous Seasons League List
    Route::get('/league-list-prev', [LeagueListController::class, 'leagueListPagePrev'])->name('index.league-list-page-prev');
});


// Navigate to Previous Seasons Page --> JSON Parsing
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

// Navigate to Players --> CRUD Operations
Route::controller(PlayerController::class)->group(function () {
    // Players Card Page
    Route::get('/players', [PlayerController::class, 'playerCardPage'])->name('index.players');
    // Show Create Player Form
    Route::get('/players/create', [PlayerController::class, 'createPlayer'])->name('index.create-player');
    // Store Created Player
    Route::post('/players/store', [PlayerController::class, 'storePlayer'])->name('index.store-player');
    // Show Compare Page
    Route::get('/players/compare', [PlayerController::class, 'comparePlayers'])->name('index.compare-players');
    // Compare Action
    Route::post('/players/compareaction', [PlayerController::class, 'compareAction'])->name('index.compare-action');
    // Show Player Profile
    Route::get('/players/{player}', [PlayerController::class, 'showPlayer'])->name('index.show-player');
});

// Navigate to La-Liga Clubs
Route::controller(LaLigaController::class)->group(function(){
    // Club Card Page
    Route::get('/la-liga-clubs', [LaLigaController::class, 'laligaClubCardPage'])->name('laliga.la-liga-clubs');
    // Show Create Club Form
    Route::get('/la-liga-clubs/create', [LaLigaController::class, 'createClub'])->name('laliga.create-club');
    // Store Create Club
    Route::post('/la-liga-clubs/store', [LaLigaController::class, 'storeClub'])->name('laliga.store-club');
    // Show Club Profile
    Route::get('/la-liga-clubs/{club}', [LaLigaController::class, 'showClub'])->name('laliga.show-club');
});