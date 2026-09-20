<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projets', [ProjetController::class, 'index']);

Route::get('/projets/create', [ProjetController::class, 'create']);
Route::post('/projets', [ProjetController::class, 'store']);

Route::get('/projets/{projet}/edit', [ProjetController::class, 'edit']);
Route::put('/projets/{projet}', [ProjetController::class, 'update']);
