<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BundesLigaController;
use App\Http\Controllers\EplController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\wc22Controller;
use App\Http\Controllers\LaLigaController;
use App\Http\Controllers\LegendController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LeagueListController;
use App\Http\Controllers\PrevSeasonController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SeriaAController;
use App\Models\BundesLigaClubs;

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
    Route::get('/players/create', [PlayerController::class, 'createPlayer'])->name('index.create-player')->middleware(['auth', 'user-access:admin']);
    // Store Created Player
    Route::post('/players/store', [PlayerController::class, 'storePlayer'])->name('index.store-player')->middleware(['auth','user-access:admin']);
    // Show Edit Player Form
    Route::get('/players/{id}/edit', [PlayerController::class, 'updatePlayer'])->name('index.update-player')->middleware(['auth','user-access:admin']);
    // Update Player and Save
    Route::put('/players/{id}/update', [PlayerController::class, 'saveUpdatPlayer'])->name('index.save-player')->middleware(['auth','user-access:admin']);
    // Delete Player
    Route::delete('/players/{id}/delete', [PlayerController::class, 'deletePlayer'])->name('index.delete-player')->middleware(['auth','user-access:admin']);
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
    Route::get('/la-liga-clubs/create', [LaLigaController::class, 'createClub'])->name('laliga.create-club')->middleware(['auth','user-access:admin']);
    // Store Create Club
    Route::post('/la-liga-clubs/store', [LaLigaController::class, 'storeClub'])->name('laliga.store-club')->middleware(['auth','user-access:admin']);
    // Show Edit Club Form
    Route::get('/la-liga-clubs/{id}/edit', [LaLigaController::class, 'updateClub'])->name('laliga.update-club')->middleware(['auth','user-access:admin']);
    // Update Club and Save
    Route::put('/la-liga-clubs/{id}/update', [LaLigaController::class, 'saveUpdatClub'])->name('laliga.save-club')->middleware(['auth','user-access:admin']);
    // Delete Player
    Route::delete('/la-liga-clubs/{id}/delete', [LaLigaController::class, 'deleteClub'])->name('la-liga.delete-club')->middleware(['auth','user-access:admin']);
    // Show Club Profile
    Route::get('/la-liga-clubs/{club}', [LaLigaController::class, 'showClub'])->name('laliga.show-club');
});

// Navigate to EPL Clubs
Route::controller(EplController::class)->group(function(){
    // Club Card Page
    Route::get('/epl-clubs', [EplController::class, 'eplClubCardPage'])->name('epl.la-liga-clubs');
    // Show Create Club Form
    Route::get('/epl-clubs/create', [EplController::class, 'createClub'])->name('epl.create-club')->middleware(['auth','user-access:admin']);
    // Store Create Club
    Route::post('/epl-clubs/store', [EplController::class, 'storeClub'])->name('epl.store-club')->middleware(['auth','user-access:admin']);
    // Show Edit Club Form
    Route::get('/epl-clubs/{id}/edit', [EplController::class, 'updateClub'])->name('epl.update-club')->middleware(['auth','user-access:admin']);
    // Update Club and Save
    Route::put('/epl-clubs/{id}/update', [EplController::class, 'saveUpdatClub'])->name('epl.save-club')->middleware(['auth','user-access:admin']);
    // Delete Player
    Route::delete('/epl-clubs/{id}/delete', [EplController::class, 'deleteClub'])->name('epl.delete-club')->middleware(['auth','user-access:admin']);
    // Show Club Profile
    Route::get('/epl-clubs/{club}', [EplController::class, 'showClub'])->name('epl.show-club');
});

// Navigate to Bundes Liga Clubs
Route::controller(BundesLigaController::class)->group(function(){
    // Club Card Page
    Route::get('/bundes-liga-clubs', [BundesLigaController::class, 'bundesligaClubCardPage'])->name('bundesliga.la-liga-clubs');
    // Show Create Club Form
    Route::get('/bundes-liga-clubs/create', [BundesLigaController::class, 'createClub'])->name('bundesliga.create-club')->middleware(['auth','user-access:admin']);
    // Store Create Club
    Route::post('/bundes-liga-clubs/store', [BundesLigaController::class, 'storeClub'])->name('bundesliga.store-club')->middleware(['auth','user-access:admin']);
    // Show Edit Club Form
    Route::get('/bundes-liga-clubs/{id}/edit', [BundesLigaController::class, 'updateClub'])->name('bundesliga.update-club')->middleware(['auth','user-access:admin']);
    // Update Club and Save
    Route::put('/bundes-liga-clubs/{id}/update', [BundesLigaController::class, 'saveUpdatClub'])->name('bundesliga.save-club')->middleware(['auth','user-access:admin']);
    // Delete Player
    Route::delete('/bundes-liga-clubs/{id}/delete', [BundesLigaController::class, 'deleteClub'])->name('bundesliga.delete-club')->middleware(['auth','user-access:admin']);
    // Show Club Profile
    Route::get('/bundes-liga-clubs/{club}', [BundesLigaController::class, 'showClub'])->name('bundesliga.show-club');
});

// Navigate to Seria A Clubs
Route::controller(SeriaAController::class)->group(function(){
    // Club Card Page
    Route::get('/seria-a-clubs', [SeriaAController::class, 'seriaAClubCardPage'])->name('seriaa.la-liga-clubs');
    // Show Create Club Form
    Route::get('/seria-a-clubs/create', [SeriaAController::class, 'createClub'])->name('seriaa.create-club')->middleware(['auth','user-access:admin']);
    // Store Create Club
    Route::post('/seria-a-clubs/store', [SeriaAController::class, 'storeClub'])->name('seriaa.store-club')->middleware(['auth','user-access:admin']);
    // Show Edit Club Form
    Route::get('/seria-a-clubs/{id}/edit', [SeriaAController::class, 'updateClub'])->name('seriaa.update-club')->middleware(['auth','user-access:admin']);
    // Update Club and Save
    Route::put('/seria-a-clubs/{id}/update', [SeriaAController::class, 'saveUpdatClub'])->name('seriaa.save-club')->middleware(['auth','user-access:admin']);
    // Delete Player
    Route::delete('/seria-a-clubs/{id}/delete', [SeriaAController::class, 'deleteClub'])->name('seriaa.delete-club')->middleware(['auth','user-access:admin']);
    // Show Club Profile
    Route::get('/seria-a-clubs/{club}', [SeriaAController::class, 'showClub'])->name('seriaa.show-club');
});



// Navigate to World Cup 22
Route::controller(wc22Controller::class)->group(function(){
    // Group Stage Point Table
    Route::get('/wc22-group-stage', [wc22Controller::class, 'wc22GroupStage'])->name('worldcup22.group-stage-point-table');
    // Result Table
    Route::get('/wc22-result-table', [wc22Controller::class, 'wc22ResultTable'])->name('worldcup22.result-table');
});

// Navigate to Game Page
Route::controller(GameController::class)->group(function(){
    // Game Page
    Route::get('/kickoff!!!', [GameController::class, 'gamePage'])->name('game.game-page');
    
});

// Authentication Routes
Route::controller(AuthController::class)->group(function(){
    // Register Page
    Route::get('/loginsystem', [AuthController::class, 'registerPage'])->name('auth.register-page');
    // Save Registered User
    Route::post('/loginsystem/save', [AuthController::class, 'storeUser'])->name('auth.save-user');
    // Login Page
    Route::get('/loginsystem', [AuthController::class, 'loginPage'])->name('auth.login-page');
    // Login Action
    Route::post('/loginsystem/login', [AuthController::class, 'loginAction'])->name('auth.login-action');
    // Logout Action
    Route::get('/logout', 'logout')->middleware('auth')->name('auth.logout-action');

});

// Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user-profile', [HomePageController::class, 'userProfilePage'])->name('homepage.user-profile');
});

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin-dashboard', [HomePageController::class, 'adminDashboard'])->name('homepage.admin-dashboard');
    
});

// News Website
Route::get('/news', [NewsController::class, 'newsPage'])->name('index.news-page');