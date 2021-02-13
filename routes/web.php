<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestRestController;

// ----- info
// php artisan route:list
// php artisan route:clear
// php artisan make:controller NameController
// php artisan make:controller NameRestController --resource


// or 1
Route::get('/', [MainController::class, 'home']);
Route::get('/review', [MainController::class, 'review'])->name('review');
Route::post('/review/check', [MainController::class, 'review_check']);

// rest

// or 2

Route::get('/about', 'App\Http\Controllers\MainController@about');

// or 3

Route::get('/user/{id}/{name}', function ($id, $name) {
    // return view('user'); - for templates
    return 'Id='.$id.', Name='.$name;
});

Route::resource('rest', TestRestController::class)->names('restTest');
