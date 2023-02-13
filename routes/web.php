<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// No. 1
Route::get('/answer1', [Controller::class, 'answer1']);

// No. 2
// View all routes in routes.api file

// No. 3
Route::get('/answer3/{size}', [Controller::class, 'answer3']);
