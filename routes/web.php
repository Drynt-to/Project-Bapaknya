<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('units', UnitsController::class);
