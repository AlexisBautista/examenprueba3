<?php

use App\Http\Livewire\Games\CreateGames;
use App\Http\Livewire\Games\DeleteGames;
use App\Http\Livewire\Games\EditGames;
use App\Http\Livewire\Games\IndexGames;
use App\Http\Livewire\Games\ShowGames;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
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
Route::get('/', IndexGames::class)->name("indexgames");
Route::get('/game', IndexGames::class)->name("indexgames");
Route::get('/game/create', CreateGames::class)->name("creategames");
Route::get('/game/{game}/edit', EditGames::class)->name('editgames');
Route::get('/game/{game}/show', ShowGames::class)->name('showgames');
Route::get('/game/{game}/delete', DeleteGames::class)->name('deletegames');
Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");
Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");
Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");
