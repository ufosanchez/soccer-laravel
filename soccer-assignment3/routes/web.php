<?php

use app\Models\League;
use app\Models\Team;
use app\Models\Player;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'leagues/trash/{id}',
    [LeagueController::class, 'trash'])
    ->name('leagues.trash')->middleware(['auth', 'verified']);
    
Route::get(
    'leagues/trashed/',
    [LeagueController::class, 'trashed'])
    ->name('leagues.trashed')->middleware(['auth', 'verified']);

Route::get(
    'leagues/restore/{id}',
    [LeagueController::class, 'trash'])
    ->name('leagues.restore')->middleware(['auth', 'verified']);

    


Route::get(
    'teams/trash/{id}',
    [TeamController::class, 'trash'])
    ->name('teams.trash')->middleware(['auth', 'verified']);
    
Route::get(
    'teams/trashed/',
    [TeamController::class, 'trashed'])
    ->name('teams.trashed')->middleware(['auth', 'verified']);

Route::get(
    'teams/restore/{id}',
    [TeamController::class, 'trash'])
    ->name('teams.restore')->middleware(['auth', 'verified']);


    

Route::resource('leagues', LeagueController::class);
Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/leagues/create', [LeagueController::class, 'create'])->name('leagues.create');

    Route::get('/leagues/{league}/edit', [LeagueController::class, 'edit'])->name('leagues.edit');
});

require __DIR__.'/auth.php';
