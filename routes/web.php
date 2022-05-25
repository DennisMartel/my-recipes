<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\RecipeController;

Route::get('/', WebController::class)->name('home');

Route::get('/category/{slug}', function($slug) {
    return $slug;
})->name('category');

Route::get('/subcategory/{slug}', function($slug) {
    return $slug;
})->name('subcategory');

Route::get('/recipe-detail/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
