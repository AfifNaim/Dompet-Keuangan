<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\OntimeController;
use App\Http\Controllers\RecurentController;
use App\Http\Controllers\Sub_CategorieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/test', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD Categorie
Route::resource('categorie', CategorieController::class);

//CRUD Income
Route::resource('income', IncomeController::class);

//CRUD Expense
Route::resource('expense', ExpenseController::class);

//CRUD Ontime
Route::resource('ontime', OntimeController::class);

//CRUD Recurent
Route::resource('recurent', RecurentController::class);

//CRUD Sub Categorie
Route::resource('sub_categorie', Sub_CategorieController::class);


