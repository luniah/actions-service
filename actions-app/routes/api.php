<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleController;

Route::get('/hello', [SimpleController::class, 'hello']);
Route::get('/bye', [SimpleController::class, 'bye']);
