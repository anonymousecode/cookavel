<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReciperController;

Route::view('/', 'welcome');

Route::get('/recipe',[ReciperController::class, 'getRecipe'])->name('getRecipe');

Route::get('/recipe/{data}',[ReciperController::class, 'fromRecipeList'])->name('fromRecipeList');
Route::get('/recipe/alphabet/{alphabet}',[ReciperController::class, 'fromAlphabet'])->name('fromAlphabet');