<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\StarshipController;
use App\Http\Controllers\VehicleController;
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

Route::get('/', function () {
    return view('welcome');
});

// No. 1
Route::get('/answer1', [Controller::class, 'answer1']);

// No. 3
Route::get('/answer3/{size}', [Controller::class, 'answer3']);


// No. 2
// Resource
Route::get('/films',[FilmController::class,'index']);
Route::get('/films/{page}',[FilmController::class,'indexPage']);
Route::get('/films/search/{query}',[FilmController::class,'search']);

Route::get('/people',[PeopleController::class,'index']);
Route::get('/people/{page}',[PeopleController::class,'indexPage']);
Route::get('/people/search/{query}',[PeopleController::class,'search']);

Route::get('/planets',[PlanetController::class,'index']);
Route::get('/planets/{page}',[PlanetController::class,'indexPage']);
Route::get('/planets/search/{query}',[PlanetController::class,'search']);

Route::get('/species',[SpeciesController::class,'index']);
Route::get('/species/{page}',[SpeciesController::class,'indexPage']);
Route::get('/species/search/{query}',[SpeciesController::class,'search']);

Route::get('/starships',[StarshipController::class,'index']);
Route::get('/starships/{page}',[StarshipController::class,'indexPage']);
Route::get('/starships/search/{query}',[StarshipController::class,'search']);

Route::get('/vehicles',[VehicleController::class,'index']);
Route::get('/vehicles/{page}',[VehicleController::class,'indexPage']);
Route::get('/vehicles/search/{query}',[VehicleController::class,'search']);


