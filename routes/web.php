<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReciperController;

Route::view('/', 'welcome');

Route::view('/recipe', 'recipe');    

Route::get('/recipe',[ReciperController::class, 'getRecipe'])->name('getRecipe');
