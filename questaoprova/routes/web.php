<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\provaController;


Route::get('/', [provaController::class, 'welcome']);
Route::get('/rota1', [provaController::class, 'rota1']);
Route::get('/rota2', [provaController::class, 'rota2']);
