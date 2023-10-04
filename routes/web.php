<?php

/* use App\Http\Controllers\NameController; */

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name("home");

/* Route::resource("names", NameController::class); */

////////////////////////////////////////////ESEMPI////////////////////////////////////////////

//Genera tutte le Route
// Route::resource("comics", ComicController::class);

//  Index
//Route::get('/comics', [ComicController::class, "index"])->name("comics.index");

//  Create
//Route::get('/comics/create', [ComicController::class, "create"])->name("comics.create");

// Store
//Route::post('/comics', [ComicController::class, "store"])->name("comics.store");

// Show
//Route::get('/comics/{id}', [ComicController::class, "show"])->name("comics.show");

// Edit
//Route::get('/comics/{id}/edit', [ComicController::class, "edit"])->name("comics.edit");

// Update
//Route::put('/comics/{id}', [ComicController::class, "update"])->name("comics.update");

// Delete
//Route::delete('/comics/{id}', [ComicController::class, "destroy"])->name("comics.destroy");